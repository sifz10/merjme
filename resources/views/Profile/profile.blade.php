@extends('layouts.Font.App')
@section('title')
  {{ $profile->name }}
@endsection
@section('content')

  <div id="content-page" class="content-page">
        <div class="container">
           <div class="row">
              <div class="col-sm-12">
                 <div class="card">
                    <div class="card-body profile-page p-0">
                       <div class="profile-header">
                          <div class="cover-container">
                             <img src="../uploads/{{ $profile->cover }}" alt="profile-bg" class="rounded img-fluid">
                             @if (Auth::user()->id == $profile->id)
                             <ul class="header-nav d-flex flex-wrap justify-end p-0 m-0">
                                <li><a href="{!! route('profile_settings',$profile->slug) !!}"><i class="ri-settings-4-line"></i></a></li>
                             </ul>
                           @endif
                          </div>
                          <div class="user-detail text-center mb-3">
                             <div class="profile-img">
                                <img src="../uploads/{{ $profile->dp }}" alt="profile-img" class="avatar-130 img-fluid" />
                             </div>
                             <div class="profile-detail">
                                <h3 class="">{{ $profile->name }}</h3>
                             </div>
                          </div>
                          <div class="profile-info p-4 d-flex align-items-center justify-content-between position-relative">
                             <div class="social-links">
                                <ul class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                                   <li class="text-center pr-3">
                                      <a href="#"><img src="{!! asset('FontAssets') !!}/images/icon/08.png" class="img-fluid rounded" alt="facebook"></a>
                                   </li>
                                   <li class="text-center pr-3">
                                      <a href="#"><img src="{!! asset('FontAssets') !!}/images/icon/09.png" class="img-fluid rounded" alt="Twitter"></a>
                                   </li>
                                   <li class="text-center pr-3">
                                      <a href="#"><img src="{!! asset('FontAssets') !!}/images/icon/10.png" class="img-fluid rounded" alt="Instagram"></a>
                                   </li>
                                   <li class="text-center pr-3">
                                      <a href="#"><img src="{!! asset('FontAssets') !!}/images/icon/11.png" class="img-fluid rounded" alt="Google plus"></a>
                                   </li>
                                   <li class="text-center pr-3">
                                      <a href="#"><img src="{!! asset('FontAssets') !!}/images/icon/12.png" class="img-fluid rounded" alt="You tube"></a>
                                   </li>
                                   <li class="text-center pr-3">
                                      <a href="#"><img src="{!! asset('FontAssets') !!}/images/icon/13.png" class="img-fluid rounded" alt="linkedin"></a>
                                   </li>
                                   <li class="text-center pr-3">
                                      <a href="#"><img src="{!! asset('FontAssets') !!}/images/icon/14.png" class="img-fluid rounded" alt="tiktok"></a>
                                   </li>
                                   <li class="text-center pr-3">
                                      <a href="#"><img src="{!! asset('FontAssets') !!}/images/icon/15.png" class="img-fluid rounded" alt="other websites"></a>
                                   </li>
                                </ul>
                             </div>
                             <div class="social-info">
                               <ul class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                                 <li class="text-center pl-3">
                                   <a href="#" class="btn btn-primary">Add friend</a>
                                 </li>
                               </ul>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="card">
                    <div class="card-body p-0">
                       <div class="user-tabing">
                          <ul class="nav nav-pills d-flex align-items-center justify-content-center profile-feed-items p-0 m-0">
                             <li class="col-sm-6 p-0">
                                <a class="nav-link active" data-toggle="pill" href="#about">About</a>
                             </li>
                             <li class="col-sm-6 p-0">
                                <a class="nav-link" data-toggle="pill" href="#friends">friends</a>
                             </li>
                          </ul>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-sm-12">
                 <div class="tab-content">
                    <div class="tab-pane fade active show" id="about" role="tabpanel">
                       <div class="card">
                          <div class="card-body">
                             <div class="row">
                                <div class="col-md-3">
                                   <ul class="nav nav-pills basic-info-items list-inline d-block p-0 m-0">
                                      <li>
                                         <a class="nav-link active" data-toggle="pill" href="#basicinfo">Contact and Basic Info</a>
                                      </li>
                                   </ul>
                                </div>
                                <div class="col-md-9 pl-4">
                                   <div class="tab-content">
                                      <div class="tab-pane fade active show" id="basicinfo" role="tabpanel">
                                         <h4>Contact Information</h4>
                                         <hr>
                                         <div class="row">
                                           @if (!empty($profile->email))
                                            <div class="col-3">
                                               <h6>Email</h6>
                                            </div>
                                            <div class="col-9">
                                               <p class="mb-0">{{ $profile->email }}</p>
                                            </div>
                                          @endif
                                          @if (!empty($profile->mobile))
                                            <div class="col-3">
                                               <h6>Mobile</h6>
                                            </div>
                                            <div class="col-9">
                                               <p class="mb-0">{{ $profile->mobile }}</p>
                                            </div>
                                          @endif
                                          @if (!empty($profile->address))
                                            <div class="col-3">
                                               <h6>Address</h6>
                                            </div>
                                            <div class="col-9">
                                               <p class="mb-0">{{ $profile->address }}</p>
                                            </div>
                                          @endif
                                         </div>
                                         <h4 class="mt-3">Basic Information</h4>
                                         <hr>
                                         <div class="row">
                                           @if (!empty($profile->address))
                                            <div class="col-3">
                                               <h6>Birth Date</h6>
                                            </div>
                                            <div class="col-9">
                                               <p class="mb-0">{{ $profile->dob }}</p>
                                            </div>
                                          @endif
                                          @if (!empty($profile->gender))
                                            <div class="col-3">
                                               <h6>Gender</h6>
                                            </div>
                                            <div class="col-9">
                                               <p class="mb-0">{{ $profile->gender }}</p>
                                            </div>
                                          @endif
                                          @if (!empty($profile->interested_in))
                                            <div class="col-3">
                                               <h6>interested in</h6>
                                            </div>
                                            <div class="col-9">
                                               <p class="mb-0">{{ $profile->interested_in }}</p>
                                            </div>
                                          @endif
                                          @if (!empty($profile->language))
                                            <div class="col-3">
                                               <h6>language</h6>
                                            </div>
                                            <div class="col-9">
                                               <p class="mb-0">{{ $profile->language }}</p>
                                            </div>
                                          @endif
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                    <div class="tab-pane fade" id="friends" role="tabpanel">
                       <div class="card">
                          <div class="card-body">
                             <h2>Friends</h2>
                             <div class="friend-list-tab mt-2">
                                <div class="tab-content">
                                   <div class="tab-pane fade active show" id="all-friends" role="tabpanel">
                                      <div class="card-body p-0">
                                         <div class="row">
                                            <div class="col-md-12 col-lg-12 mb-3">
                                               <div class="iq-friendlist-block">
                                                  <div class="d-flex align-items-center justify-content-between">
                                                     <div class="d-flex align-items-center">
                                                        <a href="#">
                                                        <img src="{!! asset('FontAssets') !!}/images/user/05.jpg" alt="profile-img" class="img-fluid">
                                                        </a>
                                                        <div class="friend-info ml-3">
                                                           <h5>Petey Cruiser</h5>
                                                           <p class="mb-0">15  friends</p>
                                                        </div>
                                                     </div>
                                                     <div class="card-header-toolbar d-flex align-items-center">
                                                        <div class="dropdown">
                                                           <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton01" data-toggle="dropdown" aria-expanded="true" role="button">
                                                           <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                           </span>
                                                           <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton01">
                                                              <a class="dropdown-item" href="#">Unfriend</a>
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
