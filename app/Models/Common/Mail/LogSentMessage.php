<?php

namespace App\Listeners\Common\Mail;

use App\Repositories\Common\Mail\LogRepositoryContract;
use Exception;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Events\MessageSending;
use Illuminate\Queue\InteractsWithQueue;

/**
 * Class LogSentMessage
 * @package App\Listeners\Common
 */
class LogSentMessage implements ShouldQueue
{
	use InteractsWithQueue;

	/**
	 * @var App\Models\Common\Mail\Log
	 */
	protected $logs;

	/**
	 * Create the event handler.
	 *
	 * @return void
	 */
	public function __construct(LogRepositoryContract $logs)
	{
		$this->logs = $logs;
	}

	/**
	 * Handle the event.
	 *
	 * @param  MessageSending $event
	 * @return void
	 */
	public function handle(MessageSending $event)
	{
		try {
			$message = $event->message;
			$from = $message->getFrom();
			$sender = empty($from) ? 'system@'.config('app.url') : key($from);
			$targets = $message->getTo();

			foreach ($targets as $target => $name) {
				$this->logs->create([
					'from' => str_replace(['http://', 'https://'], [''], $sender),
					'to' => $target,
					'subject' => $message->getSubject(),
					'content' => $message->toString(),
				]);
			}
		} catch (Exception $e) {
			\Log::critical('Email was not logged : '.$e->getMessage());
		}
	}
}
