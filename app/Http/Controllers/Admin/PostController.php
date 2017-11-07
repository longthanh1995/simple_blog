<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Post;
use App\Model\User;
use Response;
class PostController extends Controller
{
	public function index()
	{
		$posts = Post::all();
		$users = User::all();
		return view('admin.posts.index', compact('posts', 'users'));
	}

	public function postResults() 
	{
		// dd($request->input('search_post'));
		// if($request->ajax()) {
		// 	$search_post = $request->input('search_post');
		// 	$results = Post::where('title', 'LIKE', '%$search_post%')->get();
		// 	$data= "";
		// 	if($results) {
		// 		foreach ($results as $result) {
		// 			$dat .= '<tr>'.
		// 						'<td>'.$result->title.'</td>'.
		// 						'</tr>';
		// 		}
		// 		return response()->json($dat);
		// 	}
		// }
	}
}
