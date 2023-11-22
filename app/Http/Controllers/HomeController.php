<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Company;
use App\Models\Question;
use Illuminate\Http\Request;
use App\Models\ProductFeature;
use App\Models\Text;

class HomeController extends Controller
{
    public function home(){

        $info=Company::all();
        $product=ProductFeature::all();
        $client=Client::all();
        $clients=Client::all()->take(10);
        $questions=Question::all();
        $text=Text::all();
        return view('frontend.index',compact('info','product','client','questions','text','clients'));
       }


}
