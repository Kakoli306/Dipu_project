<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class FrontendController extends Controller
{
    public function index(){
      $about=DB::table('abouts')->first();
      $education=DB::table('education')->first();
      $achievement= DB::table('achievements')->where('id',1)->first();
      $achievement2= DB::table('achievements')->where('id',2)->first();
      $resume = DB::table('resumes')->first();
      //return var_dump($education);
      //return var_dump($about);
      return view('frontEnd.home.home2')->with('about',$about)->with('education',$education)->
      with('achievement',$achievement)->
      with('achievement2',$achievement2)->with('resume',$resume);
    }

 //public function index1(){
    // $education=DB::table('education')->first();
      //return var_dump($education);
      //return view('frontEnd.layouts.education')->with('education',$education);
  //  }
}
