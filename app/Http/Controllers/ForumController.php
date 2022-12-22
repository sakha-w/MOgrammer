<?php

namespace App\Http\Controllers;

use App\Models\Forum;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ForumController extends Controller
{
  public function saveComment(Request $request){
    $request->validate([
        'name' => 'required',
        'msg' => 'required',
    ]);

    Forum::create([
        'parent_comment' => $request->id,
        'name' => $request->name,
        'post' => $request->msg,
        'date' => Carbon::now()
    ]);

    // return response()->json(['statusCode' => 200]);

    return json_encode(array("statusCode"=>200));
  }
  
  public function viewComment()
  {
        $forums  = Forum::all();
        return response()->json($forums);
  }

}
