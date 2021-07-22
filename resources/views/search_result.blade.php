@extends('layouts.Font.App')
@section('title')
  Home
@endsection
@section('content')

  <div id="content-page" class="content-page">
     <div class="container">
        <div class="row">
          @forelse ($result as $value)
            <div class="col-md-6 col-lg-4">
              <div class="card">
                 <div class="top-bg-image">
                    <img src="../uploads/{{ $value->cover }}" class="img-fluid w-100" alt="group-bg">
                 </div>
                 <div class="card-body text-center">
                    <div class="group-icon">
                       <img src="../uploads/{{ $value->dp }}" alt="profile-img" class="rounded-circle img-fluid avatar-120">
                    </div>
                    <div class="group-info pt-3 pb-3">
                       <h4><a href="#">{{ $value->name }}</a></h4>
                    </div>
                    <a href="{!! route('profile',$value->slug) !!}" class="btn btn-primary d-block w-100">View Profile</a>
                 </div>
              </div>
           </div>
          @empty
            <p>No Result Found!</p>
          @endforelse
           </div>
        </div>
     </div>
  </div>
</div>
@endsection
