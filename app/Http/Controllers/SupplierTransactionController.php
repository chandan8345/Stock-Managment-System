<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierTransactionController extends Controller
{
    public function index(){
        return view('transaction.supplier');
    }
    public function manageTransaction(){
        return view('transaction.manageSupplier');
    }
}
