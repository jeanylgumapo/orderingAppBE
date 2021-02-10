<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Orders;

class OrderController extends Controller
{
    //
    public function addOrders(Request $request){
    	$orders=new Orders();
    	$orders->submenu=$request->input('submenu');
    	$orders->quantity=$request->input('quantity');
    	$orders->transactionCode=$request->input('transactionCode');

    	$orders->save();
    	return response()->json($orders);
    }
}
