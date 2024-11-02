@extends('admin.layouts.app')

@section('title', 'View Order Detail')

@section('assets')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{asset('assets_admin/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets_admin/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>{{$order->invoice_no}} Detail</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{route('admin.orders')}}">{{$order->invoice_no}}</a></li>
                            <li class="breadcrumb-item active">Order Detail</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">

            <div class="container-fluid">

                <div class="row">
                    <div class="col-12">

                        <div class="card">

                            <!-- /.card-header -->
                            <div class="card-body">

                                <div class="row">
                                    <div class="col">
                                        <div class="form-group text-center">
                                            <h3>{{$user->first_name}} {{$user->last_name}}</h3>
                                            <h6>{{$user->phone}}</h6>
                                            <h6>{{$user->email}}</h6>
                                        </div>
                                    </div>

                                    <div class="col">
                                        <div class="form-group text-center">
                                            <h6>{{--$user->address1--}}house no 367 block L, sabzazar</h6>
                                            <h6>{{--$user->address2--}}scheme mor multan road</h6>
                                            <h6>{{$user->city}}</h6>
                                        </div>
                                    </div>
                                </div>
                                <hr />

                                @if($orderDetails->count() > 0)
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="10%">Sr No.</th>
                                                <th>Product</th>
                                                <th width="15%">Price</th>
                                                <th width="15%">Quantity</th>
                                                <th width="15%">Sub Total</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            @foreach($orderDetails as $key=>$orderDetail)
                                                @php
                                                /*
                                                $status = "Pending";
                                                if($orderDetail->status==1) {
                                                    $status = "Paid";
                                                }*/

                                                $product = \App\Product::where('id',$orderDetail->product_id)->first();


                                                @endphp

                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$product->name}}</td>
                                                    <td>{{$product->price}}</td>
                                                    <td>{{$orderDetail->quantity}}</td>
                                                    <td>{{$product->price * $orderDetail->quantity}}</td>
                                                </tr>
                                            @endforeach

                                        </tbody>

                                    </table>
                                @else
                                    <h4 class="text-center text-danger">Order Detail not found!</h4>
                                @endif
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

@endsection

@section('scripts')
    <!-- DataTables -->
    <script src="{{asset('assets_admin/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('assets_admin/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('assets_admin/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
    <script src="{{asset('assets_admin/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>

    <script>
        $(function () {
            $("#example1").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
            /*$('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });*/
        });
    </script>
@endsection
