<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Post;
use App\Model\User;
class AdminController extends Controller
{
    public function getDashboard()
    {
    	$posts = Post::all();
    	$users = User::all();
    	return view('admin.index', compact('posts', 'users'));
    }
}
