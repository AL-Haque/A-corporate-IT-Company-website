<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Client;
use App\Models\Company;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Support\Str;
use App\Models\OtherProject;
use Illuminate\Http\Request;
use App\Models\ProductFeature;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class adminController extends Controller
{
    public function login()
    {   $info=Company::all();
        if (Auth::check()) {
            return redirect()->back();
        } else
        // return view('login');
        {
            return view('admin.login',compact('info'));
        }

    }

    public function authCheck(Request $request)
    {

        $request->validate([
            'username' => 'required',
            'password' => 'required',

        ]);

        $credential = $request->only('username', 'password');

        if (Auth::attempt($credential)) {
            return redirect()->route('dashboard')->with('success', 'Login Sucessfull');
        } else {
            return redirect()->back();
        }

    }

    public function logout()
    {

        Auth::logout();
        return redirect()->route('login');
    }

    public function dashboard()
    {

        $data['user'] = count(User::all());
        $data['client'] = count(Client::all());
        $data['project'] = count(Project::all());
        $data['product'] = count(ProductFeature::all());
        $data['service'] = count(Service::all());
        $data['otherproject'] = count(OtherProject::all());

        return view('admin.dashboard', $data);
    }

    public function password()
    {
        return view('admin.PasswordReset.ForgotPassword');
    }

    public function ForgotPassword(Request $request)
    {

        $request->validate([
            'email' => "required|email|exists:users",
        ]);

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now(),
        ]);

        Mail::send("admin.emails.ResetPassword", ['token' => $token], function ($massage) use ($request) {
            $massage->to($request->email);
            $massage->subject("Reset Password");
        });

        return redirect()->to(route('password'))->with("success", "We Have Send a email to Reset Password");
    }

    public function ResetPassword($token)
    {

        return view('admin.PasswordReset.NewPassword', compact('token'));
    }

    public function ResetPass(Request $request)
    {

        $request->validate([
            'email' => "required|email|exists:users",
            'password' => "required",
            'password_confirmation' => 'required',
        ]);

        $updatePassword = DB::table('password_resets')
            ->where([
                'email' => $request->email,
                'token' => $request->token,
            ])->first();

        if (!$updatePassword) {
            return redirect()->to(route('ResetPassword'))->with('error', 'Invalid');
        }
        User::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);
        DB::table('password_resets')->where(['email' => $request->email])->delete();
        return redirect()->to(route('login'))->with('success', 'password reset successfull');
    }
}
