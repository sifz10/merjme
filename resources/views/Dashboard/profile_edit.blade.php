@extends('layouts.Back.App')
@section('title')
  Dashboard
@endsection
@section('content')
  <div id="flStackForm" class="col-lg-12 mt-5">
      <div class="">
          <div class="widget-header">
              <div class="row">
                  <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                      <h4>Profile Edit [ {{ $user->name }} ]</h4>
                  </div>
              </div>
          </div>
          <div class="">
              <form action="{!! route('userUpdate') !!}" method="post" enctype="multipart/form-data">
                @csrf
                <input type="hidden" name="id" value="{{ $user->id }}">
                  <div class="form-group mb-3">
                      <input type="name" class="form-control" name="name" placeholder="Enter name..." value="{{ $user->name }}">
                  </div>
                  <div class="form-group mb-3">
                      <input type="email" class="form-control" name="email" placeholder="Enter email..." disabled value="{{ $user->email }}">
                  </div>
                  <div class="form-group mb-3">
                      <input type="text" class="form-control" name="slug" placeholder="Enter url..." value="{{ $user->slug }}">
                  </div>
                  <div class="form-group mb-3">
                      <input type="text" class="form-control" name="mobile" placeholder="Enter mobile number..." value="{{ $user->mobile }}">
                  </div>
                  <div class="form-group mb-3">
                     <label for="dob">Date Of Birth:</label>
                     <input type="date"  class="form-control" name="dob" value="{{ $user->dob }}">
                  </div>
                  <div class="form-group">
                     <label for="url">Primary Website:</label>
                     <input type="text" class="form-control" id="url" value="{{ $user->primary_website }}" name="primary_website">
                  </div>
                  <div class="form-group mb-3">
                     <label class="d-block">Gender:</label>
                     <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="customRadio6" @if ($user->gender == "Male") checked @endif name="gender" value="Male" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio6"> Male </label>
                     </div>
                     <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" @if ($user->gender =="Female") checked @endif id="customRadio7" name="gender" name="Female" value="Female" class="custom-control-input">
                        <label class="custom-control-label" for="customRadio7"> Female </label>
                     </div>
                  </div>
                  <div class="form-group mb-3">
                    <label for="">Status:</label>
                      <select class="form-control" name="status">
                        <option @if ($user->status == "Single") selected @endif>Single</option>
                        <option @if ($user->status == "Married") selected @endif>Married</option>
                        <option @if ($user->status == "Widowed") selected @endif>Widowed</option>
                        <option @if ($user->status == "Divorced") selected @endif>Divorced</option>
                        <option @if ($user->status == "Separated") selected @endif>Separated </option>
                      </select>
                  </div>
                  <div class="form-group mb-3">
                    <label for="">Country:</label>
                      <select class="form-control" name="country">
                        <option @if ($user->country == "USA") selected @endif>USA</option>
                         <option @if ($user->country == "Caneda") selected @endif>Caneda</option>
                         <option @if ($user->country == "France") selected @endif>France</option>
                         <option @if ($user->country == "Bangladesh") selected @endif>Bangladesh</option>
                         <option @if ($user->country == "Noida") selected @endif>Noida</option>
                         <option @if ($user->country == "India") selected @endif>India</option>
                         <option @if ($user->country == "Africa") selected @endif>Africa</option>
                      </select>
                  </div>
                  <div class="form-group mb-3">
                    <label for="">Language:</label>
                      <select class="form-control" name="language">
                        <option @if ($user->language == "English") selected @endif>English</option>
                        <option @if ($user->language == "France") selected @endif>France</option>
                        <option @if ($user->language == "Bangla") selected @endif>Bangla</option>
                        <option @if ($user->language == "Arabic") selected @endif>Arabic</option>
                        <option @if ($user->language == "Hindi") selected @endif>Hindi</option>
                      </select>
                  </div>

                  <div class="form-group col-sm-12">
                     <label>Interested In:</label>
                     <select class="form-control" id="exampleFormControlSelect3" name="interested_in">
                        <option>Select your interests</option>
                        <option @if ($user->interested_in == "Drawing") selected @endif >Drawing</option>
                        <option @if ($user->interested_in == "Coding") selected @endif >Coding</option>
                        <option @if ($user->interested_in == "Photography") selected @endif >Photography</option>
                        <option @if ($user->interested_in == "Man") selected @endif >Man</option>
                        <option @if ($user->interested_in == "Women") selected @endif >Women</option>
                        <option @if ($user->interested_in == "Design") selected @endif >Design</option>
                        <option @if ($user->interested_in == "Bike Riding") selected @endif >Bike Riding</option>
                        <option @if ($user->interested_in == "Others") selected @endif >Others</option>
                     </select>
                  </div>

                  <div class="form-group col-sm-12">
                     <label>Address:</label>
                     <textarea class="form-control" name="address" rows="5" style="line-height: 22px;">
                       {{ $user->address }}
                     </textarea>
                  </div>

                  <div class="form-group mb-3">
                    <p>Profile Picture: </p>
                    <img src="../uploads/{{ $user->dp }}" width="150px">
                    <br>
                    <br>
                      <input type="file" class="form-control-file" name="dp" value="{{ $user->dp }}">
                  </div>
                  <div class="form-group mb-3">
                    <p>Cover Image: </p>
                    <img src="../uploads/{{ $user->cover }}" width="150px">
                    <br>
                    <br>
                      <input type="file" class="form-control-file" name="cover" value="{{ $user->cover }}">
                  </div>

                  <button type="submit" class="btn btn-primary mt-3">Update</button>
              </form>
          </div>
      </div>
  </div>
@endsection
