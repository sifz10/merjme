<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
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
      if ($profile->id == Auth::id()) {
        return view('Profile.profile_edit', compact('profile'));
      }else {
        return view('error.404');
      }
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

    public function changePassword(Request $request)
    {

        $userpassword = DB::table('users')->where('id', Auth::id())->value('password');

        if($request->new_password != $request->confirm_password)
        {
            return back()->with('danger', 'Confirm password not matched!');
        }
        if(!Hash::check($request->current_password , $userpassword))
        {
          // echo "Not matched";
            return back()->with('danger', 'Your old password was incorrect!');
        }
        if(Hash::check($request->new_password, $userpassword))
        {
            return back()->with('danger', 'Your old and new passwords are same!');
        }

        DB::table('users')->where('id', Auth::id())->update([
        'password' => Hash::make($request->new_password),
        ]);
      return back()->with('success', 'Your password updated successfully!');
    }

    public function changeContact(Request $request)
    {
      DB::table('users')->where('id', Auth::id())->update([
      'mobile' => $request->mobile,
      'primary_website' => $request->primary_website,
      ]);

      return back()->with('success', 'Your contacts has been updated!');
    }
}
