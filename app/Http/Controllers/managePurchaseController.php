<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;
use Illuminate\Support\Facades\DB;
use Session;


class managePurchaseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Session::has('company_id')){
        $company_id=Session::get('company_id');
        $value=DB::table('company')->where('id',$company_id)->get();
        return view('managePurchase')->with('value',$value);
       }else{
        return redirect('/login');
       }
    }

    public function search(Request $request)
    {
        $memo = $request->memo;
        $from = $request->from;
        $to = $request->to;
        if($memo != "" && $from == "" && $to == ""){
            echo $memo;
        }else if($memo == "" && $from != "" && $to != ""){
            echo 'date';
        }else if($memo != "" && $from != "" && $to != ""){
            echo "all";
        }
        else{
            echo 'not found';
        }
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
