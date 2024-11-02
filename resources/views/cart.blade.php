@extends('layouts.app2')

@section('title', 'Gondal Rice: Cart')

@section('assets')

@endsection

@section('content')

    <!-- Title page -->
    {{--<section class="how-overlay2 bg-img1" style="background-image: url('{{asset('assets/images/bg-07.jpg')}}');">
        <div class="container">
            <div class="txt-center p-t-160 p-b-165">
                <h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
                    Cart
                </h2>

                <span class="txt-m-201 cl0 flex-c-m flex-w">
					<a href="{{url('/')}}" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
						Home
					</a>

					<span>
						/ Cart
					</span>
				</span>
            </div>
        </div>
    </section>--}}

    <!-- content page -->
    <div class="bg0 p-tb-100">
        <div class="container">

            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif

            {{--@if(Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
            @endif--}}

            @if($carts->count() > 0 )
                <form action="{{route('update_cart')}}" method="post">
                    @csrf
                    <div class="wrap-table-shopping-cart">
                        <table class="table-shopping-cart">
                            <tr class="table_head bg12">
                                <th class="column-1 p-l-30">Product</th>
                                <th class="column-2">Price</th>
                                <th class="column-3">Quantity</th>
                                <th class="column-4">Total</th>

                            </tr>

                            @php
                                $total = 0;
                            @endphp

                            @foreach($carts as $cart)
                                @php
                                    $product = \App\Product::where('id',$cart->product_id)->first();
                                    $total = $total + ($product->price * $cart->quantity);
                                @endphp
                                <input type="hidden" name="cart_id[]" id="cart_id[]" value="{{$cart->id}}" />
                                <tr class="table_row">
                                    <td class="column-1">
                                        <div class="flex-w flex-m">
                                            <div class="wrap-pic-w size-w-50 bo-all-1 bocl12 m-r-30">
                                                <img src="{{asset('assets/images/products/'.$product->image)}}" alt="IMG">
                                            </div>

                                            <span>
                                                {{$product->name}}
                                            </span>
                                        </div>
                                    </td>
                                    <td class="column-2">
                                        {{session('currency')}} {{$product->price}}
                                    </td>
                                    <td class="column-3">
                                        <div class="wrap-num-product flex-w flex-m bg12 p-rl-10">
                                            <div class="btn-num-product-down flex-c-m fs-29"></div>

                                            <input class="txt-m-102 cl6 txt-center num-product" type="number" name="quantity[]" id="quantity[]" value="{{$cart->quantity}}">

                                            <div class="btn-num-product-up flex-c-m fs-16"></div>
                                        </div>
                                    </td>
                                    <td class="column-4">
                                        <div class="flex-w flex-sb-m">
                                            <span>
                                                {{session('currency')}} {{$product->price * $cart->quantity}}
                                            </span>

                                            <div class="fs-15 hov-cl10 pointer">
                                                <a href="{{ url('delete-cart/'.$cart->id) }}" onclick="return confirm('Are you sure, you want to delete record?')"><span class="lnr lnr-cross"></span></a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach

                            {{--<tr class="table_row">
                                <td class="column-1">
                                    <div class="flex-w flex-m">
                                        <div class="wrap-pic-w size-w-50 bo-all-1 bocl12 m-r-30">
                                            <img src="images/best-sell-02.jpg" alt="IMG">
                                        </div>

                                        <span>
                                            Asparagus
                                        </span>
                                    </div>
                                </td>
                                <td class="column-2">
                                    $ 12.00
                                </td>
                                <td class="column-3">
                                    <div class="wrap-num-product flex-w flex-m bg12 p-rl-10">
                                        <div class="btn-num-product-down flex-c-m fs-29"></div>

                                        <input class="txt-m-102 cl6 txt-center num-product" type="number" name="num-product2" value="1">

                                        <div class="btn-num-product-up flex-c-m fs-16"></div>
                                    </div>
                                </td>
                                <td class="column-4">
                                    <div class="flex-w flex-sb-m">
                                        <span>
                                            12$
                                        </span>

                                        <div class="fs-15 hov-cl10 pointer">
                                            <span class="lnr lnr-cross"></span>
                                        </div>
                                    </div>
                                </td>
                            </tr>--}}
                        </table>
                    </div>

                    <div class="flex-w flex-sb-m p-t-20">
                        <div class="flex-w flex-m m-r-50 m-tb-10">
                            <a href="{{url('/')}}" class="flex-c-m txt-s-105 cl0 bg10 size-a-33 hov-btn2 trans-04 pointer p-rl-10 m-tb-10">
                                Continue Shopping
                            </a>
                            {{--<input class="size-a-31 bo-all-1 bocl15 txt-s-123 cl6 plh1 p-rl-20 focus1 m-r-30 m-tb-10" type="text" name="coupon" placeholder="Coupon Code">

                            <div class="flex-c-m txt-s-105 cl0 bg10 size-a-32 hov-btn2 trans-04 pointer p-rl-10 m-tb-10">
                                apply coupon
                            </div>--}}
                        </div>

                        <button type="submit" class="flex-c-m txt-s-105 cl0 bg10 size-a-33 hov-btn2 trans-04 pointer p-rl-10 m-tb-10">
                            update CART
                        </button>
                    </div>
                </form>

                <div class="flex-col-l p-t-68">
                        <span class="txt-m-123 cl3 p-b-18">
                            CART TOTALS
                        </span>

                        <div class="flex-w flex-m bo-b-1 bocl15 w-full p-tb-18">
                            <span class="size-w-58 txt-m-109 cl3">
                                Subtotal
                            </span>

                            <span class="size-w-59 txt-m-104 cl6">
                                {{session('currency')}} {{$total}}
                            </span>
                        </div>

                        <div class="flex-w flex-m bo-b-1 bocl15 w-full p-tb-18">
                            <span class="size-w-58 txt-m-109 cl3">
                                Total
                            </span>

                            <span class="size-w-59 txt-m-104 cl10">
                                {{session('currency')}} {{$total}}
                            </span>
                        </div>

                        <a href="{{route('checkout')}}" class="flex-c-m txt-s-105 cl0 bg10 size-a-34 hov-btn2 trans-04 p-rl-10 m-t-43">
                            Proceed to Checkout
                        </a>
                    </div>
            @else
                <div class="wrap-table-shopping-cart">
                    <h2 class="text-danger text-center">Record not found!</h2>
                </div>
            @endif

        </div>
    </div>

@endsection

@section('scripts')

@endsection
