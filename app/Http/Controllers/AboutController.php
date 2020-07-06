<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $about = About::where('id', 1)->first();
        if($about==null) {
          $img = null;
          $content = null;
          return view('about')->with('img', $img)->with('content', $content);
        } else {
          $img = $about->img;
          $content = $about->content;
          return view('about')->with('img', $img)->with('content', $content);
        }
    }

    public function save(Request $request)
    {
        $about = About::where('id', 1)->first();

        if($about==null) {
          $new_about = new About;
          $new_about->content = nl2br($request->about_contect);
          $new_about->img = $request->about_img->move('images','about.jpg');
          $new_about->save();
        } else {
          if($request->about_img==null) {
            $about->content = nl2br($request->about_contect);
            $about->save();
          } else {
            $about->content = nl2br($request->about_contect);
            $about->img = $request->about_img->move('images','about.jpg');
            $about->save();
          }
        }

        return redirect()->route('about.index');
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
