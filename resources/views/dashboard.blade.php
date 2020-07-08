@extends('layouts.app')

@section('title',' - Dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <!-- To side menu -->
      <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <div class="card back_side_menu" style="width: 18rem;">
          <a href="{{route('dashboard.index')}}" class="list-group-item list-group-item-action">Dashboard</a>
          <a href="{{route('posts.index')}}" class="list-group-item list-group-item-action">Posts</a>
          <a href="{{route('categories.index')}}" class="list-group-item list-group-item-action">Categories</a>
          <a href="{{route('about.index')}}" class="list-group-item list-group-item-action">About</a>
          <a href="{{route('contact.index')}}" class="list-group-item list-group-item-action">Contact</a>
          <a href="{{route('subscribers.index')}}" class="list-group-item list-group-item-action">Subscribers</a>
          <a href="{{route('settings.index')}}" class="list-group-item list-group-item-action">Settings</a>
        </div>
      </div>
      <!-- To card tou home -->
      <div class="col-lg -8 col-md-8 col-sm-12 col-xs-12">
          <div class="card">
              <div class="card-header back_card_header">{{ __('Dashboard') }}</div>

              <div class="card-body">
                <h4>Welcome to your Dashboard</h4>
                <p>
                  From here you can controll the settings of your blog. Create new Posts and new Categories as well as fill your personal data for your about and contact page.
                </p>
                @if($site_live[0]->live==0)
                  <hr>
                  <label>When the blog is ready to go live, click the button below:</label><br>
                  <a class="btn btn-primary form_btn submit_btn" href="{{ route('dashboard.go_live') }}" id="live_btn">Go Live</a>
                  @if($posts->count()==0)
                    <p class="warning_p"><b>No Posts yet.</b></p>
                    <script type='text/javascript'>
                      document.getElementById("live_btn").style.pointerEvents = "none";
                    </script>
                  @endif
                  @if($categories->count()==0)
                    <p class="warning_p"><b>No Categories yet.</b></p>
                    <script type='text/javascript'>
                      document.getElementById("live_btn").style.pointerEvents = "none";
                    </script>
                  @endif
                  @if($about->count()==0)
                    <p class="warning_p"><b>The About page is not set up yet.</b></p>
                    <script type='text/javascript'>
                      document.getElementById("live_btn").style.pointerEvents = "none";
                    </script>
                  @endif
                  @if($contact->count()==0)
                    <p class="warning_p"><b>The Contact page is not set up yet.</b></p>
                    <script type='text/javascript'>
                      document.getElementById("live_btn").style.pointerEvents = "none";
                    </script>
                  @endif
                  @if($settings->count()==0)
                    <p class="warning_p"><b>The settings for the Homepage are not set up yet.</b></p>
                    <script type='text/javascript'>
                      document.getElementById("live_btn").style.pointerEvents = "none";
                    </script>
                  @endif
                @else
                  <hr>
                  <label>Would you like the blog to go down, for maintenance?</label><br>
                  <a class="btn btn-primary form_btn submit_btn" href="{{ route('dashboard.go_down') }}">Take Down</a>
                @endif
              </div>
          </div>
      </div>
    </div>
</div>
@endsection
