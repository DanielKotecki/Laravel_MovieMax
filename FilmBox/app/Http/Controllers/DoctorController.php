<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DoctorController extends Controller
{
   public function index()
   {
    $doctorsList=[['id'=>'1','firstName'=>'Andrzej','lastName'=>"Wielki",'email'=>'andrzej@wp.pl','phone'=>'454632','address'=>"Niepołamice",'status'=>'dostepny'],
    ['id'=>'2','firstName'=>'Henryk','lastName'=>"Kopciński",'email'=>'Kop45@wp.pl','phone'=>'2534232','address'=>"Rzeszów",'status'=>'niedostepny'],
    ['id'=>'3','firstName'=>'Anna','lastName'=>"Mądra",'email'=>'Anna78@wp.pl','phone'=>'5654332','address'=>"Niepołamice",'status'=>'dostepny']];
   return view('list',['doctorsList'=>$doctorsList]);
      
   }
}
