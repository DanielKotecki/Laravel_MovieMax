<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Player extends Controller
{
   public function PlayMovie($id)
   {
      $data=DB::table('links')->where('id',$id)->get();
      //return $data;
    return view('playerPage',['playerData'=>$data]);
   }
}
