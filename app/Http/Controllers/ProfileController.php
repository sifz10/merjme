<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Auth;
use Image;

class ProfileController extends Controller
{
    public function index(Request $request)
    {
      $profile = DB::table('users')->where('slug', $request->slug)->first();
      return view('Profile.profile', compact('profile'));
    }


    public function profile_settings(Request $request)
    {
      $profile = DB::table('users')->where('slug', $request->slug)->first();
      return view('Profile.profile_edit', compact('profile'));
    }

    public function profile_update(Request $request)
    {

      $dp = DB::table('users')->where('id', Auth::id())->value('dp');
      $cover = DB::table('users')->where('id', Auth::id())->value('cover');
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
      ->where('id', Auth::id())
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
      ]);

      return back()->with('success', 'Your profile has been updated!');
    }
}
