@extends('admin.layouts.app')

@section('title', 'View Order')

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
                        <h1>Orders</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Orders</li>
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

                                <div id="success_message" class="alert alert-success alert-dismissible" style="display: none;">
                                    <h5><i class="icon fas fa-check"></i> Alert!</h5>
                                    <div id="message"></div>
                                </div>

                                @if($orders->count() > 0)
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="10%">Sr No.</th>
                                                <th width="20%">Order Date</th>
                                                <th width="15%">Invoice No.</th>
                                                <th width="15%">User Name</th>
                                                <th>Marchant</th>
                                                <th width="15%">Total Amount</th>
                                                <th width="10%">Status</th>
                                                {{--<th width="8%">Action</th>--}}
                                            </tr>
                                        </thead>

                                        <tbody>

                                            @foreach($orders as $key=>$order)
                                                @php
                                                if($order->merchant_id==1) {
                                                    $merchant = "Cash on delivery";
                                                } elseif($order->merchant_id==2) {
                                                    $merchant = "JazzCash Payment";
                                                } elseif($order->merchant_id==3) {
                                                    $merchant = "Bank Account";
                                                }

                                                $user = \App\User::where('status',1)->where('id',$order->user_id)->first();
                                                $user_name = $user->first_name.' '.$user->last_name;
                                                @endphp

                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{date('M d, Y h:i a', strtotime($order->updated_at))}}</td>
                                                    <td><a href="{{route('admin.order_detail',$order->id)}}">{{$order->invoice_no}}</a></td>
                                                    <td>{{$user_name}}</td>
                                                    <td>{{$merchant}}</td>
                                                    <td>{{$order->total_amount}}</td>
                                                    <td>
                                                        <select name="status" id="status" data-id="{{$order->id}}" class="order-status">
                                                            <option value="1" @if($order->status==1) selected @endif>Pending</option>
                                                            <option value="2" @if($order->status==2) selected @endif>Shipped</option>
                                                            <option value="3" @if($order->status==3) selected @endif>Completed</option>
                                                            <option value="4" @if($order->status==4) selected @endif>Cancelled</option>
                                                        </select>
                                                    </td>
                                                    {{--<td><a href="{{route('admin.edit_order',$order->id)}}"><i class="fas fa-edit"></i></a></td>--}}
                                                </tr>
                                            @endforeach

                                        </tbody>

                                    </table>
                                @else
                                    <h4 class="text-center text-danger">Order not found!</h4>
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

            $('.order-status').change(function() {
                var statusval = $(this).val();
                var orderid = $(this).data('id');
                $.ajax({
                    type: "POST",
                    url: '{{ route("change_status") }}',
                    dataType: 'json',
                    data: {'id':orderid, 'status': statusval},
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function(data){
                        //console.log(data.success)
                        document.getElementById('success_message').style.display = "block";
                        document.getElementById('message').innerHTML = data.success;
                    }
                });
            });
        });
    </script>
@endsection
