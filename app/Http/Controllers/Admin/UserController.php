<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Task;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    

    public function usersInformation(Request $request){

        if(!Gate::allows('admin')){
            abort(403);
        }
          
        $users= User::orderBy('created_at');


        if($request->has('search2')){
            $users = $users->where('id','like','%'.$request->get('search2').'%');
           }

             if($request->has('type')){
                $users = $users->where('is_admin','like','%'.$request->get('type').'%');
             }

        

        $TaskCount = Task::all()->count();
          

        return view('admin.users-information',[
            'users'=>$users->paginate(10),
            'TaskCount'=>$TaskCount,
        ]);
    }

    public function adminInformation(){

        if(!Gate::allows('admin')){
            abort(403);
        }

        $users = User::where('is_admin','1')->paginate(10);

        $TaskCount = Task::all()->count();

        return view('admin.users-information',[
            'users'=>$users,
            'TaskCount'=>$TaskCount,
        ]);
    }


    public function userInformation(){

        if(!Gate::allows('admin')){
            abort(403);
        }

        $users = User::where('is_admin','0')->paginate(10);

        $TaskCount = Task::all()->count();

        return view('admin.users-information',[
            'users'=>$users,
            'TaskCount'=>$TaskCount,
        ]);
    }

    public function delete(int $users_id){
      
        if(!Gate::allows('admin')){
            abort(403);
        }


        $user = User::findOrFail($users_id);

        $user->delete();

        return redirect()->back()->with('success','The account was deleted successfully');
    }


    public function banUser(int $user_id){

        if(!Gate::allows('admin')){
            abort('403');
        }


        $users = User::findOrFail($user_id);

        $users->update([
             'is_benned'=>$users->is_banned = 0,
        ]);

        

        return redirect()->back()->with('success','User was banned successfully!');
    }


    public function unBanUser(int $user_id){

        if(!Gate::allows('admin')){
            abort('403');
        }


        $users = User::findOrFail($user_id);

        $users->update([
             'is_benned'=>$users->is_banned = 1,
        ]);

        

        return redirect()->back()->with('success','User was UnBanned successfully!');
    }



    public function createUser(){

        if(!Gate::allows('admin')){
            abort(403);
        }

        $TaskCount = Task::all()->count();

        return view('admin.users-create',compact('TaskCount'));
    }

    public function addUser(Request $request){

        if(!Gate::allows('admin')){
            abort(403);
        }

        $validated = $request->validate([
              'name'=>'required',
              'email'=>'required|email|unique:users',
              'password'=>'required',
              'role_as'=>'required',
        ]);

            $emailVerified = 1;

        User::create([
                'name'=>$validated['name'],
                'email'=>$validated['email'],
                'password'=>Hash::make($validated['password']),
                'is_admin'=>$validated['role_as'],
                'email_verified'=>$emailVerified,
        ]);



        return redirect()->back()->with('success','Acount created successfully!');




    }


    public function editUser($userId){

        $user = User::findOrFail($userId);

        $TaskCount = Task::all()->count();

        return view('admin.user-edit',compact('user','TaskCount'));
    }


    public function updateUser(Request $request, $userId){

        if(!Gate::allows('admin')){
            abort(403);
        }

        $validated = $request->validate([
            'name'=>'required',
           
            'password'=>'required',
            'role_as'=>'required',
      ]);

          $user = User::findOrFail($userId);

      $user->update([
        'name'=>$validated['name'],
        
        'password'=>Hash::make($validated['password']),
        'is_admin'=>$validated['role_as'],
        
]);


        return redirect()->route('users.informations')->with('success','User information was updated successfully!');
    }


    public function deleteUser($userId){

        if(!Gate::allows('admin')){
            abort(403);
        }


        $user = User::findOrFail($userId);


        $user->delete();


        return redirect()->back()->with('success','The user was deleted successfully!');
    }
    
}
