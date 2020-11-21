<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\task;

class TaskController extends Controller
{
    public function index()
    {
        return view('tasks.index');
    }

    public function store(Request $request)
    {
       $request->validate(
           [
            'taskname'=>'required'
           ]
       );
       
      task::create([
          'taskname'=>$request->taskname
      ]);
     
    }
}
