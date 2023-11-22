<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ClientController extends Controller
{
    public function index()
    {
        $clients =Client::latest()->paginate(5);
        $client =Client::first();
        return view('client.index', compact('clients','client'));
    }

    public function store(Request $request)
    {
        $this->validate(\request(),
            [

                'image' => 'required|image|mimes:jpeg,jpg,png',

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

        Client::create([
            'image' => $filename,
        ]);

        return redirect()->back()->with('success',' Client Information Save Sucessfully');

    }

    public function edit($id)
    {
        $clients = Client::latest()->paginate(5);
        $client = Client::find($id);

        return view('client.edit', compact('clients','client'));
    }

    public function update(Request $request, $id)
    {
        $clients = Client::find($id);
        if ($request->hasFile('image')) {
            $destination = 'images/' . $clients->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $clients->image = $filename;
        }
        $clients->update();
        return redirect()->route('client.index')->with('success','Client Information Update Sucessfull');
    }

    public function delete(Request $request, $id)
    {
        $clients = Client::find($id);
        $file ='images/' . $clients->filename;

        $clients->delete();
        // if(Storage::delete($data->filename)) {
        //     $data->delete();
        //  }
        return redirect()->route('client.index')->with('success',' Client Information Deleted Successfully');

    }
}
