@extends('layouts.Back.App')
@section('title')
  Dashboard
@endsection
@section('content')
  @php
    $user = DB::table('users')->get();
  @endphp

  <div class="layout-px-spacing">

      <div class="row layout-top-spacing">

          <div class="col-xl-12 col-lg-12 col-sm-12  layout-spacing">
            <div class="alert alert-primary">
              <b>Total users: {{ DB::table('users')->count() }} </b>
            </div>
              <div class="widget-content widget-content-area br-6">
                  <table id="zero-config" class="table dt-table-hover" style="width:100%">
                      <thead>
                          <tr>
                              <th>Name</th>
                              <th>E-Mail</th>
                              <th>Profile Picture</th>
                              <th class="no-content">Actions</th>
                          </tr>
                      </thead>
                      <tbody>
                        @forelse ($user as $value)
                          <tr>
                              <td>{{ $value->name }}</td>
                              <td>{{ $value->email }}</td>
                              <td>
                                <img src="../uploads/{{ $value->dp }}" width="150px">
                              </td>
                              <td>
                                <a href="{!! route('editUsers', $value->id) !!}" class="btn btn-primary">Edit</a>
                                <a href="{!! route('userDelete', $value->id) !!}" class="btn btn-danger">Delete</a>
                              </td>
                            </tr>
                        @empty

                        @endforelse
                      </tbody>
                      <tfoot>
                        <tr>
                            <th>Name</th>
                            <th>E-Mail</th>
                            <th>Profile Picture</th>
                            <th class="no-content">Actions</th>
                        </tr>
                      </tfoot>
                  </table>
              </div>
          </div>

      </div>

  </div>
@endsection
