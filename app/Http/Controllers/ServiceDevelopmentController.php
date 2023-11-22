<?php

namespace App\Http\Controllers;

use App\Models\ServiceDev;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ServiceDevelopmentController extends Controller
{

    public function index()
    {
        $serviceDev= ServiceDev::first();
        return view('ServiceDev.index', compact('serviceDev'));
    }
    public function update(Request $request)
    {
        $this->validate(\request(),
            [
                'title' => 'required',
                'details' => 'required',
                'description' => 'required',
                'image' => 'required',

            ]);

        $serviceDev = ServiceDev::first();
        $serviceDev->title = $request->input('title');
        $serviceDev->details = $request->input('details');
        $serviceDev->description = $request->input('description');

        if ($request->hasFile('image')) {
            $destination = 'images/dervicedev/' . $serviceDev->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/dervicedev/', $filename);
            $serviceDev->image = $filename;
        }

        $serviceDev->update();
        return redirect()->back()->with('success', 'Company Information Added');

    }
}
