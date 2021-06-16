<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{Customer,User};

class CustomerController extends Controller
{
    public function customer()
    {
    	$customer = Customer::all();
    	return view('customer.customer',compact('customer'));
    }

    public function customerEdit($id)
    {
    	$customer = Customer::find($id);
    	return view('customer.edit',compact('customer'));
    }

    public function customerEditPost(Request $request,$id)
    {
    	$customer = Customer::find($id);
    	$customer->update($request->all());
        $user = User::find($customer->user_id);
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();
    	return redirect('/customer')->with('sukses','Success Edit');
    }

    public function customerDelete($id)
    {
        $customer = Customer::find($id);
        $user = $customer->user->delete();
        $customer->delete();
        return redirect()->back()->with('sukses','Success Delete');
    }
}
