<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Auth;
use Image;

class FriendController extends Controller
{
    public function sentFriendRequest(Request $request)
    {
      $isFriend = DB::table('friends')->where('receiver_id', Auth::id())->where('sender_id', $request->receiver_id)->first();

      $isExist = DB::table('friends')->where('sender_id', Auth::id())->where('receiver_id', $request->receiver_id)->first();
      if (!empty($isExist)) {
        DB::table('friends')->where('sender_id', Auth::id())->where('receiver_id', $request->receiver_id)->delete();
        return back()->with('danger', 'You have cancel a friend request.');
      }
      DB::table('friends')->insert([
        'sender_id' => Auth::id(),
        'receiver_id' => $request->receiver_id,
      ]);
      return back()->with('success', 'You have sent a friend request.');
    }

    public function accept_request(Request $request)
    {
      DB::table('friends')->where('id', $request->id)->update([
        'status' => 1,
      ]);
      return back()->with('success', 'Congratulations! Now this user is your friend now!');
    }

    public function delete_request(Request $request)
    {
      DB::table('friends')->where('id', $request->id)->delete();
      return back()->with('danger', 'Ops! Now this user is not your friend anymore!');
    }
}
