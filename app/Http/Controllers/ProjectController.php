<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Project;
use App\Models\Question;
use App\Models\OtherProject;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    public function project()
    {    $project=Project::all();
         $info=Company::all();
         $projects=OtherProject::all();
         $questions=Question::all();
        return view('frontend.projects.index',compact('project','info','projects','questions'));
    }

    public function game()
    {
       $info=Company::all();
        return view('frontend.projects.game_development',compact('info'));
    }

    public function hotel()
    {
      $projectdetails=Project::first();
       $info=Company::all()->take(1);
        return view('frontend.projects.hotel_managment',compact('info','projectdetails'));
    }
    public function hoteldetails($id)
    {
      $projectdetails=Project::find($id);
       $info=Company::all()->take(1);
        return view('frontend.projects.hotel_managment',compact('info','projectdetails'));
    }

    public function hospital()
    {
        $info=Company::all()->take(1);
        $projectdetails=Project::all();
        return view('frontend.projects.hospital_managment',compact('projectdetails','info'));
    }

    public function hospitaldetails($id)
    {
        $info=Company::all()->take(1);
        $projectdetails=Project::find($id);
        return view('frontend.projects.hospital_managment',compact('projectdetails','info'));
    }

    public function account()
    {   $info=Company::all();
        return view('frontend.projects.account_managment',compact('info'));
    }

    public function accountdetails($id)
    {   $info=Company::all();
        $projectdetails=Project::find($id);
        return view('frontend.projects.account_managment',compact('info','projectdetails'));
    }

    public function production($id)
    {
        $info=Company::all();
        $projectdetails=Project::find();
        return view('frontend.projects.production_managment',compact('info','projectdetails'));
    }
    // public function production($id)
    // {
    //     $info=Company::all();
    //     $projectdetails=Project::find();
    //     return view('frontend.projects.production_managment',compact('info','projectdetails'));
    // }

    public function restaurant()
    {

        $info=Company::all();
        return view('frontend.projects.restaurant_managment',compact('info'));
    }

    public function domain()
    {

        $info=Company::all();
        return view('frontend.projects.domain_registration',compact('info'));
    }

    public function index()
    {
        $info=Company::first();
        $project = Project::latest()->paginate(1);
        $projects = Project::first();
        return view('project.index', compact('project','projects','info'));
    }

    public function store()
    {

        $this->validate(\request(),
            [
                'name' => 'required',
                'description' => 'required',
                'icon' => 'required',
                'short_details' => 'required',
                'details' => 'required',
                'image' => 'required',

            ]);

        $courseImage = '';
        try {
            $projectExtension = \request()->file('image')->extension();
            $projectImage = "course" . uniqid() . "_" . time() . '.' . $projectExtension;

            \request()->file('image')->move('images', $projectImage);
            // dd($employeeImage);
        } catch (\Exception $e) {
            dd($e->getMessage());
        }

        Project::create([
            'name' => \request('name'),
            'description' => \request('description'),
            'details' => \request('details'),
            'short_details' => \request('short_details'),
            'icon' => \request('icon'),
            'image' => $projectImage,
        ]);
        return redirect()->back();

    }

    public function edit($id)
    {
        $project = Project::latest()->paginate(5);
        $projects = Project::find($id);
        return view('project.edit', compact('project', 'projects'));
    }

    public function update(Request $request, $id)
    {

        $project = Project::find($id);
        $project->name = $request->input('name');
        $project->description = $request->input('description');
        $project-> short_details= $request->input('short_details');
        $project->details = $request->input('details');
        $project->icon = $request->input('icon');

        if ($request->hasFile('image')) {
            $destination = 'images/' . $project->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $project->image = $filename;
        }
        $project->update();
        return redirect()->route('project.index')->with('success', 'project Information Added Successfully');

    }

    public function delete(Request $request, $id)
    {

        $project = Project::find($id);
        $project->name = $request->input('name');
        $project->description = $request->input('description');
        $project->details = $request->input('details');
        $project->short_details = $request->input('short_details');
        $project->icon = $request->input('icon');
        $file = 'images/' . $project->filename;

        $project->delete();
// if(Storage::delete($data->filename)) {
//     $data->delete();
//  }
        return redirect()->route('project.index')->with('success', 'project Information Deleted Successfully');
    }

}
