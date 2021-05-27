<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Auth;
use Image;

class SocialController extends Controller
{
    public function socialAccouts(Request $request)
    {
      DB::table('socials')->insert([
        'social_account' => $request->social_account,
        'website_url' => $request->website_url,
        'user_id' => Auth::id(),
      ]);

      return back()->with('success', 'Your social Account has been added!');
    }
}
