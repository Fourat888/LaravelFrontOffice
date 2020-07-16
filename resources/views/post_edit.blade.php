@extends('layouts.app')

@section('title',' - Post Edit')

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
                <div class="card-header back_card_header">{{ __('Post Edit') }}</div>

                <div class="card-body">
                  <form method="POST" action="{{ route('posts.store') }}">
                    @csrf
                    <div class="form-group">
                      <label for="category_name" class="control_labels">Post Name</label><label class="req_fields" title="Required Field">*</label>
                      <input type="text" class="form-control" id="category_name" name="category_name" value="{{$post->name}}" required>
                      <input type="hidden" name="post_old_name" value="{{$post->name}}">
                    </div>
                    <div class="form-group">
                      <label for="post_category" class="control_labels">Post Category</label><label class="req_fields" title="Required Field">*</label>
                      <select class="form-control" id="post_category" name="post_category" required>
                        @foreach($categories as $category)
                          @if($category->id == $post->category_id)
                            <option selected="selected">{{$category->name}}</option>
                          @else
                            <option>{{$category->name}}</option>
                          @endif
                        @endforeach
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="post_contect" class="control_labels">Post Content</label><label class="req_fields" title="Required Field">*</label>
                      <textarea class="form-control" id="post_contect" name="post_contect" rows="6" required>{{$post->content}}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="post_img" class="control_labels">Post Image</label><label class="req_fields" title="Required Field">*</label><br>
                      <img src="\{{$post->img}}" width="100"></img>
                      <input type="file" class="form-control-file img_input" id="post_img" name="post_img">
                    </div>
                    <button type="submit" class="btn btn-primary form_btn submit_btn">Save</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
