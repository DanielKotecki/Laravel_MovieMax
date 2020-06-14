<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Player extends Controller
{
   public function PlayMovie($id)
   {
       $movieId;
      // $moviesData=DB::table('movie')->get();
      $data=DB::table('links')->Join('movie','links.movieId','movie.Id')->where('links.id',$id)->get();
      
      $idforCom=DB::table('links')->where('id',$id)->get();
      foreach ($idforCom as $item) {
          $movieId=$item->movieId;
      }
      $secKom=DB::table('comments')->Join('users','comments.userId','users.id')->select('comments.id','comments.comment','users.name')->where('comments.movieId',$movieId)->paginate(3);
    // return $secKom;
    return view('playerPage',['playerData'=>$data,'idforCom'=> $idforCom,'secKom'=>$secKom]);
   }
}
