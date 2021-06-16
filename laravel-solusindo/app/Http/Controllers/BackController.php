<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{User,Customer,Product};

class BackController extends Controller
{
	public function dashboard()
	{
		$product = Product::count(); 
		$user = User::count(); 
		$customer = Customer::count(); 
		return view('dashboard',compact(['product','customer','user']));
	}
}
