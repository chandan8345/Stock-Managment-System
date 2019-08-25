@extends('master')

@section('title')
Manage Collection
@endsection

@section('appname')
STOCK INVENTORY SYSTEM
@endsection

@section('companyName')
ASA ENTERPRISE
@endsection

@section('path1')
Customer
@endsection

@section('path2')
Manage Collection
@endsection

@section('mainsection')
 <!-- Multi Column -->
 <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                                MANAGE COLLECTION
                            </h2>
                        </div>
                        <div class="body">
                            <div class="row clearfix">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Name of Customer">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="text" class="form-control" placeholder="Customer ID">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="Collection Date From">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <div class="form-line">
                                            <input type="number" class="form-control" placeholder="Collection Date To">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <button class="btn btn-primary waves-effect" type="submit">Search</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Multi Column -->
           
     <!-- Bordered Table -->
     <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover dataTable js-exportable">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Brand</th>
                                    <th>Unit</th>
                                    <th>Purchase</th>
                                    <th>Sales</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <!--<tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </tfoot>-->
                            <tbody>
                                <tr>
                                    <td>Donna Snider</td>
                                    <td>Customer Support</td>
                                    <td>New York</td>
                                    <td>27</td>
                                    <td>2011/01/25</td>
                                    <td>$112,000</td>
                                    <td>Active</td>
                                    <td>
                                        <div class="icon-button-demo">
                                            <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">extension</i>
                                            </button>
                                            <button type="button" class="btn btn-default btn-circle waves-effect waves-circle waves-float">
                                                <i class="material-icons">home</i>
                                            </button>
                                            </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #END# Bordered Table -->
@endsection