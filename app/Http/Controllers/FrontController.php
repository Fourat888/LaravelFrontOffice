<?php

namespace App\Http\Controllers;

use App\About;
use App\Contact;
use App\Post;
use App\Category;
use App\Setting;
use App\Subscriber;
use App\Site;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function error($error)
    {
        return view('error')->with('error', $error);
    }

    public function homepage()
    {
        $categories = Category::all();
        $posts = Post::all();
        $settings = Setting::where('id', 1)->first();
        $site_live = Site::all();
        return view('homepage')->with('categories', $categories)->with('posts', $posts)->with('settings', $settings)->with('site_live', $site_live);
    }

    public function blog()
    {
        $categories = Category::all();
        $posts = Post::all();
        $all_posts = Post::all();
        $site_live = Site::all();
        return view('blog')->with('categories', $categories)->with('posts', $posts)->with('all_posts', $all_posts)->with('site_live', $site_live);
    }

    public function post($id)
    {
        $categories = Category::all();
        $post = Post::where('id', $id)->first();
        $post_category = Category::where('id', $post->category_id)->first();
        $img = $post->img;
        $all_posts = Post::all();
        return view('post')->with('categories', $categories)->with('post', $post)->with('img', $img)->with('all_posts', $all_posts)->with('post_category', $post_category);
    }

    public function about()
    {
        $about = About::where('id', 1)->first();
        if($about==null) {
          $img = null;
          $content = null;
          $site_live = Site::all();
          return view('about-me')->with('img', $img)->with('content', $content)->with('site_live', $site_live);
        } else {
          $img = $about->img;
          $content = $about->content;
          $site_live = Site::all();
          return view('about-me')->with('img', $img)->with('content', $content)->with('site_live', $site_live);
        }
    }

    public function contact()
    {
      $contact = Contact::where('id', 1)->first();
      if($contact==null) {
        $img = null;
        $address = null;
        $country = null;
        $email = null;
        $phone = null;
        $facebook = null;
        $instagram = null;
        $twitter = null;
        $youtube = null;
        $site_live = Site::all();
        return view('contact-me')->with('img', $img)->with('address', $address)->with('country', $country)->with('email', $email)->with('phone', $phone)->with('facebook', $facebook)->with('instagram', $instagram)->with('twitter', $twitter)->with('youtube', $youtube)->with('site_live', $site_live);
      } else {
        $img = $contact->img;
        $address = $contact->address;
        $country = $contact->country;
        $email = $contact->email;
        $phone = $contact->phone;
        $facebook = $contact->facebook;
        $instagram = $contact->instagram;
        $twitter = $contact->twitter;
        $youtube = $contact->youtube;
        $site_live = Site::all();
        return view('contact-me')->with('img', $img)->with('address', $address)->with('country', $country)->with('email', $email)->with('phone', $phone)->with('facebook', $facebook)->with('instagram', $instagram)->with('twitter', $twitter)->with('youtube', $youtube)->with('site_live', $site_live);
      }
    }

    public function subscribe(Request $request)
    {
      if($request->newsletter_name==null || $request->newsletter_email==null) {
        return redirect()->route('front.error',['error' => "You must fill your Name and Email Address in order to subscribe."]);
      } else {
        $sub = new Subscriber;
        $sub->name = $request->newsletter_name;
        $sub->email = $request->newsletter_email;
        $sub->save();
        return view('subscribed');
      }
    }

    public function category($id)
    {
      $category = Category::where('id', $id)->first();
      $categories = Category::all();
      $posts = Post::where('category_id', $id)->get();
      $all_posts = Post::all();
      return view('category')->with('category', $category)->with('posts', $posts)->with('categories', $categories)->with('all_posts', $all_posts);
    }

    public function search(Request $request)
    {
        //dd($request->blog_search);
        $search_posts = Post::where('name', 'like', '%'.$request->blog_search.'%')->orWhere('content', 'like', '%'.$request->blog_search.'%')->get();
        $all_posts = Post::all();
        $categories = Category::all();
        $term = $request->blog_search;

        return view('search')->with('search_posts', $search_posts)->with('categories', $categories)->with('all_posts', $all_posts)->with('term', $term);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        //
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
        //
    }
}
