<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class linkAdd extends Controller
{
    public function addlinkshow($id)
    {
        return view('linkPage',['id'=>$id]);
    }
    public function addlink(Request $req,$id)
    {
        $link=  $req->input("link");
     $movieId=$id;
     //return $movieId;
       DB::table('links')->insert(['link'=>$link,
       'movieId'=> $movieId]);
       return redirect('main');
    }
}
