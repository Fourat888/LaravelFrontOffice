@extends('layouts.app')

@section('title',' - Contact')

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
                <div class="card-header">{{ __('Contact') }}</div>

                <div class="card-body">
                  <form method="POST" action="{{ route('contact.save') }}" enctype="multipart/form-data">
                    @csrf
                    <label class="control_labels">Fill in your information for the "Contact" page:</label>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="contact_address">Address</label><label class="req_fields" title="Required Field">*</label>
                        <input type="text" class="form-control" id="contact_address" name="contact_address" placeholder="{{$address}}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="contact_country">Country</label><label class="req_fields" title="Required Field">*</label>
                        <input type="text" class="form-control" id="contact_country" name="contact_country" placeholder="{{$country}}">
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="contact_email">Email Address</label><label class="req_fields" title="Required Field">*</label>
                        <input type="email" class="form-control" id="contact_email" name="contact_email" placeholder="{{$email}}">
                      </div>
                      <div class="form-group col-md-6">
                        <label for="contact_phone">Phone Number</label><label class="req_fields" title="Required Field">*</label>
                        <input type="text" class="form-control" id="contact_phone" name="contact_phone" placeholder="{{$phone}}">
                      </div>
                    </div>
                    <hr>
                    <label class="control_labels">Fill in your social media links:</label>
                    <div class="form-group">
                      <label for="contact_facebook">Facebook</label><label class="req_fields" title="Required Field">*</label>
                      <input type="text" class="form-control" id="contact_facebook" name="contact_facebook" placeholder="{{$facebook}}">
                    </div>
                    <div class="form-group">
                      <label for="contact_instagram">Instagram</label><label class="req_fields" title="Required Field">*</label>
                      <input type="text" class="form-control" id="contact_instagram" name="contact_instagram" placeholder="{{$instagram}}">
                    </div>
                    <div class="form-group">
                      <label for="contact_twitter">Twitter</label><label class="req_fields" title="Required Field">*</label>
                      <input type="text" class="form-control" id="contact_twitter" name="contact_twitter" placeholder="{{$twitter}}">
                    </div>
                    <div class="form-group">
                      <label for="contact_youtube">Youtube</label><label class="req_fields" title="Required Field">*</label>
                      <input type="text" class="form-control" id="contact_youtube" name="contact_youtube" placeholder="{{$youtube}}">
                    </div>
                    <hr>
                    <div class="form-group">
                      <label for="contact_img" class="control_labels">Select the hero image of the page:</label><br>
                      @if($img==null)
                        <label>No image selected</label><br>
                      @else
                        <img src="{{$img}}" width="150"></img>
                      @endif
                      <input type="file" class="form-control-file img_input" id="contact_img" name="contact_img">
                    </div>
                    <button type="submit" class="btn btn-primary form_btn">Submit Changes</button>
                  </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
