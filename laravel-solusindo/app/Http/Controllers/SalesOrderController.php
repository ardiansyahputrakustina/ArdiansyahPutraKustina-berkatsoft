<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{SalesOrder,Product,Detail_SalesOrder};

class SalesOrderController extends Controller
{
    public function salesOrder()
    {
    	$detail = Detail_SalesOrder::where('salesoder_id','0')->get();
    	$sales = auth()->user()->customer->sales;
    	return view('sales.sales',compact('sales','detail'));
    }

    public function salesOrderCreate()
    {
    	$product = Product::all();
    	return view('sales.create',compact('product'));
    }

    public function salesOrderCreatePost(Request $request)
    {
    	$detail = new Detail_SalesOrder;
    	$detail->product_id = $request->product_id;	
    	$detail->jumlah = 1;	
    	$detail->salesoder_id = 0;	
    	$detail->save();	
    	return redirect('/sales/order')->with('sukses','Success Order');
    }

    public function salesOrderConfirm(Request $request)
    {
    	$jumlah = 0;
    	$total = 0;
    	$detail = Detail_SalesOrder::where('salesoder_id', '0');
    	$details = $detail->get();
    	foreach ($details as $d) {
    		$jumlah += $d->jumlah;
    		$total += $d->product->harga;
    	}

    	$sales = new SalesOrder;
    	$sales->customer_id = auth()->user()->customer->id;
    	$sales->jumlah_barang = $jumlah;
    	$sales->total = $total;
		$sales->save();

		$detail->update(['salesoder_id' => $sales->id]);

		return redirect('/sales/order')->with('sukses','Success'); 
    }

    public function salesOrderDetailDelete($id)
    {
    	$detail = Detail_SalesOrder::find($id);
    	$detail->delete();
    	return redirect()->back()->with('sukses','Success Delete');
    }
}
