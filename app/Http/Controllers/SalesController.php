<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function sales(){
        return view('sales.sales');
    }

    public function manageSales(){
        return view('sales.manageSales');
    }
}
