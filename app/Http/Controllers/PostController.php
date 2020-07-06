<?php

namespace App\Http\Controllers;

use App\Post;
use App\Category;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $posts = Post::all();
      $categories = Category::all();
      return view('posts')->with('posts', $posts)->with('categories', $categories);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('post_creation')->with('categories', $categories);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $post = Post::where('name', $request->post_old_name)->first();
      if($post==null) {
        $new_post = new Post;
        $new_post->name = $request->post_name;
        $cat_id = Category::where('name', $request->post_category)->first();
        $new_post->category_id = $cat_id->id;
        $new_post->content = nl2br($request->post_contect);
        $new_post->img = $request->post_img->move('post_images', $request->post_name.'.jpg');
        $new_post->save();
      } else {
        $post->name = $request->post_old_name;
        $cat_id = Category::where('name', $request->post_category)->first();
        $post->category_id = $cat_id->id;
        $post->content = nl2br($request->post_contect);
        if($request->post_img!=null) {
          $post->img = $request->post_img->move('post_images', $request->post_name.'.jpg');
        }

        $post->save();
      }
      return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $post = Post::where('id', $id)->first();
      $categories = Category::all();
      return view('post_edit')->with('post', $post)->with('categories', $categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $post = Post::where('id', $id)->first();
      $post->delete();
      return redirect()->back();
    }
}
