@extends('admin.layouts.app')

@section('title', 'View Products')

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
                        <h1>Products</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Products</li>
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

                            @if(Session::has('success'))
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-check"></i> Alert!</h5>
                                    {{ Session::get('success') }}
                                </div>
                            @endif

                            <!-- /.card-header -->
                            <div class="card-body">
                                @if($products->count() > 0)
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="10%">Sr No.</th>
                                                <th width="15%">Name</th>
                                                <th width="15%">Product Code</th>
                                                <th width="15%">Category</th>
                                                <th width="8%">Price</th>
                                                <th width="8%">Weight</th>
                                                <th>Meta Title</th>
                                                <th width="8%">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            @foreach($products as $key=>$product)
                                                @php
                                                    $category_name = \App\Category::where('id',$product->category_id)->pluck('name')->first();
                                                @endphp

                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$product->name}}</td>
                                                    <td>{{$product->product_code}}</td>
                                                    <td>{{$category_name}}</td>
                                                    <td>{{$product->price}}</td>
                                                    <td>{{$product->weight}}</td>
                                                    <td>{{$product->meta_title}}</td>
                                                    <td><a href="{{route('admin.edit_product',$product->id)}}"><i class="fas fa-edit"></i></a> | <a href="{{route('admin.delete_product',$product->id)}}" onclick="return confirm('Are you sure you want to delete it?')"><i class="text-danger fas fa-trash"></i></a></td>
                                                </tr>
                                            @endforeach

                                        </tbody>

                                    </table>
                                @else
                                    <h4 class="text-center text-danger">Product not found!</h4>
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
