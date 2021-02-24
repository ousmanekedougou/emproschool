<?php

namespace App\Http\Controllers\User;

use App\Models\User\Contact;
use Illuminate\Http\Request;
use App\Mail\ContactMessageCreated;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function post(Request $request){
        $validator = $this->validate($request,[
            'nom' => 'required|string',
            'email' => 'required|email',
            'content' => 'required|string',
        ]);


        $contact = Contact::create($request->only('nom','email','content'));
        Mail::to(config('empro.empro_support_email'))
            ->send(new ContactMessageCreated($contact));
        return redirect()->route('index')->with('success','Merci de nous contacter');
    }
}


