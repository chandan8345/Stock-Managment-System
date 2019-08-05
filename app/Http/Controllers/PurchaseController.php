<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function purchase(){
        return view('purchase.purchase');
    }

    public function managePurchase(){
        return view('purchase.managePurchase');
    }
}
