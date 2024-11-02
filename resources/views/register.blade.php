@extends('layouts.app2')

@section('title', 'Gondal Rice: Register')

@section('assets')

@endsection

@section('content')

    <!-- Title page -->
    <section class="how-overlay2 bg-img1" style="background-image: url('{{asset('assets/images/bg-07.jpg')}}');">
        <div class="container">
            <div class="txt-center p-t-160 p-b-165">
                <h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
                    My Account
                </h2>

                <span class="txt-m-201 cl0 flex-c-m flex-w">
					<a href="{{url('/')}}" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
						Home
					</a>

					<span>
						/ Register
					</span>
				</span>
            </div>
        </div>
    </section>

    <!-- content page -->
    <div class="bg0 p-t-95 p-b-50">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-8 p-b-50">
                    <div class="p-l-15 p-rl-0-lg">
                        <h4 class="txt-m-124 cl3 p-b-28">
                            Register
                        </h4>

                        @if(Session::has('error'))
                            <div class="alert alert-danger">
                                {{ Session::get('error') }}
                            </div>
                        @endif

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{route('register')}}" class="how-bor3 p-rl-30 p-t-32 p-b-66" method="post">
                            @csrf
                            <div class="p-b-24">
                                <div class="txt-s-101 cl6 p-b-10">
                                    First Name <span class="cl12">*</span>
                                </div>

                                <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1" type="text" name="first_name" required>
                            </div>
                            <div class="p-b-24">
                                <div class="txt-s-101 cl6 p-b-10">
                                    Last Name <span class="cl12"></span>
                                </div>

                                <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1" type="text" name="last_name">
                            </div>

                            <div class="p-b-24">
                                <div class="txt-s-101 cl6 p-b-10">
                                    Email Address <span class="cl12">*</span>
                                </div>

                                <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1" type="email" name="email" required>
                            </div>

                            <div class="p-b-24">
                                <div class="txt-s-101 cl6 p-b-10">
                                    Password <span class="cl12">*</span>
                                </div>

                                <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1" type="password" name="password" required>
                            </div>

                            <div class="p-b-24">
                                <div class="txt-s-101 cl6 p-b-10">
                                    Confirm Password <span class="cl12">*</span>
                                </div>

                                <input class="txt-s-120 cl3 size-a-21 bo-all-1 bocl15 p-rl-15 focus1" type="password" name="cpassword" required>
                            </div>

                            <div class="flex-w flex-m p-t-15">
                                <button type="submit" class="flex-c-m txt-s-105 cl0 bg10 size-a-39 hov-btn2 trans-04 p-rl-10 m-r-18">
                                    Register
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')

@endsection
