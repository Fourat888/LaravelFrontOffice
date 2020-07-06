@extends('layouts.app')

@section('title',' - Posts')

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
                <div class="card-header back_card_header">{{ __('Posts') }}</div>

                <div class="card-body">
                  @if(count($posts)==0)
                    <h5>No posts yet!</h5>
                    @if(count($categories)==0)
                      <h5 id="no_cat">No categories yet!</h5>
                      <label>You must create a category first in order to create your first post.</label>
                    @else
                      <a href="{{route('posts.create')}}" class="btn btn-primary form_btn submit_btn">Create Post</a>
                    @endif
                  @else
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Category</th>
                        <th scope="col">Image</th>
                        <th scope="col">Content</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($posts as $post)
                      <tr>
                        <th scope="row">{{$post->id}}</th>
                        <td>{{$post->name}}</td>
                        @foreach($categories as $category)
                          @if($category->id == $post->category_id)
                            <td>{{$category->name}}</td>
                          @endif
                        @endforeach
                        <td><img src="{{$post->img}}" width="100"></img></td>
                        <td id="post_content">{{\Illuminate\Support\Str::limit($post->content,200)}}</td>
                        <td>
                          <div>
                            <a href="{{route('posts.edit',['id' => $post->id])}}" class="btn btn-success category_btn">Edit</a>
                          </div>
                          <div id="destroy_div">
                            <a href="{{route('posts.destroy',['id' => $post->id])}}" class="btn btn-danger category_btn" id="">Delete</a>
                          </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                    </table>
                    <a href="{{route('posts.create')}}" class="btn btn-primary form_btn submit_btn">Create Post</a>
                  @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
