<?php

namespace App\Livewire\Admin;

use App\Models\Task;
use Illuminate\Support\Facades\Gate;
use Livewire\Component;
use Livewire\WithPagination;

class Tasks extends Component
{

    use WithPagination;

    public $title , $content;


    public $EditingToDoID;

    public $newTitle, $newContent;



    public function store(){

        if(!Gate::allows('admin')){
            abort(403);
        }


        $validated = $this->validate([
           'title'=>'required',
           'content'=>'required',
        ]);


        Task::create([
            'title'=>$this->title,
            'content'=>$this->content,
        ]);


        request()->session()->flash('success','Your task was added successfully to your tasks list!');
    }



    public function toggle($togle_id){


        if(!Gate::allows('admin')){
            abort(403);
        }



        $task = Task::find($togle_id);

        $task->update([
            $task->completed=1,
        ]);



        $task->save();

    }


    public function untoggle($togle_id){


        if(!Gate::allows('admin')){
            abort(403);
        }



        $task = Task::find($togle_id);

        $task->update([
            $task->completed=0,
        ]);



        $task->save();

    }


    public function edit($task_id){

        if(!Gate::allows('admin')){
            abort(403);
        }


        $this->EditingToDoID = $task_id;
        $this->newTitle = Task::find($task_id)->title;
        $this->newContent = Task::find($task_id)->content;


    }


    public function update(){


        if(!Gate::allows('admin')){
            abort(403);
        }

        $this->validate([
            'newTitle'=>'required',
            'newContent'=>'required',
        ]);

       Task::find($this->EditingToDoID)->update(
        [
            'title'=>$this->newTitle,
            'content'=>$this->newContent,
            ]
       );

         $this->cancelEdit();

    }


    public function cancelEdit(){

        if(!Gate::allows('admin')){
            abort(403);
        }

        $this->reset('EditingToDoID','newTitle','newContent');



    }


    public function delete($task_id){

        if(!Gate::allows('admin')){
            abort(403);
        }


        $task = Task::find($task_id);



        if($task){

            $task->delete();

        }
        



    }



    public function render()
    {


        $tasks = Task::orderBy('created_at','DESC');

        


        return view('livewire.admin.tasks',[
            'tasks'=>$tasks->paginate(5),
            
        ]);
    }
}
