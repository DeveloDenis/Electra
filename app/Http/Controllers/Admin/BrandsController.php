<?php

namespace App\Http\Controllers\Admin;

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class BrandsController extends Controller
{
    public function index(){
         
        if(!Gate::allows('admin')){
            abort(403);
        }

        $categories = Category::where('status','0')->get();
        $brands = Brand::orderBy('id','DESC')->paginate(10);

        $TaskCount = Task::all()->count();

        return view('admin.brand', compact('brands','categories','TaskCount'));
    }


    public function create(Request $request){

        if(!Gate::allows('admin')){
            abort(403);
        }

        $validated = $request->validate([
             'name'=>'required|string',
             'slug'=>'required|string',
             'category_id'=>'required|string',
        ]);

        Brand::create([
            'name'=>$validated['name'],
            'slug'=>$validated['slug'],
            'category_id'=>$validated['category_id'],
            'status'=> $request->status == true ? '1':'0',
        ]);



        return redirect()->route('admin.brands')->with('success','The Brand was created successfully!');
    }


    public function delete(Brand $brands){
        if(!Gate::allows('admin')){
            abort(403);
        }

        $brands->delete();

        return redirect()->route('admin.brands')->with('success','The Brand was deleted successfully');

    }

    public function edit(Brand $brand){
        if(!Gate::allows('admin')){
            abort(403);
        }

        $categories = Category::where('status','0')->get();

        $TaskCount = Task::all()->count();

        return view('admin.update-brand', compact('brand','categories','TaskCount'));

       }



    public function update(Brand $brands,Request $request){

        if(!Gate::allows('admin')){
            abort(403);
        }

        $validated = $request->validate([
            'name'=>'required|string',
            'slug'=>'required|string',
            'category_id'=>'required|string',
       ]);

       $brands->update($validated);

       return redirect()->route('admin.brands')->with('success','The Brand was updated successfully!');
            
    }
}
