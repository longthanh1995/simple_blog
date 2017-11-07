<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\MessageBag;
use Auth;
use Validator;
use App\Model\User;
use Session;
class AuthController extends Controller
{

    public function getLogin()
    {
    	return redirect()->route('home');
    }
    public function postLogin(Request $request)
    {
        $rules = [
            'email' => 'bail|required',
            'password' => 'bail|requierd|min:8'
        ];
        $messages = [
            'email.required' => 'Email field is required',
            'password.required' => 'Password field is required',
            'password.min' => 'Password length must be at least 8 characters',
        ];
        $validator = Validator::make($request->all(), $this->rules, $messages);
        if($validator->passes()) {
            if (!Auth::attempt($request->only(['email', 'password']))) {
                $errors = new MessageBag(['errorLogin' => 'Wrong Email or Password !']);
                return response()->json([
                    'error' => true,
                    'message' => $errors
                ]);
            } else {
                return response()->json([
                    'error' => false,
                    'redirect' => 'forum'
                ]);
            }
        } else {
            return response()->json(['error' => $validator->errors()->all()]);
        }
    } 
    public function getRegister()
    {
    	return redirect()->route('home');
    }
    public function postRegister(Request $request)
    {
        $rules = [
            'username' => 'bail|required|min:6',
            'password' => 'bail|required|min:8',
            'email'    => 'bail|required|email|unique:users'
        ];
        $messages = [
            'username.required' => 'Username is required',
            'username.min' => 'Username must be at least 6 characters',
            'password.required' => 'Password field is required',
            'password.min' => 'Password length must be at least 8 characters',
            'email.required' => 'Email field is required',
            'email.unique' => 'This email has already been taken',
        ];
        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->passes()) {
            $user = User::create([
                'name' => $request->input('username'),
                'password' => bcrypt($request->input('password')),
                'email' => $request->input('email'),
            ]);
            Auth::login($user);
            return response()->json([
                'redirect' => 'forum',
                'error' => false
            ]);
        }
        return response()->json(['error' => $validator->errors()->all()]);
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('home');
    }
}
