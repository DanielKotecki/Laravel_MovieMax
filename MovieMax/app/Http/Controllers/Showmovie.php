<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Showmovie extends Controller
{
   public function show()
   {
       $movies=DB::table('movie')->select('movie.id','movie.name','movie.category','movie.img','movie.release_date')->paginate(5);
      //return $movies;
        $link=DB::table('links')->get();

      // $movies=DB::table('movie')->select('movie.id','movie.name','movie.category','movie.img','movie.release_date','links.link')->leftJoin('links','movie.id','links.movieId')->get();
      // return $movies;
       return view('mainPage',['movies'=>$movies,'links'=>$link]);
   }
}
