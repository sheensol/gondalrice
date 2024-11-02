@extends('layouts.app2')

@section('title', 'Thanks')

@section('assets')
@endsection

@section('sidebar')
    {{--@include('includes.sidebar')--}}
@endsection

@section('content')

    <!-- Error -->
    <div class="bg12 how-height1 pos-relative how4 flex-col-c-m p-rl-15 p-tb-50">
        <img class="ab-t-l" src="{{asset('assets/images/other-14.jpg')}}" alt="IMG">
        <img class="ab-t-r" src="{{asset('assets/images/other-15.jpg')}}" alt="IMG">
        <img class="ab-b-l" src="{{asset('assets/images/other-17.jpg')}}" alt="IMG">
        <img class="ab-b-r" src="{{asset('assets/images/other-16.jpg')}}" alt="IMG">

        <span class="txt-m-101 c116 txt-center p-b-30 respon1">
			Thank You.
		</span>

        <span class="txt-l-101 cl6 txt-center p-b-30 respon15">
			Your order is confirmed
		</span>

        <span class="txt-m-102-122 cl9 txt-center p-b-50">
            In case of any query, we are a call away from you.
		</span>

        <a href="{{route('myaccount')}}" class="flex-c-m txt-s-107 cl0 bg10 size-a-30 hov-btn2 trans-04">
            My Account
        </a>
    </div>

@endsection

@section('scripts')
@endsection
