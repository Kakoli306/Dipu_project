<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\About;
use DB;

class AboutController extends Controller
{
    public function index(){
        return view('admin.about.addAbout');
    }
    public function saveAbout(Request $request){
        About::create($request->all()) ;
        return redirect('/about/add')->with('message', 'About info created successfully');
}
public function manageAbout(){
    $abouts = About::all();
   return view('admin.about.manageAbout',['abouts'=> $abouts]);
}

public function editAbout($id){
    $aboutById = About::find($id);
    return view('admin.about.editAbout',['aboutById' => $aboutById]);
}
public function updateAbout(Request $request ){

// var_dump($_GET);
// $title=$_GET['title'];
// $id=$_GET['aboutId'];
// $description=$_GET['description'];


// print_r($_GET["title"]);

$id= $_GET["id_about"];
$title= $_GET["title"];
$description= $_GET["description"];
// echo $id;


DB::table('abouts')
->where('id', $id)
->update(['title' => $title,'description'=>$description]);


    // $aboutId = $request->id_about;
//     //echo $aboutId;
//     //var_dump[$_post];
//    // var_dump [$aboutId];

//     $about=About::find($id_about);
//    $about->title = $request->title;
//     $about->description = $request->description;
//     $about->save();
    return redirect('/about/manage')->with('message','About info updated successfully');
}


public function deleteAbout(Request $request){
    
    $about = About::find($request->about_id);
    $about->delete();
    return redirect('/about/manage')->with('message','About info deleted successfully');
}
}
