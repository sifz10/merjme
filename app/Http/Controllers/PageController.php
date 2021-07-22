<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function terms()
    {
      return view('terms');
    }

    public function privacy()
    {
      return view('privacy');
    }

    public function searching(Request $request)
    {
      $result = DB::table('users')->where('name','LIKE','%'.$request->search_input.'%')->get();
      return view('search_result', compact('result'));
    }
}
