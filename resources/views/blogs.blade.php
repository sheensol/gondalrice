@extends('layouts.app2')

@section('title', 'Gondal Rice: Blogs')

@section('assets')

@endsection

@section('content')

    <!-- Title page -->
    <section class="how-overlay2 bg-img1" style="background-image: url('{{asset('assets/images/bg-07.jpg')}}');">
        <div class="container">
            <div class="txt-center p-t-160 p-b-165">
                <h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">
                    Blog
                </h2>

                <span class="txt-m-201 cl0 flex-c-m flex-w">
					<a href="{{url('/')}}" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
						Home
					</a>

					<span>
						/ Blog Grid 01
					</span>
				</span>
            </div>
        </div>
    </section>

    <!-- Content page -->
    <section class="bg0 p-t-100 p-b-95">
        <div class="container">
            <!-- item blog -->

            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-sm-6 col-md-4 p-b-45">
                        <div>
                            <a href="{{url('blog/'.$blog->slug)}}" class="wrap-pic-w hov4 how-pos5-parent">
                                <img src="{{ asset('assets/images/blogs/'.$blog->image) }}" alt="BLOG">

                                <div class="flex-col-c-m size-a-9 bg10 how-pos5">
                                    <span class="txt-l-110 cl0">
                                         {{date('d', strtotime($blog->updated_at))}}
                                    </span>

                                    <span class="txt-s-110 cl0">
                                        {{date('M', strtotime($blog->updated_at))}}
                                    </span>
                                </div>
                            </a>

                            <div class="p-t-28">
                                <h4 class="p-b-10">
                                    <a href="{{url('blog/'.$blog->slug)}}" class="txt-m-109 cl3 hov-cl10 trans-04">
                                        {{$blog->title}}
                                    </a>
                                </h4>

                                <p class="txt-s-101 cl6 p-b-18">
                                    {!! \Illuminate\Support\Str::limit($blog->description, 500, '...') !!}
                                </p>

                                <div class="how-line2 p-l-40">
                                    <a href="{{url('blog/'.$blog->slug)}}" class="txt-s-105 cl9 hov-cl10 trans-04">
                                        Read more
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach


                {{--<div class="col-sm-6 col-md-4 p-b-45">
                    <div>
                        <a href="blog-single.html" class="wrap-pic-w hov4 how-pos5-parent">
                            <img src="images/blog-basmati-rice.jpg" alt="BLOG">

                            <div class="flex-col-c-m size-a-9 bg10 how-pos5">
								<span class="txt-l-110 cl0">
									10
								</span>

                                <span class="txt-s-110 cl0">
									July
								</span>
                            </div>
                        </a>

                        <div class="p-t-28">
                            <h4 class="p-b-10">
                                <a href="blog-single.html" class="txt-m-109 cl3 hov-cl10 trans-04">
                                    Super Kernel Basmati Rice
                                </a>
                            </h4>

                            <p class="txt-s-101 cl6 p-b-18">
                                Super piece Basmati Rice, Kernel Basmati Rice Extra long grain rice is best quality rice created in the Northern territories of our country.Super portion Basmati Extra long grain rice is well known for its common smell and aroma which can not be found in any rice quality delivered in any aspect of the world other than Pakistan.
                            </p>

                            <div class="how-line2 p-l-40">
                                <a href="blog-single.html" class="txt-s-105 cl9 hov-cl10 trans-04">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 p-b-45">
                    <div>
                        <a href="blog-single.html" class="wrap-pic-w hov4 how-pos5-parent">
                            <img src="images/blog-kaynat-rice.jpg" alt="BLOG">

                            <div class="flex-col-c-m size-a-9 bg10 how-pos5">
								<span class="txt-l-110 cl0">
									25
								</span>

                                <span class="txt-s-110 cl0">
									July
								</span>
                            </div>
                        </a>

                        <div class="p-t-28">
                            <h4 class="p-b-10">
                                <a href="blog-single.html" class="txt-m-109 cl3 hov-cl10 trans-04">
                                    Steamed Super Basmati Kainaat 1121
                                </a>
                            </h4>

                            <p class="txt-s-101 cl6 p-b-18">
                                The Speciality of Pakistan Rice otherwise called extra long grain. Its length of crude handled rice surpasses 7mm and copies when it is cooked. Gondal Rice Mill and Sela Plant produce 1121 Super basmati rice which is when cooked stays flimsy and slim like needles and tastes which is corresponding to none. reach us in the event that you are searching for Pakistani basmati Rice, we are the best providers of Basmati rice in Pakistan.
                            </p>

                            <div class="how-line2 p-l-40">
                                <a href="blog-single.html" class="txt-s-105 cl9 hov-cl10 trans-04">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 p-b-45">
                    <div>
                        <a href="blog-single.html" class="wrap-pic-w hov4 how-pos5-parent">
                            <img src="images/blog-sela-rice.jpg" alt="BLOG">

                            <div class="flex-col-c-m size-a-9 bg10 how-pos5">
								<span class="txt-l-110 cl0">
									30
								</span>

                                <span class="txt-s-110 cl0">
									July
								</span>
                            </div>
                        </a>

                        <div class="p-t-28">
                            <h4 class="p-b-10">
                                <a href="blog-single.html" class="txt-m-109 cl3 hov-cl10 trans-04">
                                    Super Kernel Basmati Sela Rice (Parboiled rice)
                                </a>
                            </h4>

                            <p class="txt-s-101 cl6 p-b-18">
                                With the most developed Parboiled Plant in Pakistan, Gondal Rice Mill and Sela Plant gives you Parboiled rice which is long and slim and when cooked duplicates long yet stays meager like needles. Giving you the best taste and smell. We are Basmati Rice Exporters in Pakistan.
                            </p>

                            <div class="how-line2 p-l-40">
                                <a href="blog-single.html" class="txt-s-105 cl9 hov-cl10 trans-04">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 p-b-45">
                    <div>
                        <a href="blog-single.html" class="wrap-pic-w hov4 how-pos5-parent">
                            <img src="images/blog-386-rice.jpg" alt="BLOG">

                            <div class="flex-col-c-m size-a-9 bg10 how-pos5">
								<span class="txt-l-110 cl0">
									02
								</span>

                                <span class="txt-s-110 cl0">
									August
								</span>
                            </div>
                        </a>

                        <div class="p-t-28">
                            <h4 class="p-b-10">
                                <a href="blog-single.html" class="txt-m-109 cl3 hov-cl10 trans-04">
                                    Pakistani Basmati Rice – Non-Basmati Rice 386
                                </a>
                            </h4>

                            <p class="txt-s-101 cl6 p-b-18">
                                Non-Basmati Rice 386 from Pakistan is a traditional variety of non basmati rice that is grown from the mid of June to the stop of June every year. The famously known sort of non basmati, The famously recognized kind of basmati, PK 386 is the variety that originates from Upper Sindh province of Pakistan given that many decades. Contac us in case you are seeking out Pakistani Basmati Rice
                            </p>

                            <div class="how-line2 p-l-40">
                                <a href="blog-single.html" class="txt-s-105 cl9 hov-cl10 trans-04">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-md-4 p-b-45">
                    <div>
                        <a href="blog-single.html" class="wrap-pic-w hov4 how-pos5-parent">
                            <img src="images/blog-irr-rice.jpg" alt="BLOG">

                            <div class="flex-col-c-m size-a-9 bg10 how-pos5">
								<span class="txt-l-110 cl0">
									10
								</span>

                                <span class="txt-s-110 cl0">
									October
								</span>
                            </div>
                        </a>

                        <div class="p-t-28">
                            <h4 class="p-b-10">
                                <a href="blog-single.html" class="txt-m-109 cl3 hov-cl10 trans-04">
                                    Long Grain White Rice IRRI-6 and IRRI-9			</a>
                            </h4>

                            <p class="txt-s-101 cl6 p-b-18">


                                With his quality and freshness IRRI is the best rice which cultivated in Sindh and Southern Punjab Pakistan. IRRI has two type IRRI-6 and IRRI-9.

                            </p>

                            <div class="how-line2 p-l-40">
                                <a href="blog-single.html" class="txt-s-105 cl9 hov-cl10 trans-04">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>
                </div>--}}
            </div>

            <!-- Pagination -->
            <div class="flex-w flex-c-m p-t-25">
                {{ $blogs->links() }}
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
    </section>

@endsection

@section('scripts')

@endsection
