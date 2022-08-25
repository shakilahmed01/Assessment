<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
class DashboardController extends Controller
{
    //
    public function view(){
      $lists=Task::all();
      return view('kanban.kanban_board',compact('lists'));
    }

    public function post_task(Request $request){
      $kanban=Task::create([
        'title'=>$request->title
      ]);
      return back();
    }

    public function edit_task($id){
      $list=Task::findorfail($id);
      return view('kanban.task_update',compact('list'));
    }

    public function update_task(Request $request){
      $kanban=Task::findorfail($request->id)->update([
        'title'=>$request->title
      ]);
      return redirect()->route('kanban');
    }
}
