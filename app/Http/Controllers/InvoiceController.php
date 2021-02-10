<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Invoice;

class InvoiceController extends Controller
{
    public function addInvoice(Request $request){
    	$invoices=new Invoice();
    	$invoices->tax_type=$request->input('tax_type');
    	$invoices->coupon=$request->input('coupon');
    	$invoices->transactionCode=$request->input('transactionCode');
    	$invoices->save();
    	return response()->json($invoices);
    }
}
