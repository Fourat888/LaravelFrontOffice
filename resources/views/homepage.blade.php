@extends('layouts.front')

@section('front_title',' - Home')

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
  <img src="{{$settings->homepage_img}}" width="100%"></img>
</div>
<div class="container">
    <div class="row justify-content-center">
      <!-- To side menu -->
      <div class="col-12">
        <h4 class="front_header">Welcome</h4>
        <hr class="front_hr_about">
        <p class="front_p about_p">
          {!! $settings->homepage_content !!}
        </p>
      </div>
    </div>
    <div class="row justify-content-center latest">
      <!-- To side menu -->
      <div class="col-12 home_posts">
        <h4 class="front_header">Latest Posts</h4>
        <hr class="home_posts_hr">
        <div class="row posts_home">
          @if($posts->count()>=1)
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="card latest_card" >
              <img class="card-img-top latest_posts_img" src="{{$posts[$posts->count()-1]->img}}" alt="Card image cap">
              <div class="card-body">
                <h6>{{$posts[$posts->count()-1]->name}}</h6>
                <p class="card-text">{{\Illuminate\Support\Str::limit($posts[$posts->count()-1]->content,200)}}</p>
                <a href="{{route('posts.post',['id' => $posts[$posts->count()-1]->id])}}" class="btn btn-primary submit_btn btn-block post_btn">Read more</a>
              </div>
            </div>
          </div>
          @endif
          @if($posts->count()>=2)
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="card latest_card">
              <img class="card-img-top latest_posts_img" src="{{$posts[$posts->count()-2]->img}}" alt="Card image cap">
              <div class="card-body">
                <h6>{{$posts[$posts->count()-2]->name}}</h6>
                <p class="card-text">{{\Illuminate\Support\Str::limit($posts[$posts->count()-2]->content,200)}}</p>
                <a href="{{route('posts.post',['id' => $posts[$posts->count()-2]->id])}}" class="btn btn-primary submit_btn btn-block post_btn">Read more</a>
              </div>
            </div>
          </div>
          @endif
          @if($posts->count()>=3)
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="card latest_card" >
              <img class="card-img-top latest_posts_img" src="{{$posts[$posts->count()-3]->img}}" alt="Card image cap">
              <div class="card-body">
                <h6>{{$posts[$posts->count()-3]->name}}</h6>
                <p class="card-text">{{\Illuminate\Support\Str::limit($posts[$posts->count()-3]->content,200)}}</p>
                <a href="{{route('posts.post',['id' => $posts[$posts->count()-3]->id])}}" class="btn btn-primary submit_btn btn-block post_btn">Read more</a>
              </div>
            </div>
          </div>
          @endif
        </div>
        @if($posts->count()>=4)
        <div class="row posts_2row">
          @if($posts->count()>=4)
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="card latest_card" >
              <img class="card-img-top latest_posts_img" src="{{$posts[$posts->count()-4]->img}}" alt="Card image cap">
              <div class="card-body">
                <h6>{{$posts[$posts->count()-4]->name}}</h6>
                <p class="card-text">{{\Illuminate\Support\Str::limit($posts[$posts->count()-4]->content,200)}}</p>
                <a href="{{route('posts.post',['id' => $posts[$posts->count()-4]->id])}}" class="btn btn-primary submit_btn btn-block post_btn">Read more</a>
              </div>
            </div>
          </div>
          @endif
          @if($posts->count()>=5)
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="card latest_card">
              <img class="card-img-top latest_posts_img" src="{{$posts[$posts->count()-5]->img}}" alt="Card image cap">
              <div class="card-body">
                <h6>{{$posts[$posts->count()-5]->name}}</h6>
                <p class="card-text">{{\Illuminate\Support\Str::limit($posts[$posts->count()-5]->content,200)}}</p>
                <a href="{{route('posts.post',['id' => $posts[$posts->count()-5]->id])}}" class="btn btn-primary submit_btn btn-block post_btn">Read more</a>
              </div>
            </div>
          </div>
          @endif
          @if($posts->count()>=6)
          <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
            <div class="card latest_card">
              <img class="card-img-top latest_posts_img" src="{{$posts[$posts->count()-6]->img}}" alt="Card image cap">
              <div class="card-body">
                <h6>{{$posts[$posts->count()-6]->name}}</h6>
                <p class="card-text">{{\Illuminate\Support\Str::limit($posts[$posts->count()-6]->content,200)}}</p>
                <a href="{{route('posts.post',['id' => $posts[$posts->count()-6]->id])}}" class="btn btn-primary submit_btn btn-block post_btn">Read more</a>
              </div>
            </div>
          </div>
          @endif
        </div>
        @endif
      </div>
    </div>
    <div class="row news_row">
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 newsletter_img">
        <img src="/images/newsletter.png" width="100%"></img>
      </div>
      <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 newsletter">
        <h4 class="front_header news_h4">Join the Blog Newsletter</h4>
        <label>Be part of the Crew. Get emails on new posts.</label>
        <form method="POST" action="{{ route('front.subscribe') }}">
          @csrf
          <div class="form-group col-md-6" id="newsletter_div">
            <input type="text" class="form-control" id="newsletter_name" name="newsletter_name" placeholder="Your name">
          </div>
          <div class="form-group col-md-6" id="newsletter_div">
            <input type="email" class="form-control" id="newsletter_email" name="newsletter_email" placeholder="Your email address">
          </div>
          <button type="submit" class="btn btn-primary btn-block submit_btn">Subscribe</button>
        </form>
      </div>
    </div>
</div>
@endif

@endsection
