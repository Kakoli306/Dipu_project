<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Education;
use DB;

class EducationController extends Controller
{
  public function index(){
     return view('admin.education.addEducation');
  }

  public function saveEducation(Request $request){
    Education::create($request->all()) ;
    return redirect('/education/add')->with('message', 'Education info created successfully');
}

public function manageEducation(){
  $educations = Education::all();
//  return var_dump($educations);
 return view('admin.education.manageEducation',['educations'=> $educations]);
}

public function editEducation($id){
  $educationById = Education::find($id);
  return view('admin.education.editEducation',['educationById' => $educationById]);
}
public function updateEducation(Request $request) {
      $education = Education::find($request->education_id);
      $education->degree = $request->degree;
      $education->description = $request->description;
      $education->save();
      return redirect('/education/manage')->with('message', 'this info updated successfully');
  }
  public function deleteEducation(Request $request){

      $education  = Education::find($request->education_id);
      $education->delete();
      return redirect('/education/manage')->with('message','this info deleted successfully');
  }
}
