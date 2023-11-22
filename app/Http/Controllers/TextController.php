<?php

namespace App\Http\Controllers;

use App\Models\Text;
use Illuminate\Http\Request;

class TextController extends Controller
{
    public function index()
    {
        $text = Text::latest()->paginate(5);
        $texts= Text::first();
        return view('text.index', compact('text', 'texts'));
    }

    public function store()
    {

        $this->validate(\request(),
            [
                'name' => 'required',

            ]);

        Text::create([
            'name' => \request('name'),
        ]);

        return redirect()->back()->with('success', 'Question  Added Successfully');
    }

    public function edit($id)
    {
        $text = Text::latest()->paginate(5);
        $texts = Text::find($id);
        return view('text.edit', compact('text', 'texts'));
    }

    public function update(Request $request, $id)
    {

        $text = Text::find($id);
        $text->name = $request->input('name');
        $text->update();
        return redirect()->route('text.index')->with('success', 'Text Added Successfully');

    }

    public function delete(Request $request, $id)
    {

        $text = Text::find($id);
        $text->name = $request->input('name');
        $text->delete();
        return redirect()->route('text.index')->with('sucess', 'Question Deleted Successfully');
    }
}
