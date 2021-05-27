@extends('layouts.Font.App')
@section('title')
Edit - {{ $profile->name }}
@endsection
@section('content')
  <div id="content-page" class="content-page">
      <div class="container">
         <div class="row">
            <div class="col-lg-12">
              @if (Session::has('success'))
                <div class="alert alert-primary">
                  {{ session('success') }}
                </div>
              @endif
               <div class="card">
                  <div class="card-body p-0">
                     <div class="iq-edit-list">
                        <ul class="iq-edit-profile d-flex nav nav-pills">
                           <li class="col-md-4 p-0">
                              <a class="nav-link active" data-toggle="pill" href="#personal-information">
                              Personal Information
                              </a>
                           </li>
                           <li class="col-md-4 p-0">
                              <a class="nav-link" data-toggle="pill" href="#chang-pwd">
                              Change Password
                              </a>
                           </li>
                           <li class="col-md-4 p-0">
                              <a class="nav-link" data-toggle="pill" href="#manage-contact">
                              Manage Contact
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
                                       <div class="custom-control custom-radio custom-control-inline">
                                          <input type="radio" id="customRadio6" name="gender" value="Male" class="custom-control-input" checked="">
                                          <label class="custom-control-label" for="customRadio6"> Male </label>
                                       </div>
                                       <div class="custom-control custom-radio custom-control-inline">
                                          <input type="radio" id="customRadio7" name="gender" name="Female" class="custom-control-input">
                                          <label class="custom-control-label" for="customRadio7"> Female </label>
                                       </div>
                                    </div>

                                    <div class="form-group col-sm-6">
                                       <label>Marital Status:</label>
                                       <select class="form-control" id="exampleFormControlSelect1" name="status">
                                          <option selected="">Single</option>
                                          <option>Married</option>
                                          <option>Widowed</option>
                                          <option>Divorced</option>
                                          <option>Separated </option>
                                       </select>
                                    </div>

                                    <div class="form-group col-sm-6">
                                       <label>Country:</label>
                                       <select class="form-control" id="exampleFormControlSelect3" name="country">
                                          <option>Caneda</option>
                                          <option>Noida</option>
                                          <option selected="">USA</option>
                                          <option>India</option>
                                          <option>Africa</option>
                                       </select>
                                    </div>

                                    <div class="form-group col-sm-6">
                                       <label>Language:</label>
                                       <select class="form-control" id="exampleFormControlSelect3" name="language">
                                          <option>Caneda</option>
                                          <option>Noida</option>
                                          <option selected="">USA</option>
                                          <option>India</option>
                                          <option>Africa</option>
                                       </select>
                                    </div>

                                    <div class="form-group col-sm-12">
                                       <label>Interested In:</label>
                                       <select class="form-control" id="exampleFormControlSelect3" name="interested_in">
                                          <option>Select your interests</option>
                                          <option>Noida</option>
                                          <option selected="">USA</option>
                                          <option>India</option>
                                          <option>Africa</option>
                                       </select>
                                    </div>

                                    <div class="form-group col-sm-12">
                                       <label>Address:</label>
                                       <textarea class="form-control" name="address" rows="5" style="line-height: 22px;">
                                       37 Cardinal Lane
                                       Petersburg, VA 23803
                                       United States of America
                                       Zip Code: 85001
                                       </textarea>
                                    </div>
                                 </div>
                                 <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                 <button type="reset" class="btn iq-bg-danger">Cancle</button>
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
                              <form>
                                 <div class="form-group">
                                    <label for="cpass">Current Password:</label>
                                    <a href="javascripe:void();" class="float-right">Forgot Password</a>
                                    <input type="Password" class="form-control" id="cpass" value="">
                                 </div>
                                 <div class="form-group">
                                    <label for="npass">New Password:</label>
                                    <input type="Password" class="form-control" id="npass" value="">
                                 </div>
                                 <div class="form-group">
                                    <label for="vpass">Verify Password:</label>
                                    <input type="Password" class="form-control" id="vpass" value="">
                                 </div>
                                 <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                 <button type="reset" class="btn iq-bg-danger">Cancle</button>
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
                              <form>
                                 <div class="form-group">
                                    <label for="cno">Contact Number:</label>
                                    <input type="text" class="form-control" id="cno" value="001 2536 123 458">
                                 </div>
                                 <div class="form-group">
                                    <label for="email">Email:</label>
                                    <input type="text" class="form-control" id="email" value="Bnijone@demo.com">
                                 </div>
                                 <div class="form-group">
                                    <label for="url">Url:</label>
                                    <input type="text" class="form-control" id="url" value="https://getbootstrap.com/">
                                 </div>
                                 <button type="submit" class="btn btn-primary mr-2">Submit</button>
                                 <button type="reset" class="btn iq-bg-danger">Cancle</button>
                              </form>
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
