<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\updateAcountVerify;
use App\Models\User;
use App\Models\VerifyUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{


   public function viewRegister(){

    

        return view('user.register');

    
    
    
   }

   public function viewLogin(){

   

        return view('user.login');
    

    
   }

    public function register(){

         


            $validated = request()->validate([
                'name'=>'required|min:3|max:50',
                'email'=>'required|email|unique:users',
                'password'=>'required|min:8|max:30',
                'terms'=>'required',
                ],
            [
                'terms.required'=>'You must agree to the terms and conditions in order to create an account',
            ]);
        
        
        
        
                $user = User::create([
                   'name'=>$validated['name'],
                   'email'=>$validated['email'],
                   'password'=>Hash::make($validated['password']),
                ]);
        
                $last_id = $user->id;
        
                $token = $last_id.hash('sha256', Str::random(120));
                $verifyURL = route('user.verify', ['token'=>$token, 'service' =>'Email_verification']);
        
                VerifyUser::create([
                    'user_id'=>$last_id,
                     'token'=>$token,
                ]);
        
                $message = 'Dear <b>'.request()->name.'</b>';
                $message.= 'Thanks for siging up, we just need you to verify your email address to complete setting up your account.';
        
                $mail_data = [
                    'recipient'=>request()->email,
                    'fromEmail'=>'electratehnology@gmail.com',
                    'fromName'=>'Electra',
                    'subject'=>'Email Verification',
                    'body'=>$message,
                    'actionLink'=>$verifyURL,
        
                ];
        
                Mail::send('email-template', $mail_data, function($message) use ($mail_data){
                      $message->to($mail_data['recipient'])
                               ->from($mail_data['fromEmail'], $mail_data['fromName'])
                               ->subject($mail_data['subject']);
                });
        
                return redirect()->route('user.login', compact('user'))->with('success','You need to verify your account. We have sent you an activation link, please check your email.');


         


       
    }

    public function login(){

        

            $validated = request()->validate([
                'email'=>'required|email|exists:users',
                'password'=>'required|min:8',
            ]);
    
            if(auth()->attempt($validated)){
                request()->session()->regenerate();
    
                return redirect(route('prehome'));
            }
    
    
            return redirect()->route('user.login')->with('error','The email or password is not correct!');  

        



        
    }


    public function viewprofile(User $user){

       
        $cartCount = Cart::where('user_id',auth()->user()->id);
         
        return view('user.information-user',compact('cartCount'));
 
     
     }

     public function logout(){
        auth()->logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect(route('user.menu'));
    }

    public function preedit(){
        
        


        return $this->edit(auth()->user());
    }


    public function edit(User $user){

        if(!Gate::allows('user.edit', $user)){
         abort(404);
        }

        
            $cartCount = Cart::where('user_id',auth()->user()->id);
        
        

         
 
         return view('user.update-information-user', compact('user','cartCount'));
     }



     public function update(){

         $user = User::where('id',auth()->user()->id)->firstOrFail();


        if(!Gate::allows('user.edit', $user)){
            abort(404);
           }
       
           

       $validated = request()->validate([
              'name'=>'required|min:3|max:50',
              'phone'=>'min:10|max:11',
            
        ]);


        $user->update([
                 'name'=>$validated['name'],
                 'phone'=>$validated['phone'],
                 
        ]);

        

       


        return redirect(route('user.profile'))->with('success','Your profile has updated successfully!');
    }


    public function verify(){

        $token = request()->token;
        $verifyUser = VerifyUser::where('token', $token)->first();

        if(!is_null($verifyUser)){
            $user = $verifyUser->user;


            if(!$user->email_verified){
                  $verifyUser->user->email_verified = 1;
                  $verifyUser->user->save();

                  return redirect()->route('user.login')->with('success','Your email is verified successfully. You can now login')->with('verifiedEmail', $user->email);
            }else{
                 return redirect()->route('user.login')->with('info','Your email is already verified you can now login!')->with('verifiedEmail', $user->email);
            }
        }
    }


    public function showForgotForm(){
        return view('user.forgot');
       }


       public function sendResetLink(Request $request){
         $request->validate([
              'email'=>'required|email|exists:users',
        ]);

       $token = Str::random(64);

      DB::table('password_reset')->insert([
        'email'=>$request->email,
        'token'=>$token,
        'created_at'=>Carbon::now(),
      ]);

        $action_link = route('user.reset',['token'=>$token, 'email'=>$request->email]);
        $body = "We are received a request to reset the password for Electra account associated with ".request()->email.". You can reset your password by clicking the link below";

        Mail::send('email-forgot', ['action_link'=>$action_link, 'body'=>$body], function($message) use ($request){
         $message->from('electratehnology@electratehno.com');
         $message->to($request->email)
                 ->subject('Reset password');
        });

        return back()->with('success', 'We have e-mailed your password reset link!');
   }


 
   public function showResetForm(Request $request, $token=null){

    return view('user.reset')->with(['token'=>$token, 'email'=>$request->email]);

  }


  public function resetPassword(Request $request){
           
    $request->validate([
          
            'email'=>'required|email|exists:users',
            'password'=>'required|min:8|max:30',
            
    ]);
    
   

    $check_token = DB::table('password_reset')->where([
             'email'=>$request->email,
             'token'=>$request->token,
        ])->first();

    if(!$check_token){
        return back()->withInput()->with('fail', 'Invalid token');
    }else{

        User::where('email', $request->email)->update([
               'password'=>Hash::make($request->password)
        ]);

        DB::table('password_reset')->where([
            'email'=>$request->email,
        ])->delete();


        return redirect()->route('user.login')->with('success','Your password has been changed! You can login with new password')->with('verifiedEmail', $request->email);
    }
}

public function ChangepV(){

    
   if(Auth::check()){
    $cartCount = Cart::where('user_id',auth()->user()->id);
    return view('user.change-password',compact('cartCount'));
   }else{
        return view('user.change-password');
   }

    
}

public function  changeP(Request $request){

    

    


      $validated = $request->validate([
           'current_password'=>'required|string|min:8',
           'password'=>'required|string|min:8|confirmed',
      ],[
          'password.confirmed'=>'The password does not match']);

     $currentPasswordStatus  = Hash::check($request->current_password, auth()->user()->password);

     if($currentPasswordStatus){

        User::findOrFail(Auth::user()->id)->update([
          
          'password' => Hash::make($validated['password']),
        ]);

        return redirect()->back()->with('message','Password Updated Successfully!');
     }else{

        return redirect()->back()->with('message','Current Password does not match with Old Password');
     }


}


}
