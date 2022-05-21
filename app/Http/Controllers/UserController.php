<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\Http\Requests;

use App\User;
use Session;
use Validator;
use Hash;
use Log;
use DB;

class UserController extends Controller
{
    protected function login() {
		if (!Auth::check())
			return view('admin.login');
		elseif(Auth::check())
			return redirect('admin');
		else
			return redirect()->back();
	}

    public function authenticate()
    {
        $credentials = [
            'email' => Input::get('email'),
            'password' => Input::get('password'),
        ];
        
        if(!Auth::attempt($credentials))
        {
            auth()->logout();
            Session::flash('flash_error','Wrong username/password!');

            return redirect()->back();
        }

        $user = Auth::user();
        
        Session::flash('flash_message','Logged in!');

        return redirect()
            ->route('admin.article.index')
            ->with('flash_message', 'Logged in!');
    }

    protected function logout() {
		if (Auth::check()) {
			auth()->logout();
			return redirect('/')->with('flash_success', 'Logged out!');
		}
	}


}
