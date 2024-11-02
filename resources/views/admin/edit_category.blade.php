@extends('admin.layouts.app')

@section('title', 'Edit Category')

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
                        <h1>Edit Category</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Edit Category</li>
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
                            <form action="{{route('admin.edit_category',$category->id)}}" method="post" role="form">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category Name</label>
                                        <input type="text" class="form-control" name="name" id="name" value="{{$category->name}}" required />
                                    </div>

                                    {{--<div class="form-group">
                                        <label>Parent Category</label>
                                        <select class="form-control select2" style="width: 40%;">
                                            <option selected="selected">Super Kernel Basmati Rice</option>
                                            <option>Super Kernel Basmati Sella Rice</option>
                                            <option>Kainat Rice 1121</option>
                                            <option>Sella</option>
                                            <option>Brown Rice</option>
                                            <option>Non Basmati 386</option>
                                            <option>Tota Rice</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Category URL</label>
                                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="URL">
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputFile">Product Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                                <label class="custom-file-label" for="exampleInputFile">Choose Image</label>
                                            </div>
                                            <div class="input-group-append">
                                                <span class="input-group-text" id="">Upload</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Status</label>
                                        <select class="form-control select2" style="width: 40%;">
                                            <option selected="selected">active</option>
                                            <option>Inactive</option>
                                        </select>
                                    </div>

                                    <div class="form-group">
                                        <label>isFeatured</label>
                                        <select class="form-control select2" style="width: 40%;">
                                            <option selected="selected">Yes</option>
                                            <option>No</option>
                                        </select>
                                    </div>

                                    <div class="form-group" style="width: 40%;">
                                        <label for="exampleInputPassword1">High Street Price</label>
                                        <input type="text" class="form-control" id="exampleCheck1" placeholder=" e.g 9.99">
                                    </div>

                                    <div class="form-group"style="width: 40%;">
                                        <label for="exampleInputPassword1">Product Price</label>
                                        <input type="text" class="form-control" id="exampleCheck1" placeholder=" e.g 9.99">
                                    </div>--}}

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Meta Title</label>
                                        <input type="text" class="form-control" name="meta_title" id="meta_title" value="{{$category->meta_title}}" />
                                    </div>

                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Meta Description</label>
                                        <textarea class="form-control" rows="5" name="meta_description" id="meta_description" />{{$category->meta_description}}</textarea>
                                    </div>

                                    {{--<div class="form-group">
                                        <label for="exampleInputPassword1">Meta Keywords</label>
                                        <input type="text" class="form-control" id="exampleCheck1" placeholder="text">
                                    </div>

                                    <div class="form-check">
                                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                        <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                    </div>--}}

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
