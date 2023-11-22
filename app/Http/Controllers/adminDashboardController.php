<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class adminDashboardController extends Controller
{
    public function formElements()
    {

        return view('admin.adminFromElements');
    }

    public function index()
    {
        $companies = Company::first();
        return view('admin.companyInformation', compact('companies'));
    }

    public function update(Request $request)
    {
        $this->validate(\request(),
            [
                'name' => 'required',
                'email' => 'required',
                'address1' => 'required',
                // 'address2' => 'required',
                // 'address3' => 'required',
                // 'address4' => 'required',
                'phone' => 'required',
                'facebook' => 'required',
                'instragram' => 'required',
                'linkdln' => 'required',
                'twitter' => 'required',
                'slogun' => 'required',
                'about' => 'required',
                'note' => 'required',
                // 'image' => 'required',
                // 'logo' => 'required',
                // 'icon' => 'required',
            ]);

        $companies = Company::first();
        $companies->name = $request->input('name');
        $companies->email = $request->input('email');
        // $companies->address1 = $request->input('address1');
        // $companies->address2 = $request->input('address2');
        // $companies->address3 = $request->input('address3');
        // $companies->address4 = $request->input('address4');
        $companies->phone = $request->input('phone');
        $companies->facebook = $request->input('facebook');
        $companies->instragram = $request->input('instragram');
        $companies->linkdln = $request->input('linkdln');
        $companies->twitter = $request->input('twitter');
        $companies->slogun = $request->input('slogun');
        $companies->about = $request->input('about');
        $companies->note = $request->input('note');

        if ($request->hasFile('image')) {
            $destination = 'images/' . $companies->image;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/', $filename);
            $companies->image = $filename;
        }
        if ($request->hasFile('logo')) {
            $destination = 'logo/' . $companies->logo;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('logo');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('logo/', $filename);
            $companies->logo = $filename;
        }

        if ($request->hasFile('icon')) {
            $destination = 'images/icon/' . $companies->icon;
            if (File::exists($destination)) {
                File::delete($destination);
            }
            $file = $request->file('icon');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;
            $file->move('images/icon/', $filename);
            $companies->icon = $filename;
        }

        $companies->update();
        return redirect()->back()->with('success', 'Company Information Added');

    }

}
