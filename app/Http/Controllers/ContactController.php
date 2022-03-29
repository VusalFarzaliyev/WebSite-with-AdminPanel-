<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
class ContactController extends Controller
{
    public function index()
    {
        $contact = Contact::where("id",">",0)->paginate(5);
        $contacts = Contact::all();
        return view("admin.contact.index",["contact"=>$contact],['contacts'=>$contacts]);
    }
    public function store($id)
    {
        $contact = Contact::find($id);
        $contacts = Contact::all();
        return view("admin.contact.view",["contact"=>$contact],['contacts'=>$contacts]);
    }
    public function delete($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
        return redirect("/admin/contact")->with("danger","Mesaj Silindi");

    }
    public function create(Request $request)
    {
        $request->validate([
            "name"=>"required|min:3",
            "email"=>"required",
            "number"=>"required",
            "message"=>"required"
        ]);
        $contact = new Contact;
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->number = $request->number;
        $contact->message = $request->message;
        if($contact->name and $contact->email and $contact->number and $contact->message)
        {
            $contact->save();
            return redirect("/")->with("success","Mesajınız uğurla göndərildi");
        }
        else
        return redirect("/#contact")->with("warning","Əlaqə üçün bütün xanaları doldurun");
    }

}
