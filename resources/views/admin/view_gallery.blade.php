@extends('admin.layouts.app')

@section('title', 'View Gallery')

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
                        <h1>Galleries</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Galleries</li>
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
                                @if($galleries->count() > 0)
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th width="12%">Sr No.</th>
                                                <th>Title</th>
                                                <th>Image</th>
                                                <th width="8%">Action</th>
                                            </tr>
                                        </thead>

                                        <tbody>

                                            @foreach($galleries as $key=>$gallery)
                                                <tr>
                                                    <td>{{$key+1}}</td>
                                                    <td>{{$gallery->name}}</td>
                                                    <td><img src="{{asset('assets/images/galleries/'.$gallery->image)}}" width="50"></td>
                                                    <td><a href="{{route('admin.edit_gallery',$gallery->id)}}"><i class="fas fa-edit"></i></a> | <a href="{{route('admin.delete_gallery',$gallery->id)}}" onclick="return confirm('Are you sure you want to delete it?')"><i class="fas fa-trash text-danger"></i></a></td>
                                                </tr>
                                            @endforeach

                                        </tbody>

                                    </table>
                                @else
                                    <h4 class="text-center text-danger">Gallery not found!</h4>
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