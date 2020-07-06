@extends('layouts.app')

@section('title',' - Subscribers')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <!-- To side menu -->
      <div class="col-md-4">
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
        <div class="col-md-8">
            <div class="card">
                <div class="card-header back_card_header">{{ __('Subscribers') }}</div>

                <div class="card-body">
                  @if(count($subscribers)==0)
                    <h5>No subscribers yet!</h5>
                  @else
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($subscribers as $subscriber)
                      <tr>
                        <th scope="row">{{$subscriber->id}}</th>
                        <td>{{$subscriber->name}}</td>
                        <td>{{$subscriber->email}}</td>
                        <td><a href="{{route('subscribers.destroy',['id' => $subscriber->id])}}" class="btn btn-danger category_btn" id="dlt_btn">Delete</a></td>
                      </tr>
                      @endforeach
                    </tbody>
                    </table>
                  @endif
                  <a href="{{route('subscribers.export')}}" class="btn btn-primary btn-block submit_btn" id="subs_exp">Export Subscriber List</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
