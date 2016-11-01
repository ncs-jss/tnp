<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Auth;
use Redirect;
use Validator;
use Illuminate\Http\Request;
class DashboardController extends BaseController
{
	  public function __construct()
    {
        $this->middleware('auth');
    }
	public function index(){
		$action = "Dashboard";
		$name = Auth::user()->name;
		return view('dashboard',compact('action','name'));
	}
}
