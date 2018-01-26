<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Achievement;
use DB;

class AchievementController extends Controller
{
  public function index(){
     return view('admin.achievement.addAchievement');
  }

  public function saveAchievement(Request $request){
    Achievement::create($request->all()) ;
    return redirect('/achievement/add')->with('message', 'This info created successfully');
}

public function manageAchievement(){
  $achievement = Achievement::all();
//  return var_dump($educations);
 return view('admin.achievement.manageAchievement',['achievements'=> $achievement]);
}

public function editAchievement($id){
  $achievementById = Achievement::find($id);
  return view('admin.achievement.editAchievement',['achievementById' => $achievementById]);
}
public function updateAchievement(Request $request) {
      $achievement = Achievement::find($request->achievement_id);
      $achievement->degree = $request->degree;
      $achievement->description = $request->description;
      $achievement->save();
      return redirect('/achievement/manage')->with('message', 'this info updated successfully');
  }
  public function deleteAchievement(Request $request){

      $achievement  = Achievement::find($request->achievement_id);
      $achievement->delete();
      return redirect('/achievement/manage')->with('message','this info deleted successfully');
  }
}
