@extends('layouts.app')

@section('title',' - Categories')

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
                <div class="card-header back_card_header">{{ __('Categories') }}</div>

                <div class="card-body">
                  @if(count($categories)==0)
                    <h5>No categories yet!</h5>
                    <a href="{{route('categories.create')}}" class="btn btn-primary form_btn submit_btn">Create Category</a>
                  @else
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($categories as $category)
                      <tr>
                        <th scope="row">{{$category->id}}</th>
                        <td>{{$category->name}}</td>
                        <td><a href="{{route('categories.edit',['id' => $category->id])}}" class="btn btn-success category_btn">Edit</a><a href="{{route('categories.destroy',['id' => $category->id])}}" class="btn btn-danger category_btn" id="dlt_btn">Delete</a></td>
                      </tr>
                      @endforeach
                    </tbody>
                    </table>
                    <a href="{{route('categories.create')}}" class="btn btn-primary form_btn submit_btn">Create Category</a>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
