<?php

class AuthController extends \BaseController {

	public function login(){
		 if(Auth::attempt(Input::only('username','password'))){
            return Auth::user();
        }else{
            return 'invalid username/pass combo';
        }
	}

	public function logout(){
        Auth::logout();
        return 'logged out';
    }

}