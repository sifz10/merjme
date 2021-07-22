@extends('layouts.Font.App')
@section('title')
Edit - {{ $profile->name }}
@endsection
@section('content')
  @php
    $socials = DB::table('socials')->where('user_id', Auth::id())->get();
  @endphp
  <div id="content-page" class="content-page">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
              @if (Session::has('success'))
                <div class="alert alert-primary">
                  {{ session('success') }}
                </div>
              @endif
              @if (Session::has('danger'))
                <div class="alert alert-danger">
                  {{ session('danger') }}
                </div>
              @endif
               <div class="card">
                  <div class="card-body p-0">
                     <div class="iq-edit-list">
                        <ul class="iq-edit-profile d-flex nav nav-pills">
                           <li class="col-md-3 p-0">
                              <a class="nav-link active" data-toggle="pill" href="#personal-information">
                              Personal Information
                              </a>
                           </li>
                           <li class="col-md-3 p-0">
                              <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                              Change Password
                              </a>
                           </li>
                           <li class="col-md-3 p-0">
                              <a class="nav-link" data-toggle="pill" href="#manage-contact">
                              Manage Contact
                              </a>
                           </li>
                           <li class="col-md-3 p-0">
                              <a class="nav-link" data-toggle="pill" href="#social-accounts">
                              Social Accounts
                              </a>
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-12">
               <div class="iq-edit-list-data">
                  <div class="tab-content">
                     <div class="tab-pane fade active show" id="personal-information" role="tabpanel">
                        <div class="card">
                           <div class="card-header d-flex justify-content-between">
                              <div class="iq-header-title">
                                 <h4 class="card-title">Personal Information</h4>
                              </div>
                           </div>
                           <div class="card-body">
                              <form action="{!! route('profile_update') !!}" method="post" enctype="multipart/form-data">
                                @csrf
                                 <div class="form-group row align-items-center">
                                    <div class="col-md-12">
                                       <div class="profile-img-edit">
                                          <img class="profile-pic" src="../uploads/{{ $profile->dp }}" alt="profile-pic">
                                          <div class="p-image">
                                             <i class="ri-pencil-line upload-button"></i>
                                             <input class="file-upload" type="file" name="dp" accept="image/*"/>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="col-md-12">
                                      <div class="form-group col-sm-6">
                                        <p> My cover:</p>
                                        <img src="../uploads/{{ $profile->cover }}" width="250px" alt="">
                                        <br>
                                         <label for="fname">Chose cover photo:</label>
                                         <input type="file" class="form-control" name="cover" class="file-upload" accept="image/*"/>
                                      </div>
                                    </div>
                                 </div>
                                 <div class=" row align-items-center">

                                    <div class="form-group col-sm-6">
                                       <label for="fname">Name:</label>
                                       <input type="text" class="form-control" id="name" name="name" value="{{ $profile->name }}" required>
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label for="dob">Date Of Birth:</label>
                                       <input type="date"  class="form-control" id="dob" name="dob" value="{{ $profile->dob }}">
                                    </div>
                                    <div class="form-group col-sm-6">
                                       <label class="d-block">Gender:</label>
                                       <select name="gender" class="form-control" name="">
                                         <option value="Male" @if($profile->gender == 'Male') selected @endif>Male</option>
                                         <option value="Female" @if($profile->gender == 'Female') selected @endif>Female</option>
                                         <option value="HUNGRY" @if($profile->gender == 'Fluid') selected @endif>Fluid</option>
                                       </select>
                                       {{-- <div class="custom-control custom-radio custom-control-inline">
                                          <input type="radio" id="customRadio6" @if ($profile->gender == "Male") checked @endif name="gender" value="Male" class="custom-control-input">
                                          <label class="custom-control-label" for="customRadio6"> Male </label>
                                       </div>
                                       <div class="custom-control custom-radio custom-control-inline">
                                          <input type="radio" @if ($profile->gender =="Female") checked @endif id="customRadio7" name="gender" name="Female" value="Female" class="custom-control-input">
                                          <label class="custom-control-label" for="customRadio7"> Female </label>
                                       </div> --}}
                                    </div>

                                    <div class="form-group col-sm-6">
                                       <label>Marital Status:</label>
                                       <select class="form-control" id="exampleFormControlSelect1" name="status">
                                          <option @if ($profile->status == "Single") selected @endif>Single</option>
                                          <option @if ($profile->status == "Married") selected @endif>Married</option>
                                          <option @if ($profile->status == "Widowed") selected @endif>Widowed</option>
                                          <option @if ($profile->status == "Divorced") selected @endif>Divorced</option>
                                          <option @if ($profile->status == "Separated") selected @endif>Separated </option>
                                          <option @if ($profile->status == "Fluid") selected @endif>Fluid</option>
                                       </select>
                                    </div>

                                    <div class="form-group col-sm-6">
                                       <label>Country:</label>
                                       <select class="form-control" id="exampleFormControlSelect3" name="country">
                                         <option @if ($profile->country == "USA") selected @endif>USA</option>
                                          <option @if ($profile->country == "Caneda") selected @endif>Caneda</option>
                                          <option @if ($profile->country == "France") selected @endif>France</option>
                                          <option @if ($profile->country == "Bangladesh") selected @endif>Bangladesh</option>
                                          <option @if ($profile->country == "Noida") selected @endif>Noida</option>
                                          <option @if ($profile->country == "India") selected @endif>India</option>
                                          <option @if ($profile->country == "Africa") selected @endif>Africa</option>
                                       </select>
                                    </div>

                                    <div class="form-group col-sm-6">
                                       <label>Language:</label>
                                       <select class="form-control" id="exampleFormControlSelect3" name="language">
                                          <option @if ($profile->language == "English") selected @endif>English</option>
                                            <option @if ($profile->language == "French") selected @endif>French</option>
                                          <option @if ($profile->language == "Bangla") selected @endif>Bangla</option>
                                          <option @if ($profile->language == "Arabic") selected @endif>Arabic</option>
                                          <option @if ($profile->language == "Hindi") selected @endif>Hindi</option>
                                       </select>
                                    </div>

                                    <div class="form-group col-sm-12">
                                       <label>Interested In:</label>
                                       <select class="form-control" id="exampleFormControlSelect3" name="interested_in">
                                          <option>Select your interests</option>
                                          <option @if ($profile->interested_in == "Branding") selected @endif >Branding</option>
                                          <option @if ($profile->interested_in == "Charity") selected @endif >Charity</option>
                                          <option @if ($profile->interested_in == "Political") selected @endif >Political</option>
                                          <option @if ($profile->interested_in == "Professional") selected @endif >Professional</option>
                                          <option @if ($profile->interested_in == "Romance") selected @endif >Romance</option>
                                          <option @if ($profile->interested_in == "Others") selected @endif >Others</option>
                                       </select>
                                    </div>


                                    <div class="form-group col-sm-12">
                                       <label>About me:</label>
                                       <textarea class="form-control" name="about_me" rows="5" style="line-height: 22px;">
                                         {{ $profile->about_me }}
                                       </textarea>
                                    </div>
                                    <div class="form-group col-sm-12">
                                       <label>Address:</label>
                                       <textarea class="form-control" name="address" rows="5" style="line-height: 22px;">
                                         {{ $profile->address }}
                                       </textarea>
                                    </div>
                                 </div>
                                 <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                 <button type="reset" class="btn iq-bg-danger">Cancel</button>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="chang-pwd" role="tabpanel">
                        <div class="card">
                           <div class="card-header d-flex justify-content-between">
                              <div class="iq-header-title">
                                 <h4 class="card-title">Change Password</h4>
                              </div>
                           </div>
                           <div class="card-body">
                              <form action="{!! route('changePassword') !!}" method="post">
                                @csrf
                                 <div class="form-group">
                                    <label for="cpass">Current Password:</label>
                                    <input type="Password" class="form-control" id="cpass" name="current_password">
                                 </div>
                                 <div class="form-group">
                                    <label for="npass">New Password:</label>
                                    <input type="Password" class="form-control" id="npass" value="" name="new_password">
                                 </div>
                                 <div class="form-group">
                                    <label for="vpass">Verify Password:</label>
                                    <input type="Password" class="form-control" id="vpass" value="" name="confirm_password">
                                 </div>
                                 <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                 <button type="reset" class="btn iq-bg-danger">Cancel</button>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="manage-contact" role="tabpanel">
                        <div class="card">
                           <div class="card-header d-flex justify-content-between">
                              <div class="iq-header-title">
                                 <h4 class="card-title">Manage Contact</h4>
                              </div>
                           </div>
                           <div class="card-body">
                              <form action="{!! route('changeContact') !!}" method="post">
                                @csrf
                                 <div class="form-group">
                                    <label for="cno">Contact Number:</label>
                                    <input type="text" class="form-control" id="cno" value="{{ $profile->mobile }}" name="mobile">
                                 </div>
                                 <div class="form-group">
                                    <label for="url">Primary Website:</label>
                                    <input type="text" class="form-control" id="url" value="{{ $profile->primary_website }}" name="primary_website">
                                 </div>
                                 <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                 <button type="reset" class="btn iq-bg-danger">Cancel</button>
                              </form>
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="social-accounts" role="tabpanel">
                        <div class="card">
                           <div class="card-header d-flex justify-content-between">
                              <div class="iq-header-title">
                                 <h4 class="card-title">Manage Social</h4>
                              </div>
                           </div>
                           <div class="card-body">
                             @php
                               $option_social = DB::table('logos')->get();
                             @endphp
                              <form action="{!! route('socialAccouts') !!}" method="post">
                                @csrf
                                 <div class="form-group">
                                    <label for="cno">Select Social Media:</label>
                                    <select class="form-control" name="social_account">
                                      <option value="">Select a social media</option>
                                      @forelse ($option_social as $value)
                                        <option value="{{ $value->title }}">{{ $value->title }}</option>
                                      @empty
                                        <p>No services available</p>
                                      @endforelse
                                    </select>
                                 </div>
                                 <div class="form-group">
                                    <label for="url">Website url:</label>
                                    <input type="text" class="form-control" id="url" name="website_url">
                                 </div>
                                 <button type="submit" class="btn btn-primary mr-2">Submit</button>
                              </form>
                              <hr>
                              <h4>Your accouts:</h4>
                              <div class="card-body">
                                   <table class="table">
                                      <thead>
                                         <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Logo</th>
                                            <th scope="col">Link</th>
                                            <th scope="col">Action</th>
                                         </tr>
                                      </thead>
                                      <tbody>
                                        @forelse ($socials as $value)
                                         <tr>
                                            <th scope="row">{{ $loop->index+1 }}</th>
                                            <td>{{ $value->social_account }}</td>
                                            <td>Otto</td>
                                            <td>
                                              <a href="{{ $value->website_url }}" target="_blank">{{ $value->website_url }}</a>
                                            </td>
                                            <td>
                                             <a href="{!! route('SocialLinkDelete',$value->id) !!}" class="btn btn-danger">Delete</a>
                                            </td>
                                          </tr>
                                        @empty
                                          <tr>
                                             <th scope="row">No accounts found</th>
                                           </tr>
                                        @endforelse
                                      </tbody>
                                   </table>
                                </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
@endsection
