<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Contact;
use Hamcrest\Core\Set;
use Illuminate\Http\Request;
use App\Models\Settings;
class MainController extends Controller
{
    public function index()
    {
        $settings = Settings::find(1);
        $abouts   = About::find(1);
        return view("web.index",['settings'=>$settings],['abouts'=>$abouts]);
    }
}
