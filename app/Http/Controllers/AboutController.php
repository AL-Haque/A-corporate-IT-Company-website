<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Company;
use App\Models\NewsLetter;
use App\Models\UserContact;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index(){

        $info=Company::all();
        return view('frontend.about.index',compact('info'));
       }

       public function client(){
        $client=Client::all();
        $info=Company::all();
        return view('frontend.about.client',compact('client','info'));
       }



       public function store(){

        $this->validate(\request(),
        [
            'name' =>  'required',
            'email' =>  'required',
            'massage' =>  'required',

        ]);

        UserContact::create([
            'name' =>\request('name'),
            'email' =>\request('email'),
            'massage' =>\request('massage'),

     ]);

        return redirect()->back()->with('success','Service Information Added Successfully');
    }
    public function emailStore(){

        $this->validate(\request(),
        [
            'email' =>  'required',

        ]);

        NewsLetter::create([
            'email' =>\request('email'),


        ]);
        return redirect()->back();
    }



}
