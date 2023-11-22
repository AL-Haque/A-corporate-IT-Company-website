<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Pricing;
use Illuminate\Http\Request;

class PriceController extends Controller
{
    public function index(){
        $info=Company::all();
        $pricing=Pricing::all()->take(3);
        $price=Pricing::all()->take(1);
        return view('frontend.pricing.index',compact('info','pricing','price'));
    }
}
