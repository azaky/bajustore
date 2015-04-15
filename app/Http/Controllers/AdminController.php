<?php namespace App\Http\Controllers;

class AdminController extends Controller {
	/**
	 * Show the application welcome screen to the admin.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('admin.dashboard');
	}

	public function login()
	{
		return view('admin.login');
	}

	public function showItemForm()
	{
		return view('admin.add-item');
	}

	public function addItem()
	{
	}
}