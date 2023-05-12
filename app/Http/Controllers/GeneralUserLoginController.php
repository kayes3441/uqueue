<?php

namespace App\Http\Controllers;

use App\Models\GeneralUser;
use Illuminate\Http\Request;
use Session;

class GeneralUserLoginController extends Controller
{
    public function loginPage()
    {
        return view('generalUser.auth.login');
    }
    public function generalLogin(Request $request)
    {
        $user=GeneralUser::where('email',$request->email)->first();
        if($user)
        {
            if(password_verify($request->password,$user->password))
            {
                Session::put('user_id',$user->id);
                Session::put('user_name',$user->name);
                return redirect('/general-dashboard');
            }
            else
            {
                return redirect()->back()->with('message', 'Password is invalid.');
            }
        }
        else
        {
            return redirect()->back()->with('message','Invalid Email Or Password');
        }
    }

    public function generalLogout()
    {
        Session::forget('user_id');
        Session::forget('user_name');
        return redirect('/general-login-page');
    }
}
