<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    public function index(){

        if(!Gate::allows('admin')){
            abort(403);
        }

        $categories = Category::orderBy('id','DESC')->paginate(10);


        $TaskCount = Task::all()->count();


       return view('admin.category', compact('categories','TaskCount')) ;
    }


    public function  create(){

        if(!Gate::allows('admin')){
            abort(403);
        }

        $TaskCount = Task::all()->count();

        return view('admin.createCategory', compact('TaskCount'));
    }


    public function make(Request $request){
        $validated=$request->validate([
              'name'=>'required|string',
              'slug'=>'required|string',
              'description'=>'required|string',
              'image'=>'image|mimes:jpeg,jpg,png|nullable',
              'meta_title'=>'required|string',
              'meta_keyword'=>'required|string',
              'meta_description'=>'required|string',
        ]);


  if($request->hasFile('image')){
            $uploadPath = 'uploads/category/';
             $imageFile = $request->file('image');
            $extention = $imageFile->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $imageFile->move($uploadPath, $filename);
            $finalImagePathName = $uploadPath.$filename;

             };


           $category = Category::create([
            'name'=>$validated['name'],
            'slug'=>Str::slug($validated['slug']),
            'description'=>$validated['description'],
            'image'=>$finalImagePathName,
            'meta_title'=>$validated['meta_title'],
            'meta_keyword'=>$validated['meta_keyword'],
            'meta_description'=>$validated['meta_description'],
            'status'=>$request->status == true ? '1':'0',

           ]);

           
          

             return redirect()->route('admin.category')->with('success', 'Category Added successfully');
    }


    public function deleteCategory(Category $categories){

        if(!Gate::allows('admin')){
            abort(403);
        }

        $categories->delete();

        return redirect()->route('admin.category')->with('success','The Category was deleted successfully');
    }

    public function edit(Category $category){

        if(!Gate::allows('admin')){
            abort(403);
        }

        $TaskCount = Task::all()->count();
        
        return view('admin.update-category',compact('category','TaskCount'));
    }


    public function updateCategory(Category $category, Request $request){

        if(!Gate::allows('admin')){
            abort(403);
        }

        $validated=$request->validate([
            'name'=>'required|string',
            'slug'=>'required|string',
            'description'=>'required|string',
            'image'=>'image|mimes:jpeg,jpg,png|nullable',
            'meta_title'=>'required|string',
            'meta_keyword'=>'required|string',
            'meta_description'=>'required|string',
      ]);


      if($request->hasFile('image')){


        $path = 'uploads/category'.$category->image;
        if(File::exsists($path)){
            File::delete($path);
        }

        $file = $request->file('image');
        $ext = $file->getClientOriginalExtension();
        $fileName = time().'.'.$ext;
        
        $file->move('uploads/category/',$fileName);
        $category->image = $validated['image'];

     };

      $category->update($validated);

      return redirect()->route('admin.category')->with('success','Your category was updated successfully!');
    }

}
