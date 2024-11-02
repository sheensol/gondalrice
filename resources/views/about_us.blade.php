@extends('layouts.app2')

@section('title', 'Gondal Rice: About Us')

@section('assets')

@endsection

@section('content')

    <!-- Title page -->
    <section class="how-overlay2 bg-img1" style="background-image: url('{{asset('assets/images/bg-07.jpg')}}');">
        <div class="container">
            <div class="txt-center p-t-160 p-b-165">
                <h2 class="txt-l-101 cl0 txt-center p-b-14 respon1">About us</h2>
            </div>
        </div>
    </section>

    <!-- Story -->
    <section class="sec-story bg0 p-t-150 p-b-100">
        <div class="container">
            <div class="flex-w flex-sb-t">
                <div class="size-w-31 wrap-pic-w how-shadow2 bo-all-15 bocl0 w-full-md">
                    <img src="{{asset('assets/images/about.jpg')}}" alt="IMG">
                </div>

                <div class="size-w-32 p-t-43 w-full-md">
                    <h3 class="txt-center txt-1-101 cl15 p-b-44">
                        About Us
                    </h3>

                    <p class="txt-m-115 cl6 p-b-25" style="text-align: justify;">
                        Gondal Rice Mills & Sella Plant is among the leading rice sellers of Pakistan. For more than a decade, they have been delivering premium quality rice throughout Pakistan.
                        Gondal rice guarantees traceability, trustable, and superior quality rice that adhere to the highest international quality standards.
                        The company holds international organic accreditation thus ensuring the finest quality of rice.
                        Our impressive global portfolio of more than 100 corporate clients guarantees that we deal in only top quality rice.
                        Being one of the biggest rice seller and Exporter Company of Pakistan, our flagship brand “DASTARKHWAN" is available throughout Pakistan and a number of other countries.
                        Since quality and customer service is our top priority, thus we thrive to improve our supply chain process.
                        We combine state-of-the-art technology with highly skilled technicians to ensure premium quality products.
                        Furthermore, diversity is among our strengths. We provide different types of rice including Super Kernel Basmati Rice, Brown Rice, Steam Rice, Supperi , Kainat 1121 Sella, Broken Rice and many others.
                    </p>

                    <div class="flex-w flex-c-b p-t-50 p-t-30">


                        <div class="flex-col-l p-b-5">
							<span class="txt-m-401 cl10 p-b-2">
								Muhammad Ashfaq Gondal
							</span>

                            <span class="txt-s-106 cl6">
								Director of Gondal Rice Mill
							</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- We Bring -->
    <section class="sec-bring bg-img1 p-t-145 p-b-100" style="background-image: url('{{asset('assets/images/bg-02.jpg')}}')">
        <div class="container">
            <div class="size-a-1 flex-col-c-m p-b-40">
                <div class="txt-center txt-m-101 cl10 how-pos1-parent m-b-14">
                    Gondal Rice Mill

                    <div class="how-pos1">
                        <img src="{{asset('assets/images/icons/symbol-02.png')}}" alt="IMG">
                    </div>
                </div>

                <h3 class="txt-center txt-l-101 cl3 respon1">
                    We bring neat & clean Rice
                </h3>
            </div>

            <div class="how-pos6-parent">
                <!--  -->
                <div class="flex-c-b how-pos6 dis-none-lg">
                    <div class="size-w-28 wrap-pic-max-s w-full-sm">
                        <img src="{{asset('assets/images/other-07.png')}}" alt="IMG">
                    </div>
                </div>


                <!--  -->
                <div class="flex-w flex-sb m-rl--15 m-rl-0-lg respon20">
                    <div class="size-w-24 flex-col p-t-50 p-b-30 respon5">
                        <div class="flex-w flex-str size-w-27 al-self-e w-full-lg">
                            <div class="size-w-26 flex-r-m txt-right txt-m-109 cl3 respon6-01">
                                Flavour & Quality
                            </div>

                            <div class="size-w-25 flex-r-m respon6-02">
                                <img src="{{asset('assets/images/icons/symbol-20.png')}}" alt="SYMBOL">
                            </div>

                            <p class="txt-right txt-s-101 cl6 p-t-7 respon6-03">
                                We provide good flavoured and best quality rice.
                            </p>
                        </div>
                    </div>

                    <div class="size-w-24 flex-col p-t-50 p-b-30 respon5">
                        <div class="flex-w flex-str size-w-27 al-self-s w-full-lg">
                            <div class="size-w-25 flex-m">
                                <img src="{{asset('assets/images/icons/symbol-23.png')}}" alt="SYMBOL">
                            </div>

                            <div class="size-w-26 flex-m txt-m-109 cl3">
                                Family Healthy
                            </div>

                            <p class="txt-s-101 cl6 p-t-7">
                                We focus on family healthy measures in our brand.
                            </p>
                        </div>
                    </div>

                    <div class="size-w-24 flex-col p-t-50 p-b-30 respon5">
                        <div class="flex-w flex-str size-w-27 al-self-c p-r-6 w-full-lg">
                            <div class="size-w-26 flex-r-m txt-right txt-m-109 cl3 respon6-01">
                                Fresh and safe
                            </div>

                            <div class="size-w-25 flex-r-m respon6-02">
                                <img src="{{asset('assets/images/icons/symbol-21.png')}}" alt="SYMBOL">
                            </div>

                            <p class="txt-right txt-s-101 cl6 p-t-7 respon6-03">
                                Fresh rice are provided without chemical.
                            </p>
                        </div>
                    </div>

                    <div class="size-w-24 flex-col p-t-50 p-b-30 respon5">
                        <div class="flex-w flex-str size-w-27 al-self-c p-l-6 w-full-lg">
                            <div class="size-w-25 flex-m">
                                <img src="{{asset('assets/images/icons/symbol-24.png')}}" alt="SYMBOL">
                            </div>

                            <div class="size-w-26 flex-m txt-m-109 cl3">
                                Food safety
                            </div>

                            <p class="txt-s-101 cl6 p-t-7">
                                Our team specially focus on food safety to avoid poisoning.
                            </p>
                        </div>
                    </div>

                    <div class="size-w-24 flex-col p-t-50 p-b-30 respon5">
                        <div class="flex-w flex-str size-w-27 al-self-s w-full-lg">
                            <div class="size-w-26 flex-r-m txt-right txt-m-109 cl3 respon6-01">
                                Vitamins & Minerals
                            </div>

                            <div class="size-w-25 flex-r-m respon6-02">
                                <img src="{{asset('assets/images/icons/symbol-22.png')}}" alt="SYMBOL">
                            </div>

                            <p class="txt-right txt-s-101 cl6 p-t-7 respon6-03">
                                Rice is good source of B vitamins, iron and magnesium.
                            </p>
                        </div>
                    </div>

                    <div class="size-w-24 flex-col p-t-50 p-b-30 respon5">
                        <div class="flex-w flex-str size-w-27 al-self-e w-full-lg">
                            <div class="size-w-25 flex-m">
                                <img src="{{asset('assets/images/icons/symbol-25.png')}}" alt="SYMBOL">
                            </div>

                            <div class="size-w-26 flex-m txt-m-109 cl3">
                                Famous Food
                            </div>

                            <p class="txt-s-101 cl6 p-t-7">
                                Rice is full of protein and fat and the most eaten food in the world.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Our farmers -->
    <section class="sec-farmer bg0 p-t-145 p-b-70">
        <div class="container">
            <div class="size-a-1 flex-col-c-m p-b-70">
                <div class="txt-center txt-m-101 cl10 how-pos1-parent m-b-14">
                    Gondal Rice Mills

                    <div class="how-pos1">
                        <img src="{{asset('assets/images/icons/symbol-02.png')}}" alt="IMG">
                    </div>
                </div>

                <h3 class="txt-center txt-l-101 cl3 respon1">
                    Our Top Management
                </h3>
            </div>



            <div class="row">
                <div class="col-sm-8 col-md-4 p-b-30 m-rl-auto">
                    <div class="hov10 trans-04">
                        <a href="#" class="hov-img0">
                            <img src="{{asset('assets/images/farmer-01.jpg')}}" alt="IMG">
                        </a>

                        <div class="flex-col-c-m bg0 p-rl-15 p-t-37 p-b-35">
                            <a href="#" class="txt-m-114 cl3 txt-center hov-cl10 trans-04 p-b-9">
                                Muhammad Ashfaq Gondal
                            </a>

                            <span class="txt-s-101 cl6 txt-center">
								+92 301 4488496
							</span>

                            <div class="flex-w flex-c-m p-t-30">
                                <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                    <img class="hov6-child1 trans-04" src="{{asset('assets/images/icons/icon-instagram.png')}}" alt="instagram">
                                    <img class="ab-t-l hov6-child2 trans-04" src="{{asset('assets/images/icons/icon-instagram2.png')}}" alt="instagram">
                                </a>

                                <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                    <img class="hov6-child1 trans-04" src="{{asset('assets/images/icons/icon-twitter.png')}}" alt="twitter">
                                    <img class="ab-t-l hov6-child2 trans-04" src="{{asset('assets/images/icons/icon-twitter2.png')}}" alt="twitter">
                                </a>

                                <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                    <img class="hov6-child1 trans-04" src="{{asset('assets/images/icons/icon-google.png')}}" alt="google">
                                    <img class="ab-t-l hov6-child2 trans-04" src="{{asset('assets/images/icons/icon-google2.png')}}" alt="google">
                                </a>

                                <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                    <img class="hov6-child1 trans-04" src="{{asset('assets/images/icons/icon-facebook.png')}}" alt="facebook">
                                    <img class="ab-t-l hov6-child2 trans-04" src="{{asset('assets/images/icons/icon-facebook2.png')}}" alt="facebook">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-8 col-md-4 p-b-30 m-rl-auto">
                    <div class="hov10 trans-04">
                        <a href="#" class="hov-img0">
                            <img src="{{asset('assets/images/farmer-02.jpg')}}" alt="IMG">
                        </a>

                        <div class="flex-col-c-m bg0 p-rl-15 p-t-37 p-b-35">
                            <a href="#" class="txt-m-114 cl3 txt-center hov-cl10 trans-04 p-b-9">
                                Muhammad R1az Gondal
                            </a>

                            <span class="txt-s-101 cl6 txt-center">
								+92 300 4444565
							</span>

                            <div class="flex-w flex-c-m p-t-30">
                                <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                    <img class="hov6-child1 trans-04" src="{{asset('assets/images/icons/icon-instagram.png')}}" alt="instagram">
                                    <img class="ab-t-l hov6-child2 trans-04" src="{{asset('assets/images/icons/icon-instagram2.png')}}" alt="instagram">
                                </a>

                                <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                    <img class="hov6-child1 trans-04" src="{{asset('assets/images/icons/icon-twitter.png')}}" alt="twitter">
                                    <img class="ab-t-l hov6-child2 trans-04" src="{{asset('assets/images/icons/icon-twitter2.png')}}" alt="twitter">
                                </a>

                                <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                    <img class="hov6-child1 trans-04" src="{{asset('assets/images/icons/icon-google.png')}}" alt="google">
                                    <img class="ab-t-l hov6-child2 trans-04" src="{{asset('assets/images/icons/icon-google2.png')}}" alt="google">
                                </a>

                                <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                    <img class="hov6-child1 trans-04" src="{{asset('assets/images/icons/icon-facebook.png')}}" alt="facebook">
                                    <img class="ab-t-l hov6-child2 trans-04" src="{{asset('assets/images/icons/icon-facebook2.png')}}" alt="facebook">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-8 col-md-4 p-b-30 m-rl-auto">
                    <div class="hov10 trans-04">
                        <a href="#" class="hov-img0">
                            <img src="{{asset('assets/images/farmer-03.jpg')}}" alt="IMG">
                        </a>

                        <div class="flex-col-c-m bg0 p-rl-15 p-t-37 p-b-35">
                            <a href="#" class="txt-m-114 cl3 txt-center hov-cl10 trans-04 p-b-9">
                                Shahbaz Ahmad
                            </a>

                            <span class="txt-s-101 cl6 txt-center">
								+92 300 0435811
							</span>

                            <div class="flex-w flex-c-m p-t-30">
                                <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                    <img class="hov6-child1 trans-04" src="{{asset('assets/images/icons/icon-instagram.png')}}" alt="instagram">
                                    <img class="ab-t-l hov6-child2 trans-04" src="{{asset('assets/images/icons/icon-instagram2.png')}}" alt="instagram">
                                </a>

                                <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                    <img class="hov6-child1 trans-04" src="{{asset('assets/images/icons/icon-twitter.png')}}" alt="twitter">
                                    <img class="ab-t-l hov6-child2 trans-04" src="{{asset('assets/images/icons/icon-twitter2.png')}}" alt="twitter">
                                </a>

                                <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                    <img class="hov6-child1 trans-04" src="{{asset('assets/images/icons/icon-google.png')}}" alt="google">
                                    <img class="ab-t-l hov6-child2 trans-04" src="{{asset('assets/images/icons/icon-google2.png')}}" alt="google">
                                </a>

                                <a href="#" class="wrap-pic-max-s pos-relative lh-10 hov6 m-all-8">
                                    <img class="hov6-child1 trans-04" src="{{asset('assets/images/icons/icon-facebook.png')}}" alt="facebook">
                                    <img class="ab-t-l hov6-child2 trans-04" src="{{asset('assets/images/icons/icon-facebook2.png')}}" alt="facebook">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')

@endsection
