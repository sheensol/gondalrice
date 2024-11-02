@extends('admin.layouts.app')

@section('title', 'Edit Product')

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
                        <h1>Edit Product</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Home</a></li>
                            <li class="breadcrumb-item active">Edit Product</li>
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
                            <form action="{{route('admin.edit_product',$product->id)}}" method="post" role="form" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="name">Product Name</label>
                                                <input type="text" class="form-control" name="name" id="name" value="{{$product->name}}" required />
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group">
                                                <label for="product_code">Product Code</label>
                                                <input type="text" class="form-control" name="product_code" id="product_code" value="{{$product->product_code}}" required />
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Select Category</label>
                                                <select name="category" id="category" class="form-control select2">
                                                    <option value="" selected="selected"></option>
                                                    @foreach($categories as $category)
                                                        <option value="{{$category->id}}" @if($product->category_id==$category->id) selected @endif>{{$category->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group">
                                                <label>Brand</label>
                                                <select name="brand" id="brand" class="form-control select2">
                                                    <option selected="selected"></option>
                                                    <option value="Dasterkhan" @if($product->brand=="Dasterkhan") selected @endif>Dasterkhan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="description">Description</label>
                                        <textarea class="form-control" rows="5" name="description" id="description" required>{{$product->description}}</textarea>
                                    </div>

                                    <div class="form-group">
                                        <label for="image">Product Image</label>
                                        <div class="input-group">
                                            <div class="custom-file">
                                                <input type="file" class="custom-file-input" name="image" id="image">
                                                <label class="custom-file-label" for="image">Choose Image</label>
                                            </div>
                                            <div class="input-group-append">
                                            <img src="{{asset('assets/images/products/'.$product->image)}}" width="50" />
                                          </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label for="hprice">High Street Price</label>
                                                <input type="text" class="form-control" name="hprice" id="hprice" value="{{$product->hprice}}" placeholder=" e.g 9.99">
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group">
                                                <label for="price">Product Price</label>
                                                <input type="text" class="form-control" name="price" id="price" value="{{$product->price}}" placeholder=" e.g 9.99">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Weight</label>
                                                <select name="weight" id="weight" class="form-control select2">
                                                    <option selected="selected"></option>
                                                    <option value="1 kg" @if($product->weight=="1 kg") selected @endif>1 kg</option>
                                                    <option value="3 kg" @if($product->weight=="3 kg") selected @endif>3 kg</option>
                                                    <option value="5 kg" @if($product->weight=="5 kg") selected @endif>5 kg</option>
                                                    <option value="10 kg" @if($product->weight=="10 kg") selected @endif>10 kg</option>
                                                    <option value="25 kg" @if($product->weight=="25 kg") selected @endif>25 kg</option>
                                                    <option value="50 kg" @if($product->weight=="50 kg") selected @endif>50 kg</option>
                                                    <option value="100 kg" @if($product->weight=="100 kg") selected @endif>100 kg</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group">
                                                <label>Quality</label>
                                                <select name="quality" id="quality" class="form-control select2">
                                                    <option selected="selected"></option>
                                                    <option value="Super" @if($product->quality=="Super") selected @endif>Super</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>Rating</label>
                                                <select name="rating" id="rating" class="form-control select2">
                                                    <option selected="selected"></option>
                                                    <option value="1" @if($product->rating=="1") selected @endif>1</option>
                                                    <option value="2" @if($product->rating=="2") selected @endif>2</option>
                                                    <option value="3" @if($product->rating=="3") selected @endif>3</option>
                                                    <option value="4" @if($product->rating=="4") selected @endif>4</option>
                                                    <option value="5" @if($product->rating=="5") selected @endif>5</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group">
                                                <label>is Stock (Available)</label>
                                                <select name="is_stock" id="is_stock" class="form-control select2">
                                                    <option value="Yes" selected>Yes</option>
                                                    <option value="No" @if($product->is_stock=="No") selected @endif>No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <div class="form-group">
                                                <label>is Featured</label>
                                                <select name="is_featured" id="is_featured" class="form-control select2">
                                                    <option value="Yes" @if($product->is_featured=="Yes") selected @endif>Yes</option>
                                                    <option value="No" @if($product->is_featured=="No") selected @endif>No</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="col">
                                            <div class="form-group">
                                                <label>is Deal Day</label>
                                                <select name="is_dealday" id="is_dealday" class="form-control select2">
                                                    <option value="Yes" @if($product->is_dealday=="Yes") selected @endif>Yes</option>
                                                    <option value="No" @if($product->is_dealday=="No") selected @endif>No</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="meta_title">Meta Title</label>
                                        <input type="text" class="form-control" name="meta_title" id="meta_title" value="{{$product->meta_title}}" required />
                                    </div>

                                    <div class="form-group">
                                        <div class="form-group">
                                            <label for="meta_description">Meta Description</label>
                                            <textarea class="form-control" rows="5" name="meta_description" id="meta_description" required>{{$product->meta_description}}</textarea>
                                        </div>
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
