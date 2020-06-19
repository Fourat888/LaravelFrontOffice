<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
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
        return view('contact')->with('img', $img)->with('address', $address)->with('country', $country)->with('email', $email)->with('phone', $phone)->with('facebook', $facebook)->with('instagram', $instagram)->with('twitter', $twitter)->with('youtube', $youtube);
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
        return view('contact')->with('img', $img)->with('address', $address)->with('country', $country)->with('email', $email)->with('phone', $phone)->with('facebook', $facebook)->with('instagram', $instagram)->with('twitter', $twitter)->with('youtube', $youtube);
      }
    }

    public function save(Request $request)
    {
      $contact = Contact::where('id', 1)->first();

      if($contact==null) {
        $new_contact = new Contact;
        $new_contact->address = $request->contact_address;
        $new_contact->country = $request->contact_country;
        $new_contact->email = $request->contact_email;
        $new_contact->phone = $request->contact_phone;
        $new_contact->facebook = $request->contact_facebook;
        $new_contact->instagram = $request->contact_instagram;
        $new_contact->twitter = $request->contact_twitter;
        $new_contact->youtube = $request->contact_youtube;
        $new_contact->img = $request->contact_img->move('images','contact.jpg');
        $new_contact->save();
      } else {
        if($request->contact_img==null) {
          $contact->address = $request->contact_address;
          $contact->country = $request->contact_country;
          $contact->email = $request->contact_email;
          $contact->phone = $request->contact_phone;
          $contact->facebook = $request->contact_facebook;
          $contact->instagram = $request->contact_instagram;
          $contact->twitter = $request->contact_twitter;
          $contact->youtube = $request->contact_youtube;
          $contact->save();
        } else {
          $contact->address = $request->contact_address;
          $contact->country = $request->contact_country;
          $contact->email = $request->contact_email;
          $contact->phone = $request->contact_phone;
          $contact->facebook = $request->contact_facebook;
          $contact->instagram = $request->contact_instagram;
          $contact->twitter = $request->contact_twitter;
          $contact->youtube = $request->contact_youtube;
          $contact->img = $request->contact_img->move('images','contact.jpg');
          $contact->save();
        }
      }

      return view('dashboard');
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
