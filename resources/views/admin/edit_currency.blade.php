@extends('admin.layouts.app')

@section('title', 'Edit Currency')

@section('assets')

@endsection

@section('content')

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit Currency</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Edit Currency</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- general form elements -->
                        <div class="card card-primary">
                            {{--<div class="card-header">
                                <h3 class="card-title">Quick Example</h3>
                            </div>--}}
                            <!-- /.card-header -->
                            @if(Session::has('success'))
                                <div class="alert alert-success alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-check"></i> Alert!</h5>
                                    {{ Session::get('success') }}
                                </div>
                            @endif

                            @if(Session::has('error'))
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                                        {{ Session::get('error') }}
                                    </div>
                            @endif

                            @if ($errors->any())
                                <div class="alert alert-danger alert-dismissible">
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <h5><i class="icon fas fa-ban"></i> Alert!</h5>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- form start -->
                            <form action="{{route('admin.edit_currency',$currency->id)}}" method="post" role="form" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Currency Name</label>
                                        <input type="text" class="form-control" name="name" id="name" value="{{$currency->name}}" required />
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Abbreviation</label>
                                        <input type="text" class="form-control" name="abbreviation" id="abbreviation" value="{{$currency->abbreviation}}" required />
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Symbol</label>
                                        <input type="text" class="form-control" name="symbol" id="symbol" value="{{$currency->symbol}}" required />
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Is Default</label>
                                        <select class="form-control" name="is_default" id="is_default">
                                            <option value="1" @if($currency->is_default==1) selected @endif>Yes</option>
                                            <option value="0" @if($currency->is_default==0) selected @endif>No</option>
                                        </select>
                                    </div>

                                </div>
                                <!-- /.card-body -->

                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->

                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->

                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>

@endsection

@section('scripts')
    <!-- bs-custom-file-input -->
    <script src="{{asset('assets_admin/plugins/bs-custom-file-input/bs-custom-file-input.min.js')}}"></script>
@endsection
