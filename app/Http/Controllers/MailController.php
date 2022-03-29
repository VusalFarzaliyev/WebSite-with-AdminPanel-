<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
Use Illuminate\Support\Facades\Mail;
class MailController extends Controller
{
    public function index()
    {
        $contacts =Contact::all();
        return view("admin.mail.index",['contacts'=>$contacts]);
    }
    public function send(Request $request)
    {
        $subject = $request->subject;
        $email = $request->email;
        $body = $request->body;
        Mail::send("admin.mail.send",['body'=>$body],function ($message) use ($email,$subject){
            $message->to($email)->subject($subject);
        });
        return redirect("/admin/mail")->with("success","Mail Göndərildi");
    }
}
