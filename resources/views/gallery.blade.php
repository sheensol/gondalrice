@extends('layouts.app2')

@section('title', 'Gondal Rice: Gallery')

@section('assets')

@endsection

@section('content')

    <!-- Title page -->
    <section class="how-overlay2 bg-img1" style="background-image: url('{{asset('assets/images/bg-07.jpg')}}');">
        <div class="container">
            <div class="txt-center p-t-160 p-b-165">
                <h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
                    Gallery
                </h2>

                <span class="txt-m-201 cl0 flex-c-m flex-w">
					<a href="{{url('/')}}" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
						Home
					</a>

					<span>
						/ Gallery
					</span>
				</span>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <div class="sec-gallery bg0 p-t-145 p-b-98">
        <div class="container">
            {{--<div class="flex-w flex-c-m filter-tope-group p-b-47">
                <button class="txt-m-104 cl9 hov2 trans-04 p-rl-22 p-b-10 how-active1" data-filter="*">
                    All
                </button>

                <button class="txt-m-104 cl9 hov2 trans-04 p-rl-22 p-b-10" data-filter=".vegetable-fill">
                    Super Kernel Basmati
                </button>

                <button class="txt-m-104 cl9 hov2 trans-04 p-rl-22 p-b-10" data-filter=".fruit-fill">
                    Super kernel Sella
                </button>

                <button class="txt-m-104 cl9 hov2 trans-04 p-rl-22 p-b-10" data-filter=".fruit-juic-fill">
                    Brown Rice
                </button>

                <button class="txt-m-104 cl9 hov2 trans-04 p-rl-22 p-b-10" data-filter=".dried-fill">
                    Kainat Rice
                </button>

                <button class="txt-m-104 cl9 hov2 trans-04 p-rl-22 p-b-10" data-filter=".other-fill">
                    Tota Rice
                </button>
            </div>--}}

            <div class="row gallery-lb isotope-grid isotope-grid-gallery">
                @foreach($galleries as $gallery)
                    <div class="col-md-6 col-lg-4 p-b-30 isotope-item">
                        <div class="gallery-item wrap-pic-w">
                            <img src="{{asset('assets/images/galleries/'.$gallery->image)}}" alt="GALLERY">

                            <div class="gallery-overlay flex-c-m trans-04">
                                <div class="gallery-content flex-w flex-c-m w-full">
                                    <a class="flex-c-m gallery-btn m-all-5 trans-04 js-show-gallery js-gallery" href="images/gallery-01.jpg">
                                        <img src="{{asset('assets/images/icons/icon-open.png')}}" alt="OPEN">
                                    </a>

                                    <a href="#" class="flex-c-m gallery-btn m-all-5 trans-04">
                                        <img src="{{asset('assets/images/icons/icon-link.png')}}" alt="LINK">
                                    </a>

                                    <div class="gallery-txt flex-col-c p-rl-15 p-t-10 trans-04">
                                        <span class="txt-m-109 cl0 txt-center">
                                            {{$gallery->name}}
                                        </span>

                                        <span class="txt-s-106 cl0 txt-center">
                                            Gallery
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- Pagination -->
            <div class="flex-w flex-c-m p-t-48">
                {{ $galleries->links() }}
                {{--<a href="#" class="flex-c-m txt-s-115 cl6 size-a-23 bo-all-1 bocl15 hov-btn1 trans-04 m-all-3 active-pagi1">
                    1
                </a>

                <a href="#" class="flex-c-m txt-s-115 cl6 size-a-23 bo-all-1 bocl15 hov-btn1 trans-04 m-all-3">
                    2
                </a>

                <a href="#" class="flex-c-m txt-s-115 cl6 size-a-24 how-btn1 bo-all-1 bocl15 hov-btn1 trans-04 m-all-3 p-b-1">
                    Next
                    <span class="lnr lnr-chevron-right m-t-3 m-l-7"></span>
                    <span class="lnr lnr-chevron-right m-t-3"></span>
                </a>--}}
            </div>
        </div>
    </div>

@endsection

@section('scripts')

@endsection
