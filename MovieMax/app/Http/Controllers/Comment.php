<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class Comment extends Controller
{
    public function addCom(Request $req, $id)
    {  $userId=Auth::user()->id;
       $com= $req->input("textCom");
       DB::table('comments')->insert(['comment'=>$com,
       'movieId'=> $id,
       'userId'=>$userId]);
        return redirect()->back();
    }

    public function deleteCom($id)   
    {
        DB::table('comments')->where('id',$id)->delete();
        return redirect()->back();
    }
}
