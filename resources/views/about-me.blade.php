@extends('layouts.front')

@section('front_title',' - About')

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
    <div class="row justify-content-center">
      <!-- To side menu -->
      <div class="col-12">
        <h4 class="front_header">About</h4>
        <hr class="front_hr_about" style="border-color:{{$hr_color}};">
        <p class="front_p about_p">
          {!! $content !!}
        </p>
      </div>
    </div>
</div>
@endif
@endsection
