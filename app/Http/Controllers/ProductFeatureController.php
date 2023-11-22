<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\ProductFeature;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductFeatureController extends Controller
{

    public function index()
    {
        $product = ProductFeature::latest()->paginate(5);
        $products = ProductFeature::first();
        return view('product_Feature.index', compact('product', 'products'));
    }

    public function store()
    {

        $this->validate(\request(),
            [
                'name' => 'required',
                'details' => 'required',
                // 'image' => 'required',

            ]);

        // $productImage = '';
        // try {
        //     $productExtension = \request()->file('image')->extension();
        //     $productImage = "product" . uniqid() . "_" . time() . '.' . $productExtension;

        //     \request()->file('image')->move('images', $productImage);
        //     // dd($employeeImage);
        // } catch (\Exception $e) {
        //     dd($e->getMessage());
        // }
        ProductFeature::create([
            'name' => \request('name'),
            'details' => \request('details'),
            // 'image' => $productImage,
        ]);

        return redirect()->back()->with('success', 'Product Information Added Successfully');
    }

    public function edit($id)
    {
        $product = ProductFeature::latest()->paginate(5);
        $products = ProductFeature::find($id);
        return view('product_Feature.edit', compact('product', 'products'));
    }

    public function update(Request $request, $id)
    {

        $product = ProductFeature::find($id);
        $product->name = $request->input('name');
        $product->details = $request->input('details');
        // if ($request->hasFile('image')) {
        //     $destination = 'images/' . $product->image;
        //     if (File::exists($destination)) {
        //         File::delete($destination);
        //     }
        //     $file = $request->file('image');
        //     $extension = $file->getClientOriginalExtension();
        //     $filename = time() . '.' . $extension;
        //     $file->move('images/', $filename);
        //     $product->image = $filename;
        // }
        $product->update();
        return redirect()->route('ProductFeature.index')->with('success', 'Product Information Added Successfully');

    }

    public function delete(Request $request, $id)
    {

        $product = ProductFeature::find($id);
        $product->name = $request->input('name');
        $product->details = $request->input('details');
        // $file = 'images/' . $product->filename;

        $product->delete();
        // if(Storage::delete($data->filename)) {
        //     $data->delete();
        //  }
        return redirect()->route('ProductFeature.index')->with('success', 'Product Information Deleted Successfully');
    }
}
