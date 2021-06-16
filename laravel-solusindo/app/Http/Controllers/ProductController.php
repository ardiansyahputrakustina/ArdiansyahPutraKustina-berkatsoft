<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\{Product};

class ProductController extends Controller
{
    public function product()
    {
        $product = Product::all();
        return view('product.product',compact('product'));
    }

    public function productCreate()
    {
    	return view('product.create');
    }

    public function productCreatePost(Request $request){
        $product = Product::create($request->all());
        if($request->hasFile('foto'))
        {
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $product->foto = $request->file('foto')->getClientOriginalName();
            $product->save();
        }
        return redirect('/product')->with('sukses','Success Create');
    }

    public function productEdit($id)
    {
        $product = Product::find($id);
        return view('product.edit',compact('product'));
    }
    public function productEditPost(Request $request,$id)
    {
        $product = Product::find($id);
        $product->update($request->all());
        if($request->hasFile('foto'))
        {
            $request->file('foto')->move('images/',$request->file('foto')->getClientOriginalName());
            $product->foto = $request->file('foto')->getClientOriginalName();
            $product->save();
        }
        return redirect('/product')->with('sukses','Success Edit');
    }

    public function productDelete($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->back()->with('sukses','Success Delete');
    }
}
