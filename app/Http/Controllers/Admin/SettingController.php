<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Setting;
use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class SettingController extends Controller
{
    

    public function view(){

        if(!Gate::allows('admin')){
            abort(403);
        }

        $setting = Setting::first();

        $TaskCount = Task::all()->count();

        return view('admin.settings',compact('setting','TaskCount'));
    }


    public function setSettings(Request $request){

        if(!Gate::allows('admin')){
            abort(403);
        }

        $setting = Setting::first();

        if($setting){

            

            $setting->update([
                'website_name'=> $request->website_name,
                'website_url'=>$request->website_url,
                'page_title'=>$request->title,
                'meta_keyword'=>$request->meta_keywords,
                'meta_description'=>$request->meta_description,
                'address'=>$request->address,
                'phone1'=>$request->phone1,
                'phone2'=>$request->phone2,
                'email1'=>$request->email1,
                'email2'=>$request->email2,
                'facebook'=>$request->facebook,
                'twitter'=>$request->twitter,
                'instagram'=>$request->instagram,
                'google'=>$request->google,
            ]);

            return redirect()->back()->with('success','The Site data was updated successfully!');

        }else{

            Setting::create([
                'website_name'=> $request->website_name,
                'website_url'=>$request->website_url,
                'page_title'=>$request->title,
                'meta_keyword'=>$request->meta_keywords,
                'meta_description'=>$request->meta_description,
                'address'=>$request->address,
                'phone1'=>$request->phone1,
                'phone2'=>$request->phone2,
                'email1'=>$request->email1,
                'email2'=>$request->email2,
                'facebook'=>$request->facebook,
                'twitter'=>$request->twitter,
                'instagram'=>$request->instagram,
                'google'=>$request->google,
            ]);


            return redirect()->back()->with('success','The Site Settings was created successfully!');
        }
    }
}
