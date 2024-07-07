<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Color;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class ColorController extends Controller
{
    

    public function colorview(){

       if(!Gate::allows('admin')){
        abort(403);
       }

       $colors = Color::all();

       $TaskCount = Task::all()->count();

        return view('admin.view-color', compact('colors','TaskCount'));
    }


    public function colorCreate(){

        if(!Gate::allows('admin')){
            abort(403);
           }

           $TaskCount = Task::all()->count();

           return view('admin.create-color',compact('TaskCount'));
    }


    public function colorPost(Request $request){

        if(!Gate::allows('admin')){
            abort(403);
           }

           $validated = $request->validate([
                'name'=>'required',
                'code'=>'required',
                'status'=>'nullable',
           ]);

           Color::create([
            'name'=>$validated['name'],
            'code'=>$validated['code'],
            'status'=>$request->status == true ? '1':'0',
           ]);

           return redirect()->route('view.color')->with('success','The color was created successfully');

    }

          public function colorEdit(Color $color){
            if(!Gate::allows('admin')){
                abort(403);
               }

               $TaskCount = Task::all()->count();

              return view('admin.color-edit',compact('color','TaskCount'));
          }

          public function colorUpdate(Request $request, Color $color){

            if(!Gate::allows('admin')){
                abort(403);
               }

               $validated = $request->validate([
                'name'=>'required',
                'code'=>'required',
                'status'=>'nullable',
           ]);

                 $color->update([
                    'name'=>$validated['name'],
                    'code'=>$validated['code'],
                    'status'=>$request->status == true ? '1':'0',
                 ]);

               return redirect()->route('view.color')->with('success','The color was updated successfully!');
          }


          public function colorDelete(int $color_id){
                
            if(!Gate::allows('admin')){
                abort(403);
            }

            $color = Color::findOrFail($color_id);

            $color->delete();

            return redirect()->back()->with('success','The color was deleted successfully!');
          }

}
