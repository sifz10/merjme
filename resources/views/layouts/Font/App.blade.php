<!doctype html>
<html lang="en">

<!-- Mirrored from iqonic.design/themes/socialv/html-dark/group.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 May 2021 01:15:11 GMT -->
<head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Merjme - @yield('title')</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="{!! asset('FontAssets') !!}/images/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="{!! asset('FontAssets') !!}/css/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="{!! asset('FontAssets') !!}/css/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="{!! asset('FontAssets') !!}/css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="{!! asset('FontAssets') !!}/css/responsive.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link href="https://fonts.googleapis.com/css2?family=Pattaya&display=swap" rel="stylesheet">
   </head>
   <body class="sidebar-main-active right-column-fixed">

      <!-- Wrapper Start -->
      <div class="wrapper">
         <div class="iq-top-navbar">
            <div class="iq-navbar-custom">
               <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="iq-navbar-logo d-flex justify-content-between">
                     <a href="{!! route('home') !!}">
                     {{-- <img src="{!! asset('FontAssets') !!}/images/logo.png" class="img-fluid" alt=""> --}}
                     <span style="font-family: 'Pattaya', sans-serif; color:pink">Merjme</span>
                     </a>
                     <div class="iq-menu-bt align-self-center">
                  </div>
                  </div>
                  <div class="iq-search-bar">
                     <form action="#" class="searchbox">
                        <input type="text" class="text search-input" placeholder="Type here to search...">
                        <a class="search-link" href="#"><i class="ri-search-line"></i></a>
                     </form>
                  </div>
                  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                  <i class="ri-menu-3-line"></i>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                     <ul class="navbar-nav ml-auto navbar-list">
                        <li>
                           <a href="{!! route('profile',Auth::user()->slug) !!}" class="  d-flex align-items-center">
                              <img src="../uploads/{{ Auth::user()->dp }}" class="img-fluid rounded-circle mr-3" alt="user">
                              <div class="caption">
                                 <h6 class="mb-0 line-height">{{ Auth::user()->name }}</h6>
                              </div>
                           </a>
                        </li>
                        <li>
                           <a href="{!! route('home') !!}" class="  d-flex align-items-center">
                           <i class="ri-home-line"></i>
                           </a>
                        </li>
                        <li class="nav-item">
                           <a class="search-toggle  " href="#"><i class="ri-group-line"></i></a>
                           <div class="iq-sub-dropdown iq-sub-dropdown-large">
                              <div class="card shadow-none m-0">
                                 <div class="card-body p-0 ">
                                    <div class="bg-primary p-3">
                                       <h5 class="mb-0 text-white">Friend Request<small class="badge  badge-light float-right pt-1">4</small></h5>
                                    </div>
                                    <div class="iq-friend-request">
                                       <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between" >
                                          <div class="d-flex align-items-center">
                                             <div class="">
                                                <img class="avatar-40 rounded" src="{!! asset('FontAssets') !!}/images/user/01.jpg" alt="">
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Jaques Amole</h6>
                                                <p class="mb-0">40  friends</p>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center">
                                             <a href="javascript:void();" class="mr-3 btn btn-primary rounded">Confirm</a>
                                             <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Delete Request</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="iq-friend-request">
                                       <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between" >
                                          <div class="d-flex align-items-center">
                                             <div class="">
                                                <img class="avatar-40 rounded" src="{!! asset('FontAssets') !!}/images/user/02.jpg" alt="">
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Lucy Tania</h6>
                                                <p class="mb-0">12  friends</p>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center">
                                             <a href="javascript:void();" class="mr-3 btn btn-primary rounded">Confirm</a>
                                             <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Delete Request</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="iq-friend-request">
                                       <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between" >
                                          <div class="d-flex align-items-center">
                                             <div class="">
                                                <img class="avatar-40 rounded" src="{!! asset('FontAssets') !!}/images/user/03.jpg" alt="">
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Manny Petty</h6>
                                                <p class="mb-0">3  friends</p>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center">
                                             <a href="javascript:void();" class="mr-3 btn btn-primary rounded">Confirm</a>
                                             <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Delete Request</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="iq-friend-request">
                                       <div class="iq-sub-card iq-sub-card-big d-flex align-items-center justify-content-between" >
                                          <div class="d-flex align-items-center">
                                             <div class="">
                                                <img class="avatar-40 rounded" src="{!! asset('FontAssets') !!}/images/user/04.jpg" alt="">
                                             </div>
                                             <div class="media-body ml-3">
                                                <h6 class="mb-0 ">Marsha Mello</h6>
                                                <p class="mb-0">15  friends</p>
                                             </div>
                                          </div>
                                          <div class="d-flex align-items-center">
                                             <a href="javascript:void();" class="mr-3 btn btn-primary rounded">Confirm</a>
                                             <a href="javascript:void();" class="mr-3 btn btn-secondary rounded">Delete Request</a>
                                          </div>
                                       </div>
                                    </div>
                                    <div class="text-center">
                                       <a href="#" class="mr-3 btn text-primary">View More Request</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                      <ul class="navbar-list">
                        <li>
                           <a href="#" class="search-toggle   d-flex align-items-center">
                           <i class="ri-arrow-down-s-fill"></i>
                           </a>
                           <div class="iq-sub-dropdown iq-user-dropdown">
                              <div class="card shadow-none m-0">
                                 <div class="card-body p-0 ">
                                    <div class="bg-primary p-3 line-height">
                                       <h5 class="mb-0 text-white line-height">Hello {{ Auth::user()->name }}</h5>
                                       <span class="text-white font-size-12">Available</span>
                                    </div>
                                    <a href="profile.html" class="iq-sub-card iq-bg-primary-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded card-icon iq-bg-primary">
                                             <i class="ri-file-user-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">My Profile</h6>
                                             <p class="mb-0 font-size-12">View personal profile details.</p>
                                          </div>
                                       </div>
                                    </a>
                                    <a href="profile-edit.html" class="iq-sub-card iq-bg-warning-hover">
                                       <div class="media align-items-center">
                                          <div class="rounded card-icon iq-bg-warning">
                                             <i class="ri-profile-line"></i>
                                          </div>
                                          <div class="media-body ml-3">
                                             <h6 class="mb-0 ">Edit Profile</h6>
                                             <p class="mb-0 font-size-12">Modify your personal details.</p>
                                          </div>
                                       </div>
                                    </a>
                                    <div class="d-inline-block w-100 text-center p-3">
                                       <a class="bg-primary iq-sign-btn" href="{!! route('logout') !!}" role="button">Sign out<i class="ri-login-box-line ml-2"></i></a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </div>
               </nav>
            </div>
         </div>
         <!-- TOP Nav Bar END -->
         <!-- Page Content  -->
         @yield('content')
      <!-- Wrapper END -->
      <!-- Footer -->
      <footer class="bg-white iq-footer">
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-6">
                  <ul class="list-inline mb-0">
                     <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                     <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                  </ul>
               </div>
               <div class="col-lg-6 text-right">
                  Copyright 2021 <a href="#">Merjme</a> All Rights Reserved.
               </div>
            </div>
         </div>
      </footer>
      <!-- Footer END -->
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="{!! asset('FontAssets') !!}/js/jquery.min.js"></script>
      <script src="{!! asset('FontAssets') !!}/js/popper.min.js"></script>
      <script src="{!! asset('FontAssets') !!}/js/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="{!! asset('FontAssets') !!}/js/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="{!! asset('FontAssets') !!}/js/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="{!! asset('FontAssets') !!}/js/waypoints.min.js"></script>
      <script src="{!! asset('FontAssets') !!}/js/jquery.counterup.min.js"></script>
      <!-- Wow Java{!! asset('FontAssets') !!}/Script -->
      <script src="js/wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="{!! asset('FontAssets') !!}/js/apexcharts.js"></script>
      <!-- Slick JavaScript -->
      <script src="{!! asset('FontAssets') !!}/js/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="{!! asset('FontAssets') !!}/js/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="{!! asset('FontAssets') !!}/js/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="{!! asset('FontAssets') !!}/js/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="{!! asset('FontAssets') !!}/js/smooth-scrollbar.js"></script>
      <!-- lottie JavaScript -->
      <script src="{!! asset('FontAssets') !!}/js/lottie.js"></script>
      <!-- am core JavaScript -->
      <script src="{!! asset('FontAssets') !!}/js/core.js"></script>
      <!-- am charts JavaScript -->
      <script src="{!! asset('FontAssets') !!}/js/charts.js"></script>
      <!-- am animated JavaScript -->
      <script src="{!! asset('FontAssets') !!}/js/animated.js"></script>
      <!-- am kelly JavaScript -->
      <script src="{!! asset('FontAssets') !!}/js/kelly.js"></script>
      <!-- am maps JavaScript -->
      <script src="{!! asset('FontAssets') !!}/js/maps.js"></script>
      <!-- am worldLow JavaScript -->
      <script src="{!! asset('FontAssets') !!}/js/worldLow.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="{!! asset('FontAssets') !!}/js/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="{!! asset('FontAssets') !!}/js/custom.js"></script>
   </body>

<!-- Mirrored from iqonic.design/themes/socialv/html-dark/group.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 21 May 2021 01:15:23 GMT -->
</html>
