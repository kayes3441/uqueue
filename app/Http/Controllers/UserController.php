<?php

namespace App\Http\Controllers;

use App\Models\GeneralUser;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function add()
    {
        return view('admin.user.create-user');
    }

    public function create(Request $request)
    {
        $user                   =new GeneralUser();
        $user->name             =$request->name;
        $user->email            =$request->email;
        $user->mobile           =$request->mobile;
        $user->password         =bcrypt($request->password);
        $user->key              =$request->password;
        $user->save();
        return redirect()->back()->with('message','General User Create Successfully');
    }

    public function manage()
    {
        return view('admin.user.user',
            [
                'users'=>GeneralUser::all()
            ]);
    }
    public function edit($id)
    {

        return view('admin.user.edit',
        [
            'user'=>GeneralUser::find($id)
        ]);
    }
    public function update(Request $request,$id)
    {
        $user_update                =GeneralUser::find($id);
        $user_update->name          =$request->name;
        $user_update->email         =$request->email;
        $user_update->mobile        =$request->mobile;
        $user_update->password      =bcrypt($request->password);
        $user_update->key           =$request->password;
        $user_update->save();
        return redirect('/user')->with('message','General User Create Successfully');
    }

    public function delete($id)
    {
        GeneralUser::find($id)->delete();
        return redirect('/user')->with('message','General User Delete Successfully');
    }
}
