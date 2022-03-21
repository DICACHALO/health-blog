<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Carbon;
use DB;

use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     // List posts
    public function index()
    {
        $posts = Post::all();
        return view('welcome', compact('posts'));
    }
    // User search posts
    public function search(Request $request)
    {
        $from = $request->get('date_ini');
        $to = $request->get('date_finish');
        
        $result = DB::table('posts')
        ->select('title', 'description', 'published_at')
        ->whereBetween('published_at', [$from, $to])
        ->get();

        return view('layouts.search', compact('result'));

    }


}
