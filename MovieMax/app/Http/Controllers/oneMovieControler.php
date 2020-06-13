<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class oneMovieControler extends Controller
{
    public function oneMovie($id)
    {
        $moviedata=DB::table('movie')->select('movie.id','movie.name','movie.category','movie.img','movie.release_date')->where('movie.id',$id)->get();
        return view('mainPage',['movies'=>$movies]);
    }
}
