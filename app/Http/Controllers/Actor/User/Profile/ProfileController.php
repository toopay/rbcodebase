<?php

namespace App\Http\Controllers\Actor\User\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\User\UpdateProfileRequest;
use App\Repositories\Actor\User\UserRepository;
use App\Models\Actor\User\User;
use App\Models\Actor\User\UserField;
use App\Models\Actor\User\UserMeta;
use App\Models\Actor\User\UserType;

use App\Repositories\Common\Breadcrumbs;
use SEO;
use Illuminate\Http\Request;

/**
 * Class ProfileController
 * @package App\Http\Controllers\App
 */
class ProfileController extends Controller
{
	/**
	 * @var UserRepository
	 */
	protected $user;

	/**
	 * ProfileController constructor.
	 * @param UserRepository $user
	 */
	public function __construct(UserRepository $user) {
	{
		$this->user = $user;

		// Set Base Breadcrumb
		Breadcrumbs::push('<i class="fa fa-home"></i>', route('marketing.index'));
	}

	/**
	 * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
	 */
	public function index()
	{
		// User
		$user = access()->user();
		$usermeta = UserField::whereHas('user_types', function ($q) {
				$q->whereIn('id', access()->user()->types()->pluck('id'));
			})->withMeta(access()->user()->id)->get();

		// Specify Title
		$title = 'Profile';

		// Set Breadcrumbs
		Breadcrumbs::push($title, route('actor.user.profile'));

		return view('actor.user.profile.index', compact('title', 'brand', 'user', 'usermeta'));
	}

	/**
	 * @return mixed
	 */
	public function edit()
	{

		$brand = access()->profile();

		$customFields = UserField::whereHas('user_types', function ($q) {
			$q->whereIn('id', access()->user()->types()->pluck('id'));
		})->withMeta(access()->user()->id)->get();

		$user = access()->user();

		$allUserTypes = UserType::showOnSettings()->get(['id', 'title']);

		$userTypes = $user->types()->pluck('id')->toArray();


		// Specify Title
		$titleparent = 'Profile'; // $user->name_first .' '. $user->name_last;
		$title = 'Edit'; // @TODO: Translate

		// Set Breadcrumbs
		Breadcrumbs::push($titleparent, route('actor.user.profile'));
		Breadcrumbs::push($title, route('actor.user.profile.edit'));

		// Return View
		return view('actor.user.profile.edit', compact('title', 'brand', 'customFields', 'user', 'allUserTypes', 'userTypes'));
	}

	/**
	 * @param  UserRepositoryContract         $user
	 * @param  UpdateProfileRequest $request
	 * @return mixed
	 */
	public function update(UserRepositoryContract $user, UpdateProfileRequest $request)
	{
		$this->user->updateProfile(access()->id(), $request->all());

		// Custom Types
		access()->user()->updateTypes($request->types);

		return redirect()->route('actor.user.profile')->withFlashSuccess(trans('strings.app.user.profile_updated'));
	}

	public function updateMeta(Request $request)
	{
		access()->user()->saveMeta($request->except('_method', '_token'));

		return redirect()->route('actor.user.profile.edit');
	}

	public function show($name_slug)
	{
		// Get User Information
		$user = User::select('id', 'name_first', 'name_last', 'name_slug', 'status', 'timezone', 'language', 'created_at', 'updated_at')->where('name_slug', $name_slug)->firstorFail();

		// Meta
		SEO::opengraph()->setTitle($user->name_first .' '. $user->name_last)
					->setDescription($user->name_first .' '. $user->name_last .' is a member of the Hiekr.Com/munity')
					->setType('profile')
					->setProfile([
						'first_name' => $user->name_first,
						'last_name' => $user->name_last,
						'username' => $user->name_slug,
					]);

		return view('actor.user.profile.show', compact('user'));
	}
}
