<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\User;
class UserController extends Controller
{
    public function index()
    {
    	$users = User::all();
    	$posts = User::all();
    	return view('admin.users.index', compact('users', 'posts'));
    }
}
