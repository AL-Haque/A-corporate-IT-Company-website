<?php

namespace App\Http\Controllers;

use App\Models\MoreFeature;
use App\Models\Service;
use App\Models\ServiceDev;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class serviceController extends Controller
{
     public function index(){

        $service =Service::latest()->paginate(5);
        $served =Service::first();
        return view('service.service',compact('service','served'));
    }


    public function store(){

        $this->validate(\request(),
        [
            'title' =>  'required',
            'details' =>  'required',
            'description' =>  'required',
            'image' =>  'required|image|mimes:jpeg,jpg,png',
            'banner' =>  'required|image|mimes:jpeg,jpg,png',

        ]);

        $sliderImage = '';
        try {
            $extension = \request()->file('image')->extension();
            $filename = $filename = time() . '.' . $extension;

            \request()->file('image')->move('images', $filename);
            // dd($sliderImage);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }


        $sliderImage = '';
        try {
            $extension = \request()->file('banner')->extension();
            $filename = $filename = time() . '.' . $extension;

            \request()->file('banner')->move('images/banner', $filename);
            // dd($sliderImage);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }




        Service::create([
            'title' =>\request('title'),
            'details' =>\request('details'),
            'description' =>\request('description'),
            'image' =>  $filename,
            'banner' =>  $filename,
     ]);

        return redirect()->back()->with('success','Service Information Added Successfully');
    }


    public function edit($id){
        $service = Service::latest()->paginate(5);
        $serve = Service::find($id);
        return view ('service.edit',compact('service','serve'));
    }


    public function update(Request $request, $id){

        $service =Service::find($id);
        $service->title = $request->input('title');
        $service->description = $request->input('description');
        $service->details = $request->input('details');
        if($request->hasFile('image'))
        {
            $destination = '/images' . $service->image;
            if(File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time(). '.' . $extension;
            $file->move('images/', $filename);
            $service->image = $filename;
        }


        if ($request->hasFile('banner')) {
            $destination = 'images/banner/'.$service->banner;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('banner');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/banner/', $filename);
            $service->banner = $filename;
        }

        $service->update();
        return redirect()->route('service.index');


 }

 public function delete(Request $request, $id)
    {

        $service =Service::find($id);
        $service->title = $request->input('title');
        $service->description = $request->input('description');
        $service->details = $request->input('details');
        $file ='images/' . $service->filename;
        $file ='images/banner/' . $service->filename;

        $service->delete();
        // if(Storage::delete($data->filename)) {
        //     $data->delete();
        //  }
        return redirect()->route('service.index')->with('success','Service Information Deleted Successfully');;
    }


}
