@extends('master')

@section('title')
Product
@endsection

@section('appname')
STOCK INVENTORY SYSTEM
@endsection

@section('companyName')
ASA ENTERPRISE
@endsection

@section('mainsection')
<section class="content">
        <div class="container-fluid">
                <div class="block-header">
                        <div class="alert alert-warning alert-dismissible" role="alert" hidden>
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                Lorem ipsum dolor sit amet, id fugit tollit pro, illud nostrud aliquando ad est, quo esse dolorum id
                            </div>
                    </div>
<!-- Basic Validation -->
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>PRODUCT SETUP</h2>
                        </div>
                        <div class="body">
                        <form enctype="multipart/form-data" method="post" action="/addproduct">
                        <input type ="hidden" id="token" name="_token" value ="<?php echo csrf_token(); ?>">
                                <div class="form-group form-float">
                                    <div class="form-line">
                                        <input type="text" class="form-control" name="name" required>
                                        <label class="form-label">Name of Product</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <select class="form-control show-tick" required>
                                        <option value="">-- Select Category --</option>
                                        <option value="10">Owner</option>
                                        <option value="20">Admin</option>
                                        <option value="30">Staff</option>
                                        <option value="40">Customer</option>
                                        <option value="50">Supplier</option>
                                   </select>
                                        <label class="form-label">Category</label>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <select class="form-control show-tick" required>
                                        <option value="">-- Select Brand --</option>
                                        <option value="10">Owner</option>
                                        <option value="20">Admin</option>
                                        <option value="30">Staff</option>
                                        <option value="40">Customer</option>
                                        <option value="50">Supplier</option>
                                   </select>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                    <div class="form-line">
                                    <select class="form-control show-tick" required>
                                        <option value="">-- Select Unit --</option>
                                        <option value="10">Pcs</option>
                                        <option value="20">Box</option>
                                        <option value="30">Packet</option>
                                        <option value="40">Dozzen</option>
                                   </select>
                                    </div>
                                </div>
                                <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" class="form-control" name="name" required>
                                            <label class="form-label">Purchase Rate</label>
                                        </div>
                                </div>
                                <div class="form-group form-float">
                                        <div class="form-line">
                                            <input type="number" class="form-control" name="name" required>
                                            <label class="form-label">Sales Rate</label>
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
</div>
<section>
@endsection