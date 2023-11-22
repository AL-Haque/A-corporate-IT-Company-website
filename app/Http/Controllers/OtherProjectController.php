<?php

namespace App\Http\Controllers;

use App\Models\OtherProject;
use Illuminate\Http\Request;

class OtherProjectController extends Controller
{
    public function index()
    {
        $otherproject = OtherProject::latest()->paginate(5);
        $otherprojects = OtherProject::first();
        return view('otherproject.index', compact('otherproject', 'otherprojects'));
    }

    public function store()
    {

        $this->validate(\request(),
            [
                'name' => 'required',
                'details' => 'required',

            ]);

        OtherProject::create([
            'name' => \request('name'),
            'details' => \request('details'),
        ]);

        return redirect()->back()->with('success', 'Project Information Added Successfully');
    }

    public function edit($id)
    {
        $otherproject = OtherProject::latest()->paginate(5);
        $otherprojects = OtherProject::find($id);
        return view('otherproject.edit', compact('otherproject', 'otherprojects'));
    }

    public function update(Request $request, $id)
    {

        $otherproject = OtherProject::find($id);
        $otherproject->name = $request->input('name');
        $otherproject->details = $request->input('details');
        $otherproject->update();
        return redirect()->route('otherproject.index')->with('success', 'Project Information Added Successfully');

    }

    public function delete(Request $request, $id)
    {

        $otherproject = OtherProject::find($id);
        $otherproject->name = $request->input('name');
        $otherproject->details = $request->input('details');
        $otherproject->delete();
        return redirect()->route('otherproject.index')->with('success', 'Project Information Deleted Successfully');
    }

}
