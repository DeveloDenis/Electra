<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class TaskController extends Controller
{
    


   public function view(){

    if(!Gate::allows('admin')){
        abort(403);
    }


    $TaskCount = Task::all()->count();


    return view('admin.tasks',compact('TaskCount'));

   }

    


    
}
