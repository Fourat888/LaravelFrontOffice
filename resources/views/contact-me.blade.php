@extends('layouts.front')

@section('front_title',' - Contact')

@section('front')
@if($site_live[0]->live==0)
  <div class="row not_live">
    <div class="col-12">
      <h4>Website under construction</h4>
      <label>We are setting up the blog and we will be right back.</label>
      <hr>
      @guest
        <a class="btn btn-primary form_btn submit_btn" href="{{ route('login') }}">{{ __('Login') }}</a>
      @else
        <a class="btn btn-primary form_btn submit_btn" href="{{ route('dashboard.index') }}">{{ __('Dashboard') }}</a>
      @endguest
    </div>
  </div>
@else
<div class="hero">
  <img src="{{$img}}" width="100%"></img>
</div>
<div class="container">
  <h4 class="front_header">Contact</h4>
  <hr class="front_hr_contact">
    <div class="row contact_row">
        <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
          <div class="contact_info">
            <h5 class="contact_header">Contact Information</h5>
            <ul class="front_ul">
              <li class="contact_li"><i class="fa fa-map-marker front_fa" aria-hidden="true"></i><label class="li_label"><b>Address</b></label><br><label>{{$address}}, {{$country}}</label></li>
              <li class="contact_li"><i class="fa fa-envelope front_fa" aria-hidden="true"></i><label class="li_label"><b>Email Address</b></label><br><a href="mailto:{{$email}}">{{$email}}</a></li>
              <li class="contact_li"><i class="fa fa-phone front_fa" aria-hidden="true"></i><label class="li_label"><b>Phone Number</b></label><br><a href="tel:{{$phone}}">{{$phone}}</a></li>
            </ul>
            <hr class="front_hr_contact_info">
            <h5 class="contact_header">Follow us</h5>
            <ul class="front_ul">
              <li class="contact_li"><i class="fa fa-facebook front_fa" aria-hidden="true"></i><label class="li_label"><b>Facebook</b></label><br><a target="_blank" href="{{$facebook}}">{{$facebook}}</a></li>
              <li class="contact_li"><i class="fa fa-instagram front_fa" aria-hidden="true"></i><label class="li_label"><b>Instagram</b></label><br><a target="_blank" href="{{$instagram}}">{{$instagram}}</a></li>
              <li class="contact_li"><i class="fa fa-twitter front_fa" aria-hidden="true"></i><label class="li_label"><b>Twitter</b></label><br><a target="_blank" href="{{$twitter}}">{{$twitter}}</a></li>
              <li class="contact_li"><i class="fa fa-youtube front_fa" aria-hidden="true"></i><label class="li_label"><b>Youtube</b></label><br><a target="_blank" href="{{$youtube}}">{{$youtube}}</a></li>
            </ul>
          </div>
        </div>
        <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 form">
          <h5>Fill the form below to get in contact with us:</h5>
          <form id="contact_form">
            <div class="form-group">
              <label for="exampleInputName">Full Name</label>
              <input type="text" class="form-control" id="name_input">
            </div>
            <div class="form-group">
              <label for="exampleInputPhone">Phone Number</label>
              <input type="text" class="form-control" id="phone_input">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="email_input" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <label for="exampleInputText">Message</label>
              <textarea class="form-control" id="message_input" rows="5"></textarea>
            </div>
            <button type="submit" class="btn btn-primary submit_btn" id="submit_button_form">Submit</button>
          </form>
        </div>
    </div>
</div>
<!-- To google map -->
<iframe id="contact_map" width="100%" height="450" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJxZZwR28JvUcRAMawKVBDIgQ&key=AIzaSyDajbn3k4UTno2iwTGgv-0htSPM1RSmWFM&zoom=15" allowfullscreen></iframe>
@endif
@endsection
