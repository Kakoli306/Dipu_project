<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Resume;
use DB;


class ResumeController extends Controller
{
    public function index()
    {
        return view('admin.resume.addResume');
    }

    public function resumeFormValidation( $request)
    {
        $this->validate($request, [
            'resume_title' => 'required',
            'description' => 'required',
            'resume_image' => 'required'
        ]);
    }

    //  $resumeImage =  $request->file('resume_image');
//  $uploadPath = 'resume_image/';
//  $imageExtension = $resumeImage->getClientOriginalExtension();
    //$imageName =$request->resume_title.'.'.$imageExtension;
    //return $imageName;
    //$resumeImage->move($uploadPath, $imageName);
    //return 'success';

    public function resumeImageUpload($request)
    {
        $resumeImage = $request->file('resume_image');
        $fileExtension = $resumeImage->getClientOriginalExtension();
        $uploadPath = 'resume_images/';
        $imageName = $request->resume_title . '.' . $fileExtension;
        $imageUrl = $uploadPath . $imageName;
        Image::make($resumeImage)->save($uploadPath . $imageName);
        return $imageUrl;
    }

    public function saveResumeBasicInfo($request, $imageUrl)
    {
            $resume = new Resume();
            $resume->resume_title = $request->resume_title;
            $resume->description = $request->description;
            $resume->resume_image = $imageUrl;
            $resume->save();
        return redirect('resume/add')->with('message', 'This info save successfully');
        }

    public function saveResume(Request $request){
        $this->resumeFormValidation($request);
        $imageUrl = $this->resumeImageUpload($request);
        $this->saveResumeBasicInfo($request, $imageUrl);
        return redirect('resume/add')->with('message', 'This info save successfully');
    }

    public function manageResume(){
        $resume = Resume::all();
//  return var_dump($educations);
        return view('admin.resume.manageResume',['resumes'=> $resume]);
    }

    public function editResume(Request $request){

        //$resumeById = Resume::find($request->resume_id);
        $resumeById=DB::table('resumes')->where('id',$request->resume_id)->first();
        //return var_dump($resumeById);
        return view('admin.resume.editResume',['resumeById' => $resumeById]);
    }
    public function updateResume(Request $request) {
        //return $request->all();

        $resumeImage = $request->file('resume_image');
        $fileExtension = $resumeImage->getClientOriginalExtension();
        $uploadPath = 'resume_images/';


        $resume = Resume::find($request->resume_id);
        $resume->resume_title = $request->resume_title;
        $resume->description = $request->description;
        $imageName = $request->resume_title . '.' . $fileExtension;
        $imageUrl = $uploadPath . $imageName;
        Image::make($resumeImage)->save($uploadPath . $imageName);
        $resume->resume_image = $imageUrl;
        $resume->save();
        return redirect('/resume/manage')->with('message', 'this info updated successfully')->send();
    }
    public function deleteResume(Request $request){

        $resume  = Resume::find($request->resume_id);
        $resume->delete();
        return redirect('/resume/manage')->with('message','this info deleted successfully');
    }
    }


