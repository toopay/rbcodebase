<?php

namespace App\Http\Controllers;

use Mail;
use App\Mail\Test;
use Illuminate\Http\Request;

class HomeController extends Controller
{
	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		//$this->middleware('auth');
	}

	/**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{

		// Mail::to('rob@bertholf.com')->send(new Test());
		//Mail::to('rob@bertholf.com')->queue(new Test);

		return view('home');
	}
}
