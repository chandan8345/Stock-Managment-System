@extends('master')

@section('title')
Dues Payment
@endsection

@section('appname')
STOCK INVENTORY SYSTEM
@endsection

@section('companyName')
ASA ENTERPRISE
@endsection

@section('path1')
Supplier
@endsection

@section('path2')
Dues Payment
@endsection

@section('mainsection')
<!-- Basic Validation -->
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>SUPPLIER PAYMENT</h2>
                        </div>
                        <div class="body">
                        <form enctype="multipart/form-data" method="post" action="/addproduct">
                        <input type ="hidden" id="token" name="_token" value ="<?php echo csrf_token(); ?>">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" required>
                                        <label class="form-label">Name of Customer</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" required>
                                        <label class="form-label">Customer ID</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" class="form-control" name="name" required>
                                            <label class="form-label">Paid Amount</label>
                                        </div>
                                </div>
                                <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" class="form-control" name="name" required>
                                            <label class="form-label">Last Dues</label>
                                        </div>
                                </div>
                                <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" class="form-control" name="name" required>
                                            <label class="form-label">Balance</label>
                                        </div>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" id="checkbox" name="checkbox">
                                    <label for="checkbox">I have read and accept the terms</label>
                                </div>
                                <button class="btn btn-primary waves-effect" type="submit">SUBMIT</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
@endsection