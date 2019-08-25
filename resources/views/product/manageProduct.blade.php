@extends('master')

@section('title')
Manage Product
@endsection

@section('appname')
STOCK INVENTORY SYSTEM
@endsection

@section('companyName')
ASA ENTERPRISE
@endsection

@section('path1')
Product
@endsection

@section('path2')
Stock Review
@endsection

@section('mainsection')
<div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="card">
                                <div class="header">
                                    <h2>
                                        STOCK REVIEW
                                    </h2>
                                </div>
                                <div class="body">
                                    <form>
                                        <div class="row clearfix">
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                <div class="form-group">
                                                        <select class="form-control show-tick" required>
                                                                <option value="">-- Select Category --</option>
                                                                <option value="10">Owner</option>
                                                                <option value="20">Admin</option>
                                                                <option value="30">Staff</option>
                                                                <option value="40">Customer</option>
                                                                <option value="50">Supplier</option>
                                                           </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                    <div class="form-group">
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
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                    <div class="form-group form-float">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="name" required>
                                                            <label class="form-label">Min Rate</label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                    <div class="form-group form-float">
                                                        <div class="form-line">
                                                            <input type="text" class="form-control" name="name" required>
                                                            <label class="form-label">Max Rate</label>
                                                        </div>
                                                    </div>
                                                </div>
                                           <!--  <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
                                                <button type="button" class="btn btn-primary btn-lg m-l-15 waves-effect">SEARCH</button>
                                            </div> -->
                                        </div>
                                    </form>
                                </div>
                            </div>
            </div>
</div>
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
    </div>
</section>
<section>
@endsection
