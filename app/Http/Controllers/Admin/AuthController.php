<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function __construct()
    {
    	// $this->middleware('auth:admin');
    }
    public function getLogin()
    {
    	return view('admin.auth.login');
    }
    public function postLogin(Request $request)
    {
    	$validator = Validator::make($request->all(), [
    		'email' => 'required|email|unique:admins',
    		'password' => 'required|min:6'
    	]);
    }
}
