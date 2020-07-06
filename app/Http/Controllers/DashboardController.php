<?php

namespace App\Http\Controllers;

use App\Site;
use App\About;
use App\Category;
use App\Contact;
use App\Post;
use App\Setting;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $site_live = Site::all();
        $posts = Post::all();
        $categories = Category::all();
        $contact = Contact::all();
        $about = About::all();
        $settings = Setting::all();
        return view('dashboard')->with('site_live', $site_live)->with('posts', $posts)->with('categories', $categories)->with('contact', $contact)->with('about', $about)->with('settings', $settings);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function go_live()
    {
        $site_live = Site::where('id', 1)->first();
        $site_live->live = 1;
        $site_live->save();
        return redirect()->back();
    }

    public function go_down()
    {
        $site_live = Site::where('id', 1)->first();
        $site_live->live = 0;
        $site_live->save();
        return redirect()->back();
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
