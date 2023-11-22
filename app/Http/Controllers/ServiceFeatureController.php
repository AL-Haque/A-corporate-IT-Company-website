<?php

namespace App\Http\Controllers;

use App\Models\MoreFeature;
use Illuminate\Http\Request;

class ServiceFeatureController extends Controller
{
    public function index()
    {
        $servicefeature = MoreFeature::latest()->paginate(5);
        $servicefeatures= MoreFeature::first();

        return view('More-Feature.index', compact('servicefeature', 'servicefeatures'));
    }

    public function store()
    {

        $this->validate(\request(),
            [
                'name' => 'required',
                'details' => 'required',

            ]);

        MoreFeature::create([
            'name' => \request('name'),
            'details' => \request('details'),
        ]);

        return redirect()->back()->with('success', 'PMore Feature Added Successfully');
    }

    public function edit($id)
    {
        $servicefeature = MoreFeature::latest()->paginate(5);
        $servicefeatures = MoreFeature::find($id);
        return view('More-Feature.edit', compact('servicefeature', 'servicefeatures'));
    }

    public function update(Request $request, $id)
    {

        $servicefeature = MoreFeature::find($id);
        $servicefeature->name = $request->input('name');
        $servicefeature->details = $request->input('details');
        $servicefeature->update();
        return redirect()->route('servicefeature.index')->with('success', 'More FeatureAdded Successfully');

    }

    public function delete(Request $request, $id)
    {

        $servicefeature = MoreFeature::find($id);
        $servicefeature->name = $request->input('name');
        $servicefeature->details = $request->input('details');
        $servicefeature->delete();
        return redirect()->route('servicefeature.index')->with('success', 'More Feature Deleted Successfully');
    }
}
