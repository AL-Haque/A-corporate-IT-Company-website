<?php

namespace App\Http\Controllers;

use App\Models\Map;
use App\Models\Company;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
    $contact=Company::all();
    $map=Map::all();
    $info=Company::all();
     return view('frontend.contact.index',compact('contact','map','info'));
    }
}
