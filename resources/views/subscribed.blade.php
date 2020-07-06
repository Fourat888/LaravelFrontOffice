@extends('layouts.front')

@section('front_title',' - New Subscriber')

@section('front')
<div class="hero">
  <img src="/images/subscriber.jpg" width="100%"></img>
</div>
<div class="container">
    <div class="row justify-content-center">
      <!-- To side menu -->
      <div class="col-12">
        <h4 class="front_header">New Subscriber</h4>
        <hr class="front_hr_about">
        <p class="front_p about_p">
          Thank you very much for subscribing to our newsletter!<br>
          You will be receiving in your email news about our posts and many more.
        </p>
        <a href="{{route('front.homepage')}}" class="btn btn-primary submit_btn">Return to the Homepage</a>
      </div>
    </div>
</div>
@endsection
