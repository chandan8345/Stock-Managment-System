<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerTransactionController extends Controller
{
    public function index(){
        return view('transaction.customer');
    }
    public function manageTransaction(){
        return view('transaction.manageCustomer');
    }
}
