<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Service;
use App\Models\ServiceDev;
use App\Models\MoreFeature;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function facilities(){

      $facilities=Service::all();
      $facility=Service::all()->take(1);
      $moreservice=MoreFeature::all();
      $info=Company::all();
      $serviceDev=ServiceDev::all();
      return view('frontend.facilities.index',compact('facilities','moreservice','info','serviceDev','facility'));
       }
}
