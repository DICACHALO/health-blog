<?php

namespace App\Http\Controllers;
use App\Models\User;
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

     // List public posts
    public function index()
    {
        $posts = Post::all();
        return view('welcome', compact('posts'));
    }

    // List private posts
    public function list()
    {
        $user = auth()->user()->id;
        $posts = DB::table('posts')
        ->select('title', 'description', 'created_at')
        ->where('user_id', $user)
        ->get();
        return view('home', compact('posts'));
    }


    // User search posts
    public function search(Request $request)
    {
        $from = $request->get('date_ini');
        $to = $request->get('date_finish');
        
        $result = DB::table('posts')
        ->select('title', 'description', 'created_at')
        ->whereBetween('created_at', [$from, $to])
        ->get();

        return view('layouts.search', compact('result'));

    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
        $post = new Post();
        return view('post/create');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post = Post::create([
            'title' => $request->input('title'),
            'description' => $request->input('description'),
            'user_id' => auth()->user()->id
        ]);

        return view('post/show');
    }
}
