@extends('layouts.app')

@section('title',' - About')

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
                <div class="card-header back_card_header">{{ __('About') }}</div>

                <div class="card-body">
                  <form method="POST" action="{{ route('about.save') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="about_contect" class="control_labels">Insert into the textarea below the contect of the "About" page:<label class="req_fields" title="Required Field">*</label></label>
                      <textarea class="form-control" id="about_contect" name="about_contect" rows="6">{{$content}}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="about_img" class="control_labels">Select the hero image of the page:</label><label class="req_fields" title="Required Field">*</label><br>
                      @if($img==null)
                        <label>No image selected</label><br>
                      @else
                        <img src="{{$img}}" width="150"></img>
                      @endif
                      <input type="file" class="form-control-file img_input" id="about_img" name="about_img">
                    </div>
                    <button type="submit" class="btn btn-primary form_btn submit_btn">Submit Changes</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
