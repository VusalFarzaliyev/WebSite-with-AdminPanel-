<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use App\Models\Settings;

class SettingController extends Controller
{
    public function index()
    {
        $settings = Settings::find(1);
        $contacts = Contact::all();
        return view('admin.settings.index',compact("settings"),["contacts"=>$contacts]);
    }
    public function update(Request $request)
    {
        $settings = Settings::find(1);
        $settings->title = $request->title;
        $settings->subtitle = $request->subtitle;
        $settings->update();
        return redirect("/admin/settings/")->with('success', 'Başlıq və alt yazı dəyişdirildi');
    }
}
