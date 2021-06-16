<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Customer,User};
use Auth;

class AuthController extends Controller
{
    public function loginPost(Request $request)
    {
    	if(Auth::attempt($request->only(['email','password'])))
    	{
    		return redirect('/dashboard');
    	}
    	return redirect('/')->with('Email atau Password salah');
    }

    public function daftarPost(Request $request)
    {
    	$user = new User;
    	$user->role = 'Customer';
    	$user->nama = $request->nama;
    	$user->email = $request->email;
    	$user->password = bcrypt($request->password);
    	$user->save();

    	$request->request->add(['user_id' => $user->id]);
    	$customer = Customer::create($request->only([
    		'nama',
    		'telepon',
            'email',
            'password',
    		'alamat',
    		'user_id',
    	]));
        if($request->hasFile('foto'))
        {
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $user->foto = $request->file('foto')->getClientOriginalName();
            $user->save();
        }
    	return redirect('/daftar')->with('sukses','Success Register');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
