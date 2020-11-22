<?php namespace App\Controllers;

class Home extends BaseController
{
	public function index()
	{
		return view('home');
	}

	public function help()
	{
		return view('welcome_message');
	}

	public function disable()
	{
		return view('disable_right_clks');
	}

	public function log()
	{
		return view('login');
	}

	public function sign()
	{
		return view('signup');
	}

	//--------------------------------------------------------------------

}
