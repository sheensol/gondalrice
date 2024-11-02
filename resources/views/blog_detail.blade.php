@extends('layouts.app2')

@section('title', 'Gondal Rice: '.$blog->meta_title)

@section('description')
    <meta name="description" content="{{$blog->meta_description}}">
@endsection

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

					<a href="{{url('blogs')}}" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
						/ Blog
					</a>

					<span>
						/ {{$blog->title}}
					</span>
				</span>
            </div>
        </div>
    </section>

    <!-- Content page -->
    <section class="bg0 p-t-100 p-b-20">
        <div class="container">
            <div class="row">
                <div class="col-sm-11 col-md-8 col-lg-9 m-rl-auto p-b-80">
                    <!-- detail blog -->
                    <div class="p-b-50">
                        <div class="wrap-pic-w">
                            <img src="{{asset('assets/images/blogs/'.$blog->image)}}" alt="BLOG" />
                        </div>

                        <div class="p-t-30">
                            <h4 class="txt-m-125 cl3">
                                {{$blog->title}}
                            </h4>

                            <div class="flex-w flex-m txt-s-115 cl9 p-t-14 p-b-22">
								<span class="m-r-22">
                                    {{date('M d, Y', strtotime($blog->updated_at)) }}
								</span>

                                {{--<span class="m-r-22">
									Post by <span class="txt-s-108 cl6">Muhammad Ashfiq Gondal</span>
								</span>--}}

                            </div>

                            <p class="txt-s-101 cl6 p-b-12">
                            {!! $blog->description !!}
                            </p>

                            {{--<p class="txt-s-101 cl6 p-b-12">
                                At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus.
                            </p>

                            <h5 class="txt-m-104 cl3 p-t-18 p-b-19">
                                Duis aute irure dolor in reprehenderit in voluptate velit.
                            </h5>

                            <p class="txt-s-101 cl6 p-b-12">
                                On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will.
                            </p>

                            <p class="txt-s-101 cl6 p-b-12">
                                Which is the same as saying through shrinking from toil and pain. These cases are perfectly simple and easy to distinguish. In a free hour, when our power of choice is untrammelled and when nothing prevents our being able to do what we like best, every pleasure is to be welcomed and every pain avoided. But in certain circumstances and owing to the claims of duty or the obligations of business it will frequently occur that pleasures have to be repudiated and annoyances accepted.
                            </p>

                            <p class="txt-s-101 cl6 p-b-12">
                                The wise man therefore always holds in these matters to this principle of selection: he rejects pleasures to secure other greater pleasures, or else he endures pains to avoid worse pains.
                            </p>--}}
                        </div>
                    </div>
                </div>

                <div class="col-sm-11 col-md-4 col-lg-3 m-rl-auto p-b-80">
                    <div class="rightbar">
                        <!--  -->

                        <div>
                            <h4 class="txt-m-101 cl3 p-b-37">
                                LATEST POSTS
                            </h4>

                            <ul>
                                @foreach($blogs as $blg)
                                    <li class="flex-w flex-sb-t p-b-30">
                                        <a href="{{url('blog/'.$blg->slug)}}" class="size-w-64 wrap-pic-w hov4">
                                            <img src="{{asset('assets/images/blogs/'.$blg->image)}}" alt="IMG">
                                        </a>

                                        <div class="size-w-65 flex-col-l p-t-7">
                                            <a href="{{url('blog/'.$blg->slug)}}" class="txt-m-103 cl3 hov-cl10 trans-04 p-b-3">
                                                {{$blg->name}}
                                            </a>

                                            <span class="txt-s-106 cl9">
                                                {{date('M d, Y', strtotime($blg->updated_at)) }}
                                            </span>
                                        </div>
                                    </li>
                                @endforeach

                    {{--<li class="flex-w flex-sb-t p-b-30">
                        <a href="#" class="size-w-64 wrap-pic-w hov4">
                            <img src="images/last-post-02.jpg" alt="IMG">
                        </a>

                        <div class="size-w-65 flex-col-l p-t-7">
                            <a href="#" class="txt-m-103 cl3 hov-cl10 trans-04 p-b-3">
                                Ut enim ad minima
                            </a>

                            <span class="txt-s-106 cl9">
                                November 12, 2017
                            </span>
                        </div>
                    </li>

                    <li class="flex-w flex-sb-t p-b-30">
                        <a href="#" class="size-w-64 wrap-pic-w hov4">
                            <img src="images/last-post-03.jpg" alt="IMG">
                        </a>

                        <div class="size-w-65 flex-col-l p-t-7">
                            <a href="#" class="txt-m-103 cl3 hov-cl10 trans-04 p-b-3">
                                Quis autem vel eum
                            </a>

                            <span class="txt-s-106 cl9">
                                November 12, 2017
                            </span>
                        </div>
                    </li>

                    <li class="flex-w flex-sb-t p-b-30">
                        <a href="#" class="size-w-64 wrap-pic-w hov4">
                            <img src="images/last-post-04.jpg" alt="IMG">
                        </a>

                        <div class="size-w-65 flex-col-l p-t-7">
                            <a href="#" class="txt-m-103 cl3 hov-cl10 trans-04 p-b-3">
                                Et harum quidem
                            </a>

                            <span class="txt-s-106 cl9">
                                November 12, 2017
                            </span>
                        </div>
                    </li>--}}
                            </ul>
                        </div>

                        <!--  -->
                        {{--<div class="p-t-25">
                            <h4 class="txt-m-101 cl3 p-b-37">
                                Search by tags
                            </h4>

                            <div class="flex-w m-r--10">
                                <a href="#" class="dis-block bg12 txt-s-101 cl6 hov-btn1 trans-03 p-tb-5 p-rl-12 m-r-10 m-b-10">
                                    Food
                                </a>

                                <a href="#" class="dis-block bg12 txt-s-101 cl6 hov-btn1 trans-03 p-tb-5 p-rl-12 m-r-10 m-b-10">
                                    Green
                                </a>

                                <a href="#" class="dis-block bg12 txt-s-101 cl6 hov-btn1 trans-03 p-tb-5 p-rl-12 m-r-10 m-b-10">
                                    Vegetables
                                </a>

                                <a href="#" class="dis-block bg12 txt-s-101 cl6 hov-btn1 trans-03 p-tb-5 p-rl-12 m-r-10 m-b-10">
                                    Organic
                                </a>

                                <a href="#" class="dis-block bg12 txt-s-101 cl6 hov-btn1 trans-03 p-tb-5 p-rl-12 m-r-10 m-b-10">
                                    Farm
                                </a>
                            </div>
                        </div>--}}
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')

@endsection
