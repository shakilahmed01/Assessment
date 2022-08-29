<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
class DashboardController extends Controller
{
    //
    public function view(){
      $lists=Task::latest()->simplePaginate(5);
      return view('kanban.kanban_board1',compact('lists'));
    }

    public function post_task(Request $request){
      $validated = $request->validate([
        'title' => 'required',
    ]);
    if ($validator->fails()) {
            return redirect('kanban/board')
                        ->withErrors($validator)
                        ->withInput();
        }
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
