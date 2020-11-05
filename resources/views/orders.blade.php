@extends('layouts.master')
@section('content')
<div class="container">
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Orders</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div class="box">
                <div class="box-body table-responsive no-padding">
                    <table class="table table-hover">
                        <tbody>
                            <tr>
                                <th>Building Name</th>
                                <th>Order Number</th>
                                <th>Order Status</th>
                                <th>Order Date</th>
                                <th>Customer Note</th>
                                <th>First Name Billing</th>
                                <th>Last Name Billing</th>
                                <th>Company Billing</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
            <!-- /.box -->
        </div>
    </div>
</section>
@endsection
@section('scripts')
@endsection