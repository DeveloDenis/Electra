<?php

namespace App\Http\Controllers;

use App\Mail\ContactUs as ContactUsMail;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    

    public function view(){

        if(Auth::check()){

            $cartCount = Cart::where('user_id',auth()->user()->id);

            return view('user.contact-us-view',compact('cartCount'));
        }else{
            return view('user.contact-us-view');
        }

        
    }


    public function create(Request $request){

        $validated = $request->validate([
             'first_name'=>'required|min:5|max:30',
             'last_name'=>'required|min:5|max:30',
             'email'=>'required|email',
             
             'subject'=>'required',
        ]);

        $first_name = $request->get('first_name');
        $last_name = $request->get('last_name');
        $email = $request->get('email');
        
        $subject = $request->get('subject');

        Mail::to("rrelutu189@gmail.com")->send(new ContactUsMail($first_name, $last_name, $email, $subject));

        return redirect()->back()->with('success','The message was sent to Admin successfully!');
    }
}
