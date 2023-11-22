<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PricingController extends Controller
{
    public function index()
    {
        $pricing = Pricing::latest()->paginate(5);
        $price = Pricing::first();
        return view('pricing.index', compact('pricing', 'price'));
    }

    public function store()
    {

        $this->validate(\request(),
            [
                'name' => 'required',
                'content1' => 'required',
                'content2' => 'required',
                'content3' => 'required',
                'content4' => 'required',
                'content5' => 'required',
                'content6' => 'required',
                'image' => 'required',
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

            Pricing::create([
                'name' => \request('name'),
                'content1' => \request('content1'),
                'content2' => \request('content2'),
                'content3' => \request('content3'),
                'content4' => \request('content4'),
                'content5' => \request('content5'),
                'content6' => \request('content6'),
                'image' => $filename,
            ]);

            return redirect()->back()->with('success',' Pricing Information Save Sucessfully');

        }


    public function edit($id)
    {
        $pricing = Pricing::latest()->paginate(5);
        $price = Pricing::find($id);
        return view('pricing.edit', compact('pricing', 'price'));
    }

    // public function update(Request $request, $id)
    // {

    //     $pricing = Pricing::find($id);
    //     $pricing->name = $request->input('name');
    //     $pricing->content1 = $request->input('content1');
    //     $pricing->content2 = $request->input('content2');
    //     $pricing->content3 = $request->input('content3');
    //     $pricing->content4 = $request->input('content4');
    //     $pricing->content5 = $request->input('content5');
    //     $pricing->content6 = $request->input('content6');
    //     $pricing->update();
    //     return redirect()->route('pricing.index')->with('success', 'Pricing Information Added Successfully');

    // }

    public function update(Request $request, $id)
    {
        $pricing = Pricing::find($id);
        $pricing->name = $request->input('name');
         $pricing->content1 = $request->input('content1');
         $pricing->content2 = $request->input('content2');
         $pricing->content3 = $request->input('content3');
         $pricing->content4 = $request->input('content4');
         $pricing->content5 = $request->input('content5');
         $pricing->content6 = $request->input('content6');
        if ($request->hasFile('image')) {
            $destination = 'images/' . $pricing->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $pricing->image = $filename;
        }
        $pricing->update();
        return redirect()->route('client.index')->with('success','Pricing  Information Update Sucessfull');
    }





    public function delete(Request $request, $id)
    {

        $pricing = Pricing::find($id);
        $pricing->name = $request->input('name');
        $pricing->content1 = $request->input('content1');
        $pricing->content2 = $request->input('content2');
        $pricing->content3 = $request->input('content3');
        $pricing->content4 = $request->input('content4');
        $pricing->content5 = $request->input('content5');
        $pricing->content6 = $request->input('content6');
        $file ='images/' . $pricing->filename;
        $pricing->delete();
        return redirect()->route('pricing.index')->with('success', 'Pricing Information Deleted Successfully');
    }
}
