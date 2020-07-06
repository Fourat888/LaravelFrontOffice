@extends('layouts.app')

@section('title',' - Settings')

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
                <div class="card-header back_card_header">{{ __('Settings') }}</div>

                <div class="card-body">
                  <form method="POST" action="{{ route('settings.save') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                      <label for="settings_contect" class="control_labels">Insert into the textarea below the contect of the "Home" page:</label><label class="req_fields" title="Required Field">*</label>
                      <textarea class="form-control" id="settings_contect" name="settings_contect" rows="6">{{$homepage_content}}</textarea>
                    </div>
                    <div class="form-group">
                      <label for="settings_img" class="control_labels">Select the hero image of the homepage:</label><label class="req_fields" title="Required Field">*</label><br>
                      @if($homepage_img==null)
                        <label>No image selected</label><br>
                      @else
                        <img src="{{$homepage_img}}" width="150"></img>
                      @endif
                      <input type="file" class="form-control-file img_input" id="settings_img" name="settings_img">
                    </div>
                    <div class="form-group">
                      <label for="settings_hr_color" class="control_labels">Color of the thematic break lines:</label><label class="req_fields" title="Required Field">*</label>
                      <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="hr_color" style="background-color:{{$hr_color}};"></span>
                        </div>
                        <input type="text" class="form-control" id="settings_hr_color" name="settings_hr_color" value="{{$hr_color}}">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="settings_btn_color" class="control_labels">Color of the buttons:</label><label class="req_fields" title="Required Field">*</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="hr_color" style="background-color:{{$btn_color}};"></span>
                          </div>
                          <input type="text" class="form-control" id="settings_btn_color" name="settings_btn_color" value="{{$btn_color}}">
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="settings_btn_hover_color" class="control_labels">Color of the buttons on hover:</label><label class="req_fields" title="Required Field">*</label>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="hr_color" style="background-color:{{$btn_hover_color}};"></span>
                          </div>
                          <input type="text" class="form-control" id="settings_btn_hover_color" name="settings_btn_hover_color" value="{{$btn_hover_color}}">
                        </div>
                      </div>
                    </div>
                    <button type="submit" class="btn btn-primary form_btn submit_btn">Submit Changes</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
