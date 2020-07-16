@extends('layouts.front')

@section('front_title',' - Error')

@section('front')
<div class="hero">
  <img src="/images/error.jpg" width="100%"></img>
</div>
<div class="container">
    <div class="row justify-content-center">
      <!-- To side menu -->
      <div class="col-12">
        <h4 class="front_header">Error</h4>
        <hr class="front_hr_about">
        <p class="front_p about_p">
          {{$error}}
        </p>
        <a href="{{route('front.homepage')}}" class="btn btn-primary submit_btn">Return to the Homepage</a>
      </div>
    </div>
</div>
@endsection
