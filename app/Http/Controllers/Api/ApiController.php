<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use\App\Models\Task;
class ApiController extends Controller
{
    //
    public function post_task(Request $request){
      $kanban=Task::create([
        'title'=>$request->title
      ]);
      $string="Post Successfull!";
      return array_merge([$request->title,$string]) ;
    }

    public function update_task(Request $request){
      $kanban=Task::findorfail($request->id)->update([
        'title'=>$request->title
      ]);
      $string="Successfully Changed!";
      if($kanban){
        $i=Task::where('id',$request->id)->get()->pluck('title')->toArray();
        return array_merge([$i,$string]);
      }
    }
}
