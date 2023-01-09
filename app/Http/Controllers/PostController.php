<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = [
            'posts' => Post::all(),
            'count_user' => Post::all(),
            'menu'       => 'menu.v_menu_admin',
            'content'    => 'content.show',
            'title'    => 'Table User'
        ];
        // $posts = Post::all();
        return view('layouts.v_template',$data);
        
        // return view("content.show",compact('posts'));
        // return view('insert');
    }

    public function insert()
    {
        $data = [
            'count_user' => '',
            'menu'       => 'menu.v_menu_admin',
            'content'    => 'content.insert',
            'title'    => 'Table User'
        ];
        
        return view('layouts.v_template',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post=new Post;
        $post->	branch_name=$request->title;
        $post->admin=$request->admin;
        $post->area =$request->area;
        $post->departments = $request->departments;
        $post->employees = $request->employees;
        $post->users = $request->users;
        $post->save();
        $data = [
            'posts' => Post::all(),
            'count_user' => '',
            'menu'       => 'menu.v_menu_admin',
            'content'    => 'content.show',
            'title'    => 'Table User'
        ];
        return view('layouts.v_template',$data);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    // public function show(Post $post)
    // {
    //     $posts = post::all();
    //     return view("show",['post'=>$posts]);
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request ,$id)
    {
        
        $data = [
            'posts' =>post::find($id),
            'count_user' => '',
            'menu'       => 'menu.v_menu_admin',
            'content'    => 'content.edit',
            'title'    => 'Table User'
        ];
        return view('layouts.v_template',$data);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post,$id)
    {
        $post = post::find($id);
        $post->	branch_name=$request->branch_name;
        $post->admin=$request->admin;
        $post->area =$request->area;
        $post->departments = $request->departments;
        $post->employees = $request->employees;
        $post->users = $request->users;
        $post->save();
        $data = [
            'posts' => Post::all(),
            'count_user' => '',
            'menu'       => 'menu.v_menu_admin',
            'content'    => 'content.show',
            'title'    => 'Table User'
        ];
        return view('layouts.v_template',$data);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = post::find($id);
        $post -> delete();
        $data = [
            'posts' => Post::all(),
            'count_user' => '',
            'menu'       => 'menu.v_menu_admin',
            'content'    => 'content.show',
            'title'    => 'Table User'
        ];
        return view('layouts.v_template',$data);
    
    }

    
}
 

   
