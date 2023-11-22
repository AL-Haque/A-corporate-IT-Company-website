<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $question = Question::latest()->paginate(5);
        $questions= Question::first();
        return view('Question.index', compact('question', 'questions'));
    }

    public function store()
    {

        $this->validate(\request(),
            [
                'name' => 'required',
                'details' => 'required',

            ]);

        Question::create([
            'name' => \request('name'),
            'details' => \request('details'),
        ]);

        return redirect()->back()->with('success', 'Question  Added Successfully');
    }

    public function edit($id)
    {
        $question = Question::latest()->paginate(5);
        $questions = Question::find($id);
        return view('Question.edit', compact('questions', 'question'));
    }

    public function update(Request $request, $id)
    {

        $question = Question::find($id);
        $question->name = $request->input('name');
        $question->details = $request->input('details');
        $question->update();
        return redirect()->route('question.index')->with('success', 'Question Added Successfully');

    }

    public function delete(Request $request, $id)
    {

        $question = Question::find($id);
        $question->name = $request->input('name');
        $question->details = $request->input('details');
        $question->delete();
        return redirect()->route('question.index')->with('success', 'Question Deleted Successfully');
    }
}
