<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Addmovie extends Controller
{
   public function addmovieDatabase(Request $req)
   {
     $req->validate([
      'nameMovie'=>'required',
      'selectCategory'=>'required',
      'src_img'=>'required',
      'date'=>'required'
     ]);
     $nameMovie=  $req->input("nameMovie");
     $category=  $req->input("selectCategory");
     $src_img=  $req->input("src_img");
     $date=  $req->input("date");
       DB::table('movie')->insert(['name'=>$nameMovie,
       'category'=>$category,
       'img'=>$src_img,
       'release_date'=>$date]);
       return redirect('main');
   }
}
