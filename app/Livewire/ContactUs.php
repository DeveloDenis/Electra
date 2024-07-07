<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Mail;
use App\Mail\ContactUs as ContactUsMail;
use Livewire\Component;

class ContactUs extends Component
{

    public $first_name, $last_name, $email ,$subject;

    public function contactUs(){

        $validated = $this->validate([
            'first_name'=>'required|max:30',
            'last_name'=>'required|max:30',
            'email'=>'required|email',
            
            'subject'=>'required',
        ]); 

        $first_name = $this->first_name;
        $last_name = $this->last_name;
        $email = $this->email;
        
        $subject = $this->subject;

        Mail::to("rrelutu189@gmail.com")->send(new ContactUsMail($first_name, $last_name, $email, $subject));

        request()->session()->flash('success','The email was sent successfully to Electra! We will answer you in about 3 hours!');
    }

    public function render()
    {
        return view('livewire.contact-us');
    }
}
