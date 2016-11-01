<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller as BaseController;
use Auth;
use Redirect;
use Validator;
use Illuminate\Http\Request;
class AuthController extends BaseController
{
	public function home(){
		if(Auth::check()){
			return Redirect::route('dashboard');
		}
		return view('login');	
	}
	public function login(Request $request){
		$data = array('email'=>$request->get('email'),'password'=>$request->get('password'));
		$rules=array(
				'email' => 'required',
				'password' => 'required',
				);
			$validator = Validator::make($data, $rules);
			if($validator->fails()){

				return Redirect::back()->withErrors($validator)->withInput();
			}
			else{
				if(Auth::attempt($data)){
					return Redirect::route('dashboard');
				}
				else{
					return Redirect::back()->with('message','Your E-mail / Password combination is incorrect!');
				}
			}

	}
	public function logout(){
		if(Auth::check()){
			Auth::logout();
		}
		return Redirect::route('login');
	}
}
