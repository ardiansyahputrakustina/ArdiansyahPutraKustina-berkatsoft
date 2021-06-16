<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{User};

class UserController extends Controller
{
    public function user()
    {
    	$user = User::where('role','Admin')->get();
    	return view('user.user',compact('user'));
    }

    public function userCreate()
    {
    	return view('user.create');
    }

    public function userCreatePost(Request $request)
    {
    	$user = new User;
    	$user->nama = $request->nama;
    	$user->role = 'Admin';
    	$user->email = $request->email;
    	$user->password = bcrypt($request->password);
    	$user->save();
    	return redirect('/user')->with('sukses','Success Create');
    }

    public function userEdit($id)
    {
    	$user = User::find($id);
    	return view('user.edit',compact('user'));
    }

    public function userEditPost(Request $request,$id)
    {
    	$user = User::find($id);
    	$user->update($request->all());
    	if($request->hasFile('foto'))
    	{
    		$request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
    		$user->foto = $request->file('foto')->getClientOriginalName();
    		$user->save();
    	}
    	return redirect('/user')->with('sukses','Success Edit');
    }

    public function userDelete($id)
    {
    	$user = User::find($id);
    	$user->delete();
    	return redirect()->back()->with('sukses','Success Delete');
    }
}
