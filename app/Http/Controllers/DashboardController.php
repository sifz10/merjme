<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Auth;
use Image;

class DashboardController extends Controller
{
    public function dashboard(Request $request)
    {
      if (Auth::user()->role == "super_admin") {
        return view('dashboard');
      }else {
        return redirect('/');
      }
    }

    public function editUsers(Request $request)
    {
      $user = DB::table('users')->where('id', $request->id)->first();
      return view('Dashboard.profile_edit',compact('user'));
    }

    public function userDelete(Request $request)
    {
      DB::table('users')->where('id', $request->id)->delete();
      return back()->with('danger', 'Users deleted!');
    }

    public function userUpdate(Request $request)
    {

      $dp = DB::table('users')->where('id', $request->id)->value('dp');
      $cover = DB::table('users')->where('id', $request->id)->value('cover');
      if (!empty($request->dp)) {
        $randomNumber =rand();
        $logo = $request->file('dp');
        $dp_rename = $randomNumber.'.'.$logo->getClientOriginalExtension();
        $newLocation = 'uploads/'.$dp_rename;
        Image::make($logo)->resize(100, 100)->save($newLocation,100);
      }else {
        $dp_rename = $dp;
      }

      if (!empty($request->cover)) {
        $randomNumber =rand();
        $cover = $request->file('cover');
        $cover_rename = $randomNumber.'.'.$cover->getClientOriginalExtension();
        $newLocation = 'uploads/'.$cover_rename;
        Image::make($cover)->resize(1300, 325)->save($newLocation,100);
      }else {
        $cover_rename = $cover;
      }

      DB::table('users')
      ->where('id', $request->id)
      ->update([
        'name' => $request->name,
        'dob' => $request->dob,
        'gender' => $request->gender,
        'status' => $request->status,
        'country' => $request->country,
        'language' => $request->language,
        'address' => $request->address,
        'interested_in' => $request->interested_in,
        'dp' => $dp_rename,
        'cover' => $cover_rename,
        'mobile' => $request->mobile,
        'primary_website' => $request->primary_website,
      ]);

      return back();
    }
}
