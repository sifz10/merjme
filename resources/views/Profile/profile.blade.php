@extends('layouts.Font.App')
@section('title')
  {{ $profile->name }}
@endsection
@section('content')
  @php
    $isExist = DB::table('friends')->where('sender_id', Auth::id())->where('receiver_id', $profile->id)->first();
    $isRecive = DB::table('friends')->where('receiver_id', Auth::id())->where('sender_id', $profile->id)->first();
    $isExistSent = DB::table('friends')->where('receiver_id', $profile->id)->first();
    $status = DB::table('friends')->where('sender_id', Auth::id())->where('receiver_id', $profile->id)->value('status');
    $statusRec = DB::table('friends')->where('receiver_id', Auth::id())->where('sender_id', $profile->id)->value('status');
    $requestSentToYou = DB::table('friends')->where('receiver_id', Auth::id())->where('sender_id', $profile->id)->where('status', 0)->first();
  @endphp
  <div id="content-page" class="content-page">
        <div class="container">
           <div class="row">
              <div class="col-sm-12">
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
                          @php
                            $social_link = DB::table('socials')->where('user_id', $profile->id)->get();
                          @endphp
                          <div class="profile-info p-4 d-flex align-items-center justify-content-between position-relative">
                             <div class="social-links">
                                @if (!empty($isExist) && $status == 1)
                                <ul class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                                  @forelse ($social_link as $value)
                                    <li class="text-center pr-3">
                                      <a href="{{ $value->website_url }}" target="_blank"><img src="{!! asset('FontAssets') !!}/images/icon/{{ DB::table('logos')->where('title', $value->social_account)->value('image') }}" class="img-fluid rounded" alt="facebook"></a>
                                    </li>
                                  @empty
                                    <li class="text-center pr-3">
                                      <p>No media found</p>
                                    </li>
                                  @endforelse
                                </ul>
                              @elseif (Auth::user()->id == $profile->id)
                                <ul class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                                  @forelse ($social_link as $value)
                                    <li class="text-center pr-3">
                                      <a href="{{ $value->website_url }}" target="_blank"><img src="{!! asset('FontAssets') !!}/images/icon/{{ DB::table('logos')->where('title', $value->social_account)->value('image') }}" class="img-fluid rounded" alt="facebook"></a>
                                    </li>
                                  @empty

                                  @endforelse
                                </ul>
                              @endif
                             </div>
                            @if (Auth::id() != $profile->id && empty($isExist) && empty($isRecive))
                             <div class="social-info">
                               <ul class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                                 <li class="text-center pl-3">
                                   <a href="{!! route('sentFriendRequest',$profile->id) !!}" class="btn btn-primary">Add friend</a>
                                 </li>
                               </ul>
                             </div>
                            @endif

                           @if (!empty($isExist) && $status == 0)
                             <div class="social-info">
                               <ul class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                                 <li class="text-center pl-3">
                                   <a href="{!! route('sentFriendRequest',$profile->id) !!}" class="btn btn-danger">Cancel Request</a>
                                 </li>
                               </ul>
                             </div>
                           @endif
                           @if (!empty($isExist) && $status == 1)
                             <div class="social-info">
                               <ul class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                                 <li class="text-center pl-3">
                                   <a href="#" class="btn btn-success"><i class="ri-check-line mr-1 text-white font-size-16"></i> Friends</a>
                                 </li>
                               </ul>
                             </div>
                           @endif
                           @if (!empty($isRecive) && $statusRec == 1)
                             <div class="social-info">
                               <ul class="social-data-block d-flex align-items-center justify-content-between list-inline p-0 m-0">
                                 <li class="text-center pl-3">
                                   <a href="#" class="btn btn-success"><i class="ri-check-line mr-1 text-white font-size-16"></i> Friends</a>
                                 </li>
                               </ul>
                             </div>
                           @endif
                          </div>
                       </div>
                    </div>
                 </div>

                 <div class="card">
                    <div class="card-body p-0">
                       <div class="user-tabing">
                          <ul class="nav nav-pills d-flex align-items-center justify-content-center profile-feed-items p-0 m-0">
                             @if (Auth::user()->id == $profile->id)
                               <li class="col-sm-6 p-0">
                                 <a class="nav-link active" data-toggle="pill" href="#about">About</a>
                               </li>
                               <li class="col-sm-6 p-0">
                                 <a class="nav-link" data-toggle="pill" href="#friends">friends</a>
                               </li>
                             @else
                               <li class="col-sm-12 p-0">
                                 <a class="nav-link active" data-toggle="pill" href="#about">About</a>
                               </li>
                             @endif
                          </ul>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-sm-12">
                 <div class="tab-content">
                 @if ($statusRec == 1)
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
                                          @if (!empty($profile->mobile))
                                            <div class="col-3">
                                               <h6>Personal website:</h6>
                                            </div>
                                            <div class="col-9">
                                              <a href="{!! $profile->primary_website !!}" target="_blank"> <p class="mb-0">{{ $profile->primary_website }}</p></a>
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
                    {{-- <div class="tab-pane fade" id="friends" role="tabpanel">
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
                       </div> --}}
                     @elseif (Auth::user()->id == $profile->id)
                       @php
                         $friends = DB::table('friends')->where('sender_id', Auth::id())->orWhere('receiver_id', Auth::id())->where('status', 1)->get();
                         $friendsCount = DB::table('friends')->where('sender_id', Auth::id())->orWhere('receiver_id', Auth::id())->where('status', 1)->count();
                       @endphp
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
                                             @if (!empty($profile->mobile))
                                               <div class="col-3">
                                                  <h6>Personal website:</h6>
                                               </div>
                                               <div class="col-9">
                                                 <a href="{!! $profile->primary_website !!}" target="_blank"> <p class="mb-0">{{ $profile->primary_website }}</p></a>
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
                                <h2>Friends ({{ $friendsCount }})</h2>
                                <div class="friend-list-tab mt-2">
                                   <div class="tab-content">
                                      <div class="tab-pane fade active show" id="all-friends" role="tabpanel">
                                         <div class="card-body p-0">
                                            <div class="row">
                                              @forelse ($friends as $value)
                                                @if (Auth::id() == $value->sender_id)
                                                  @php
                                                    $friend = DB::table('users')->where('id', $value->receiver_id)->first();
                                                  @endphp
                                                @endif
                                                @if (Auth::id() == $value->receiver_id)
                                                  @php
                                                    $friend = DB::table('users')->where('id', $value->sender_id)->first();
                                                  @endphp
                                                @endif
                                                <div class="col-md-12 col-lg-12 mb-3">
                                                  <div class="iq-friendlist-block">
                                                     <div class="d-flex align-items-center justify-content-between">
                                                        <div class="d-flex align-items-center">
                                                           <a href="#">
                                                           <img src="../uploads/{{ $friend->dp }}" alt="profile-img" class="img-fluid">
                                                           </a>
                                                           <div class="friend-info ml-3">
                                                              <h5>{{ $friend->name }}</h5>
                                                              {{-- <p class="mb-0">15  friends</p> --}}
                                                           </div>
                                                        </div>
                                                        <div class="card-header-toolbar d-flex align-items-center">
                                                           <div class="dropdown">
                                                              <span class="dropdown-toggle btn btn-secondary mr-2" id="dropdownMenuButton01" data-toggle="dropdown" aria-expanded="true" role="button">
                                                              <i class="ri-check-line mr-1 text-white font-size-16"></i> Friend
                                                              </span>
                                                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton01">
                                                                 <a class="dropdown-item" href="{!! route('delete_request',$value->id) !!}">Unfriend</a>
                                                              </div>
                                                           </div>
                                                        </div>
                                                     </div>
                                                  </div>
                                               </div>
                                              @empty
                                                <p>No friends found.</p>
                                              @endforelse
                                            </div>
                                         </div>
                                      </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                     @else
                       <p class="text-center mt-5">You must be friend with <b>{{  $profile->name }}</b>. Then you can see all the details.</p>
                     @endif
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>

@endsection
