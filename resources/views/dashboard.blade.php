@extends('layouts.app')

@section('title',' - Dashboard')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <!-- To side menu -->
      <div class="col-md-4">
        <div class="card side_menu" style="width: 18rem;">
          <a href="/dashboard" class="list-group-item list-group-item-action">Dashboard</a>
          <a href="#" class="list-group-item list-group-item-action">Posts</a>
          <a href="#" class="list-group-item list-group-item-action">Categories</a>
          <a href="{{route('about.index')}}" class="list-group-item list-group-item-action">About</a>
          <a href="{{route('contact.index')}}" class="list-group-item list-group-item-action">Contact</a>
          <a href="#" class="list-group-item list-group-item-action">Settings</a>
        </div>
      </div>
        <!-- To card tou home -->
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                  <h4>Welcome to your Dashboard</h4>
                  <p>
                    From here you can controll the settings of your blog. Create new Posts and new Categories as well as fill your personal data for your about and contact page.
                  </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
