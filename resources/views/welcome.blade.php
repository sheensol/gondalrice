@extends('layouts.app')

@section('title', 'Gondal Rice')

@section('assets')
    {{--<link href="https://fonts.googleapis.com/css?family=Dosis:300,400,500,600,700,800" rel="stylesheet">--}}
@endsection

@section('sidebar')
    {{--@include('includes.sidebar')--}}
@endsection

@section('content')
    <!-- Slider -->
    <section class="sec-slider">
        <div class="rev_slider_wrapper fullwidthbanner-container">
            <div id="rev_slider_1" class="rev_slide fullwidthabanner" data-version="5.4.5" style="display:none">
                <ul>
                    <!-- Slide 1 -->
                    <li data-transition="fade">
                        <!--  -->
                        <img src="{{ asset('assets/images/bg-slide-01.jpg') }}" alt="IMG-BG" class="rev-slidebg">

                        <!--  -->
                        <div class="tp-caption tp-resizeme layer1"
                             data-frames='[{"delay":1300,"speed":1300,"frame":"0","from":"y:50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'

                             data-visibility="['on', 'on', 'on', 'on']"

                             data-fontsize="['35', '35', '35', '35']"
                             data-lineheight="['42', '42', '42', '42']"
                             data-color="['#333']"
                             data-textAlign="['left', 'left', 'center', 'center']"

                             data-x="['left']"
                             data-y="['center']"
                             data-hoffset="['310', '80', '0', '0']"
                             data-voffset="['-78', '-78', '-78', '-150']"

                             data-width="['650','650','768','576']"
                             data-height="['auto']"
                             data-whitespace="['normal']"

                             data-paddingtop="[0, 0, 0, 0]"
                             data-paddingright="[15, 15, 15, 15]"
                             data-paddingbottom="[0, 0, 0, 0]"
                             data-paddingleft="[15, 15, 15, 15]"

                             data-basealign="slide"
                             data-responsive_offset="on"
                        >
                            <span class="child1">Special</span> <span class="child2">Rice</span>
                        </div>

                        <!--  -->
                        <h2 class="tp-caption tp-resizeme layer2"
                            data-frames='[{"delay":500,"speed":1500,"frame":"0","from":"x:[175%];y:0px;z:0;rX:0;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:1;","mask":"x:[-100%];y:0;s:inherit;e:inherit;","to":"o:1;","ease":"Power3.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                            data-visibility="['on', 'on', 'on', 'on']"

                            data-fontsize="['75', '75', '75', '75']"
                            data-lineheight="['82', '82', '82', '82']"
                            data-color="['#333']"
                            data-textAlign="['left', 'left', 'center', 'center']"

                            data-x="['left']"
                            data-y="['center']"
                            data-hoffset="['310', '80', '0', '0']"
                            data-voffset="['0', '0', '0', '-30']"

                            data-width="['650','650','768','576']"
                            data-height="['auto']"
                            data-whitespace="['normal']"

                            data-paddingtop="[0, 0, 0, 0]"
                            data-paddingright="[15, 15, 15, 15]"
                            data-paddingbottom="[0, 0, 0, 0]"
                            data-paddingleft="[15, 15, 15, 15]"

                            data-basealign="slide"
                            data-responsive_offset="on"
                        >
                            Fresh Bas<span>m</span>ati
                        </h2>

                        <!--  -->
                        <p class="tp-caption tp-resizeme layer3"
                           data-frames='[{"delay":1300,"speed":1300,"frame":"0","from":"y:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                           data-visibility="['on', 'on', 'on', 'on']"

                           data-fontsize="['15', '15', '15', '15']"
                           data-lineheight="['24', '24', '24', '24']"
                           data-color="['#666']"
                           data-textAlign="['left', 'left', 'center', 'center']"

                           data-x="['left']"
                           data-y="['center']"
                           data-hoffset="['310', '80', '0', '0']"
                           data-voffset="['95', '95', '95', '95']"

                           data-width="['650','650','768','576']"
                           data-height="['auto', 'auto', 'auto', 'auto']"
                           data-whitespace="['normal']"

                           data-paddingtop="[0, 0, 0, 0]"
                           data-paddingright="[15, 15, 35, 15]"
                           data-paddingbottom="[0, 0, 0, 0]"
                           data-paddingleft="[15, 15, 35, 15]"

                           data-basealign="slide"
                           data-responsive_offset="on"

                        >
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </p>

                        <!--  -->
                        <div class="tp-caption tp-resizeme flex-w layer4"
                             data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.6;sY:0.6;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                             data-x="['left']"
                             data-y="['center']"
                             data-hoffset="['310', '80', '0', '0']"
                             data-voffset="['203', '203', '203', '203']"

                             data-width="['650','650','768','576']"
                             data-height="['auto']"

                             data-paddingtop="[0, 0, 0, 0]"
                             data-paddingright="[15, 15, 15, 15]"
                             data-paddingbottom="[0, 0, 0, 0]"
                             data-paddingleft="[15, 15, 15, 15]"

                             data-basealign="slide"
                             data-responsive_offset="on"
                        >
                            {{--<a href="shop-sidebar-grid.html" class="btn-slide flex-c-m">
                                Shop now
                                <span class="lnr lnr-chevron-right m-l-7"></span>
                                <span class="lnr lnr-chevron-right"></span>
                            </a>--}}
                        </div>
                    </li>

                    <!-- Slide 2 -->
                    <li data-transition="fade">
                        <!--  -->
                        <img src="{{ asset('assets/images/bg-slide-01.jpg') }}" alt="IMG-BG" class="rev-slidebg">

                        <!--  -->
                        <div class="tp-caption tp-resizeme layer1"
                             data-frames='[{"delay":500,"speed":1300,"frame":"0","from":"y:150px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'

                             data-visibility="['on', 'on', 'on', 'on']"

                             data-fontsize="['35', '35', '35', '35']"
                             data-lineheight="['42', '42', '42', '42']"
                             data-color="['#333']"
                             data-textAlign="['left', 'left', 'center', 'center']"

                             data-x="['left']"
                             data-y="['center']"
                             data-hoffset="['310', '80', '0', '0']"
                             data-voffset="['-78', '-78', '-78', '-150']"

                             data-width="['650','650','768','576']"
                             data-height="['auto']"
                             data-whitespace="['normal']"

                             data-paddingtop="[0, 0, 0, 0]"
                             data-paddingright="[15, 15, 15, 15]"
                             data-paddingbottom="[0, 0, 0, 0]"
                             data-paddingleft="[15, 15, 15, 15]"

                             data-basealign="slide"
                             data-responsive_offset="on"
                        >
                            <span class="child1">organici</span> <span class="child2">products</span>
                        </div>

                        <!--  -->
                        <h2 class="tp-caption tp-resizeme layer2"
                            data-frames='[{"delay":1300,"speed":1300,"frame":"0","from":"x:-50px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                            data-visibility="['on', 'on', 'on', 'on']"

                            data-fontsize="['75', '75', '75', '75']"
                            data-lineheight="['82', '82', '82', '82']"
                            data-color="['#333']"
                            data-textAlign="['left', 'left', 'center', 'center']"

                            data-x="['left']"
                            data-y="['center']"
                            data-hoffset="['310', '80', '0', '0']"
                            data-voffset="['0', '0', '0', '-30']"

                            data-width="['650','650','768','576']"
                            data-height="['auto']"
                            data-whitespace="['normal']"

                            data-paddingtop="[0, 0, 0, 0]"
                            data-paddingright="[15, 15, 15, 15]"
                            data-paddingbottom="[0, 0, 0, 0]"
                            data-paddingleft="[15, 15, 15, 15]"

                            data-basealign="slide"
                            data-responsive_offset="on"
                        >
                            Fresh Or<span>a</span>nges
                        </h2>

                        <!--  -->
                        <p class="tp-caption tp-resizeme layer3"
                           data-frames='[{"delay":500,"speed":1300,"frame":"0","from":"y:-150px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                           data-visibility="['on', 'on', 'on', 'on']"

                           data-fontsize="['15', '15', '15', '15']"
                           data-lineheight="['24', '24', '24', '24']"
                           data-color="['#666']"
                           data-textAlign="['left', 'left', 'center', 'center']"

                           data-x="['left']"
                           data-y="['center']"
                           data-hoffset="['310', '80', '0', '0']"
                           data-voffset="['95', '95', '95', '95']"

                           data-width="['650','650','768','576']"
                           data-height="['auto', 'auto', 'auto', 'auto']"
                           data-whitespace="['normal']"

                           data-paddingtop="[0, 0, 0, 0]"
                           data-paddingright="[15, 15, 35, 15]"
                           data-paddingbottom="[0, 0, 0, 0]"
                           data-paddingleft="[15, 15, 35, 15]"

                           data-basealign="slide"
                           data-responsive_offset="on"
                        >
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </p>

                        <!--  -->
                        <div class="tp-caption tp-resizeme flex-w layer4"
                             data-frames='[{"delay":2000,"speed":2000,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power4.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                             data-x="['left']"
                             data-y="['center']"
                             data-hoffset="['310', '80', '0', '0']"
                             data-voffset="['203', '203', '203', '203']"

                             data-width="['650','650','768','576']"
                             data-height="['auto']"

                             data-paddingtop="[0, 0, 0, 0]"
                             data-paddingright="[15, 15, 15, 15]"
                             data-paddingbottom="[0, 0, 0, 0]"
                             data-paddingleft="[15, 15, 15, 15]"

                             data-basealign="slide"
                             data-responsive_offset="on"
                        >
                            {{--<a href="shop-sidebar-grid.html" class="btn-slide flex-c-m">
                                Shop now
                                <span class="lnr lnr-chevron-right m-l-7"></span>
                                <span class="lnr lnr-chevron-right"></span>
                            </a>--}}
                        </div>
                    </li>

                    <!-- Slide 3 -->
                    <li data-transition="fade">
                        <!--  -->
                        <img src="{{ asset('assets/images/bg-slide-01.jpg') }}" alt="IMG-BG" class="rev-slidebg">

                        <!--  -->
                        <div class="tp-caption tp-resizeme layer1"
                             data-frames='[{"delay":1300,"speed":1300,"frame":"0","from":"x:-200px;skX:85px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                             data-visibility="['on', 'on', 'on', 'on']"

                             data-fontsize="['35', '35', '35', '35']"
                             data-lineheight="['42', '42', '42', '42']"
                             data-color="['#333']"
                             data-textAlign="['left', 'left', 'center', 'center']"

                             data-x="['left']"
                             data-y="['center']"
                             data-hoffset="['310', '80', '0', '0']"
                             data-voffset="['-78', '-78', '-78', '-150']"

                             data-width="['650','650','768','576']"
                             data-height="['auto']"
                             data-whitespace="['normal']"

                             data-paddingtop="[0, 0, 0, 0]"
                             data-paddingright="[15, 15, 15, 15]"
                             data-paddingbottom="[0, 0, 0, 0]"
                             data-paddingleft="[15, 15, 15, 15]"

                             data-basealign="slide"
                             data-responsive_offset="on"
                        >
                            <span class="child1">organici</span> <span class="child2">products</span>
                        </div>

                        <!--  -->
                        <h2 class="tp-caption tp-resizeme layer2"
                            data-frames='[{"delay":500,"speed":1300,"frame":"0","from":"x:200px;skX:-85px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                            data-visibility="['on', 'on', 'on', 'on']"

                            data-fontsize="['75', '75', '75', '75']"
                            data-lineheight="['82', '82', '82', '82']"
                            data-color="['#333']"
                            data-textAlign="['left', 'left', 'center', 'center']"

                            data-x="['left']"
                            data-y="['center']"
                            data-hoffset="['310', '80', '0', '0']"
                            data-voffset="['0', '0', '0', '-30']"

                            data-width="['650','650','768','576']"
                            data-height="['auto']"
                            data-whitespace="['normal']"

                            data-paddingtop="[0, 0, 0, 0]"
                            data-paddingright="[15, 15, 15, 15]"
                            data-paddingbottom="[0, 0, 0, 0]"
                            data-paddingleft="[15, 15, 15, 15]"

                            data-basealign="slide"
                            data-responsive_offset="on"
                        >
                            Fresh Or<span>a</span>nges
                        </h2>

                        <!--  -->
                        <p class="tp-caption tp-resizeme layer3"
                           data-frames='[{"delay":1300,"speed":1300,"frame":"0","from":"x:-200px;skX:85px;opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                           data-visibility="['on', 'on', 'on', 'on']"

                           data-fontsize="['15', '15', '15', '15']"
                           data-lineheight="['24', '24', '24', '24']"
                           data-color="['#666']"
                           data-textAlign="['left', 'left', 'center', 'center']"

                           data-x="['left']"
                           data-y="['center']"
                           data-hoffset="['310', '80', '0', '0']"
                           data-voffset="['95', '95', '95', '95']"

                           data-width="['650','650','768','576']"
                           data-height="['auto', 'auto', 'auto', 'auto']"
                           data-whitespace="['normal']"

                           data-paddingtop="[0, 0, 0, 0]"
                           data-paddingright="[15, 15, 35, 15]"
                           data-paddingbottom="[0, 0, 0, 0]"
                           data-paddingleft="[15, 15, 35, 15]"

                           data-basealign="slide"
                           data-responsive_offset="on"
                        >
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.
                        </p>

                        <!--  -->
                        <div class="tp-caption tp-resizeme flex-w layer4"
                             data-frames='[{"delay":2500,"speed":1500,"frame":"0","from":"y:bottom;rZ:90deg;sX:2;sY:2;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"auto:auto;","ease":"Power3.easeInOut"}]'

                             data-x="['left']"
                             data-y="['center']"
                             data-hoffset="['310', '80', '0', '0']"
                             data-voffset="['203', '203', '203', '203']"

                             data-width="['650','650','768','576']"
                             data-height="['auto']"

                             data-paddingtop="[0, 0, 0, 0]"
                             data-paddingright="[15, 15, 15, 15]"
                             data-paddingbottom="[0, 0, 0, 0]"
                             data-paddingleft="[15, 15, 15, 15]"

                             data-basealign="slide"
                             data-responsive_offset="on"
                        >
                            {{--<a href="shop-sidebar-grid.html" class="btn-slide flex-c-m">
                                Shop now
                                <span class="lnr lnr-chevron-right m-l-7"></span>
                                <span class="lnr lnr-chevron-right"></span>
                            </a>--}}
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>

    <!-- Welcome -->
    <section class="sec-welcome bg0 p-t-145 p-b-95">
        <div class="container">
            <div class="size-a-1 flex-col-c-m p-b-90">
                <div class="txt-center txt-m-101 cl10 how-pos1-parent m-b-14">
                    welcome to Gondal Rice Mills & Seela Plant
                </div>

                <h3 class="txt-center txt-l-101 cl3 respon1">
                    Pakistan’s #1 Selling Basmati Rice
                </h3>
            </div>

            <div class="wrap-pic-max-w flex-c-t flex-w p-t-255 item-welcome-parent">
                <img class="size-w-1" src="{{ asset('assets/images/other-01.jpg') }}" alt="IMG">

                <!-- item welcome -->
                <div class="item-welcome one">
                    <div class="item-welcome-pic pos-relative">
                        <div class="wrap-pic-max-w flex-c-m item-welcome-pic-dark trans-04">
                            <img src="{{ asset('assets/images/icons/icon1.png') }}" alt="IMG">
                        </div>

                        <div class="wrap-pic-max-w flex-c-m s-full ab-t-l item-welcome-pic-light trans-04">
                            <img src="{{ asset('assets/images/icons/icon1.1.png') }}" alt="IMG">
                        </div>
                    </div>

                    <div class="item-welcome-txt p-t-27">
                        <h4 class="txt-m-101 cl3 txt-center p-b-11">
                            Flavour & Quality
                        </h4>

                        <p class="txt-s-101 cl6 txt-center">
                            We provide good flavoured and best quality rice.
                        </p>
                    </div>
                </div>

                <!-- item welcome -->
                <div class="item-welcome two">
                    <div class="item-welcome-pic pos-relative">
                        <div class="wrap-pic-max-w flex-c-m item-welcome-pic-dark trans-04">
                            <img src="{{ asset('assets/images/icons/icon2.png') }}" alt="IMG">
                        </div>

                        <div class="wrap-pic-max-w flex-c-m s-full ab-t-l item-welcome-pic-light trans-04">
                            <img src="{{ asset('assets/images/icons/icon2.2.png') }}" alt="IMG">
                        </div>
                    </div>

                    <div class="item-welcome-txt p-t-27">
                        <h4 class="txt-m-101 cl3 txt-center p-b-11">
                            family healthy
                        </h4>

                        <p class="txt-s-101 cl6 txt-center">
                            We focus on family healthy measures in our brand.
                        </p>
                    </div>
                </div>

                <!-- item welcome -->
                <div class="item-welcome three">
                    <div class="item-welcome-pic pos-relative">
                        <div class="wrap-pic-max-w flex-c-m item-welcome-pic-dark trans-04">
                            <img src="{{ asset('assets/images/icons/icon3.png') }}" alt="IMG">
                        </div>

                        <div class="wrap-pic-max-w flex-c-m s-full ab-t-l item-welcome-pic-light trans-04">
                            <img src="{{ asset('assets/images/icons/icon3.3.png') }}" alt="IMG">
                        </div>
                    </div>

                    <div class="item-welcome-txt p-t-27">
                        <h4 class="txt-m-101 cl3 txt-center p-b-11">
                            Fresh and safe
                        </h4>

                        <p class="txt-s-101 cl6 txt-center">
                            Fresh rice are provided without chemical.
                        </p>
                    </div>
                </div>

                <!-- item welcome -->
                <div class="item-welcome four">
                    <div class="item-welcome-pic pos-relative">
                        <div class="wrap-pic-max-w flex-c-m item-welcome-pic-dark trans-04">
                            <img src="{{ asset('assets/images/icons/icon4.png') }}" alt="IMG">
                        </div>

                        <div class="wrap-pic-max-w flex-c-m s-full ab-t-l item-welcome-pic-light trans-04">
                            <img src="{{ asset('assets/images/icons/icon4.4.png') }}" alt="IMG">
                        </div>
                    </div>

                    <div class="item-welcome-txt p-t-27">
                        <h4 class="txt-m-101 cl3 txt-center p-b-11">
                            Food safety
                        </h4>

                        <p class="txt-s-101 cl6 txt-center">
                            Our team specially focus on food safety to avoid poisoning.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Item -->
    <div class="sec-item flex-w">
        <!--  -->
        <div class="of-hidden size-w-2 respon2">
            <div class="hov-img1 pos-relative">
                <img src="{{ asset('assets/images/bg-item-01.jpg') }}" alt="IMG">

                <a href="#" class="s-full ab-t-l flex-col-c-m bg11 p-all-15 hov1-parent">
                    <div class="wrap-pic-max-w">
                        <img src="{{ asset('assets/images/icons/symbol-03.png') }}" alt="IMG">
                    </div>

                    <span class="txt-l-102 cl0 txt-center p-t-30 p-b-13">
					</span>

                    <div class="hov1 trans-04">
                        <div class="txt-m-102 cl0 txt-center hov1-child trans-04">
                            Seeding
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!--  -->
        <div class="of-hidden size-w-2 respon2">
            <div class="hov-img1 pos-relative">
                <img src="{{ asset('assets/images/bg-item-02.jpg') }}" alt="IMG">

                <a href="#" class="s-full ab-t-l flex-col-c-m bg11 p-all-15 hov1-parent">
                    <div class="wrap-pic-max-w">
                        <img src="{{ asset('assets/images/icons/symbol-04.png') }}" alt="IMG">
                    </div>

                    <span class="txt-l-102 cl0 txt-center p-t-30 p-b-13">

					</span>

                    <div class="hov1 trans-04">
                        <div class="txt-m-102 cl0 txt-center hov1-child trans-04">
                            Harvesting
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!--  -->
        <div class="of-hidden size-w-2 respon2">
            <div class="hov-img1 pos-relative">
                <img src="{{ asset('assets/images/bg-item-03.jpg') }}" alt="IMG">

                <a href="#" class="s-full ab-t-l flex-col-c-m bg11 p-all-15 hov1-parent">
                    <div class="wrap-pic-max-w">
                        <img src="{{ asset('assets/images/icons/symbol-05.png') }}" alt="IMG">
                    </div>

                    <span class="txt-l-102 cl0 txt-center p-t-30 p-b-13">

					</span>

                    <div class="hov1 trans-04">
                        <div class="txt-m-102 cl0 txt-center hov1-child trans-04">
                            Processing
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!--  -->
        <div class="of-hidden size-w-2 respon2">
            <div class="hov-img1 pos-relative">
                <img src="{{ asset('assets/images/bg-item-04.jpg') }}" alt="IMG">

                <a href="#" class="s-full ab-t-l flex-col-c-m bg11 p-all-15 hov1-parent">
                    <div class="wrap-pic-max-w">
                        <img src="{{ asset('assets/images/icons/symbol-06.png') }}" alt="IMG">
                    </div>

                    <span class="txt-l-102 cl0 txt-center p-t-30 p-b-13">

					</span>

                    <div class="hov1 trans-04">
                        <div class="txt-m-102 cl0 txt-center hov1-child trans-04">
                            Finished Rice
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!-- Product -->
    <div class="sec-product bg0 p-t-145 p-b-25">
        <div class="container">
            <div class="size-a-1 flex-col-c-m p-b-48">
                {{--<div class="txt-center txt-m-101 cl10 how-pos1-parent m-b-14">
                    Featured Products
                </div>--}}

                <h3 class="txt-center txt-l-101 cl3 respon1">
                    Featured Products
                </h3>
            </div>

            {{--<div class="p-b-46">
                <div class="flex-w flex-c-m filter-tope-group">
                    <button class="txt-m-104 cl9 hov2 trans-04 p-rl-27 p-b-10 how-active1" data-filter=".all">
                        All Products
                    </button>
                    @if($categories->count() > 0)
                        @foreach($categories as $category)
                            <button class="txt-m-104 cl9 hov2 trans-04 p-rl-27 p-b-10" data-filter=".{{str_replace(' ','',$category->name)}}">
                                {{$category->name}}
                            </button>
                        @endforeach
                    @endif
                </div>
            </div>--}}

            <div class="row isotope-grid">

                <!-- - -->
                @if($products->count() > 0)
                    @foreach($products as $product)
                        <div class="col-sm-6 col-md-4 col-lg-3 p-b-75 isotope-item all">
                            <!-- Block1 -->
                            <div class="block1">
                                <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                                    <img src="{{ asset('assets/images/products/'.$product->image) }}" alt="IMG">

                                    <div class="block1-content flex-col-c-m p-b-46">
                                        <a href="{{url('product/'.$product->slug)}}" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                            {{$product->name}}
                                        </a>

                                        <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
                                            {{session('currency')}} {{$product->price}}
                                        </span>

                                        <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                                            <a href="{{url('product/'.$product->slug)}}" class="block1-icon flex-c-m wrap-pic-max-w">
                                                <img src="{{ asset('assets/images/icons/icon-view.png') }}" alt="ICON">
                                            </a>

                                            {{--<a href="#" class="block1-icon flex-c-m wrap-pic-max-w js-addcart-b1">
                                                <img src="{{ asset('assets/images/icons/icon-cart.png') }}" alt="ICON">
                                            </a>

                                            <a href="wishlist.html" class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
                                                <img class="icon-addwish-b1" src="{{ asset('assets/images/icons/icon-heart.png') }}" alt="ICON">
                                                <img class="icon-addedwish-b1" src="{{ asset('assets/images/icons/icon-heart2.png') }}" alt="ICON">
                                            </a>--}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @endif


                {{--@if($categories->count() > 0)
                    @foreach($categories as $category)
                        @php
                          $prods = \App\Product::where('category_id', $category->id)->take(8)->orderBy('updated_at', 'DESC')->get();
                        @endphp

                        @foreach ($prods as $prod)
                            <div class="col-sm-6 col-md-4 col-lg-3 p-b-75 isotope-item {{str_replace(' ','',$category->name)}}">
                            <!-- Block1 -->
                            <div class="block1">
                                <div class="block1-bg wrap-pic-w bo-all-1 bocl12 hov3 trans-04">
                                    <img src="{{ asset('assets/images/products/'.$prod->image) }}" alt="IMG">

                                    <div class="block1-content flex-col-c-m p-b-46">
                                        <a href="{{url('product/'.$product->slug)}}" class="txt-m-103 cl3 txt-center hov-cl10 trans-04 js-name-b1">
                                            {{$prod->name}}
                                        </a>

                                        <span class="block1-content-more txt-m-104 cl9 p-t-21 trans-04">
                                            Rs:{{$prod->price}}/kg
                                        </span>

                                        <div class="block1-wrap-icon flex-c-m flex-w trans-05">
                                            <a href="{{url('product/'.$product->slug)}}" class="block1-icon flex-c-m wrap-pic-max-w">
                                                <img src="{{ asset('assets/images/icons/icon-view.png') }}" alt="ICON">
                                            </a>

                                            --}}{{--<a href="#" class="block1-icon flex-c-m wrap-pic-max-w js-addcart-b1">
                                                <img src="{{ asset('assets/images/icons/icon-cart.png') }}" alt="ICON">
                                            </a>

                                            <a href="wishlist.html" class="block1-icon flex-c-m wrap-pic-max-w js-addwish-b1">
                                                <img class="icon-addwish-b1" src="{{ asset('assets/images/icons/icon-heart.png') }}" alt="ICON">
                                                <img class="icon-addedwish-b1" src="{{ asset('assets/images/icons/icon-heart2.png') }}" alt="ICON">
                                            </a>--}}{{--
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    @endforeach
                @endif--}}


            </div>
        </div>
    </div>

    @if($dealDayProduct)
    <!-- Deal -->
        <section class="sec-deal bg-img1" style="background-image: url('{{ asset('assets/images/bg-01.jpg') }}');">
        <div class="flex-w flex-m how-pos2-parent">
            <img class="how-pos2 respon4 dis-none-xl" src="{{ asset('assets/images/other-03.png') }}" alt="IMG">

            <div class="size-w-3 txt-center wrap-pic-max-s w-full-lg">
                <img src="{{ asset('assets/images/other-02.png') }}" alt="IMG">
            </div>

            <div class="size-w-4 p-t-105 p-b-90 p-r-15 respon3">
                <div class="size-a-1 flex-col-l-m p-b-35">
                    <div class="txt-m-101 cl10 how-pos1-parent m-b-14">
                        Best Price For You

                        <h3 class="txt-l-101 cl3 respon1">
                            deal of the day
                        </h3>
                    </div>

                    <div class="p-b-32">
                        <a href="#" class="txt-m-105 cl6 hov-cl10 trans-04">
                            {{$dealDayProduct->name}}
                        </a>

                        <div class="txt-m-105 p-t-15 p-b-22">
                            <span class="cl9">
                                Rs: {{$dealDayProduct->hprice}}
                            </span>

                            <span class="cl10">
                                Now Only Rs: {{$dealDayProduct->price}}
                            </span>
                        </div>

                        <p class="txt-s-102 cl9">
                            {!! \Illuminate\Support\Str::limit($dealDayProduct->description, 250, '...') !!}
                        </p>
                    </div>

                    <div class="flex-w coutdown100 p-b-22" data-year="0" data-month="0" data-date="10" data-hours="23" data-minutes="0" data-seconds="0" data-timezone="auto">
                        <div class="flex-col-c-m how1 p-b-5 m-r-20 m-b-20">
						<span class="txt-l-102 cl6 days">
							10
						</span>

                            <span class="txt-m-106 cl9">
							days
						</span>
                        </div>

                        <div class="flex-col-c-m how1 p-b-5 m-r-20 m-b-20">
						<span class="txt-l-102 cl6 hours">
							25
						</span>

                            <span class="txt-m-106 cl9">
							hours
						</span>
                        </div>

                        <div class="flex-col-c-m how1 p-b-5 m-r-20 m-b-20">
						<span class="txt-l-102 cl6 minutes">
							56
						</span>

                            <span class="txt-m-106 cl9">
							mins
						</span>
                        </div>

                        <div class="flex-col-c-m how1 p-b-5 m-r-20 m-b-20">
						<span class="txt-l-102 cl6 seconds">
							42
						</span>

                            <span class="txt-m-106 cl9">
							secs
						</span>
                        </div>
                    </div>

                    <div class="flex-w">
                        <a href="{{url('product/'.$dealDayProduct->slug)}}" class="flex-c-m txt-s-103 cl6 size-a-2 how-btn1 bo-all-1 bocl11 hov-btn1 trans-04">
                            Shop now
                            <span class="lnr lnr-chevron-right m-l-7"></span>
                            <span class="lnr lnr-chevron-right"></span>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </section>
    @endif

    <!-- Product2 -->
    <section class="sec-product2 bg0 p-t-113 p-b-35">
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-md-6 col-lg-4 p-b-20 m-rl-auto-md">
                    <div class="p-r-20 p-rl-0-xl">
                        <!-- slide2 -->
                        <div class="wrap-slick2">
                            <div class="p-b-20 p-rl-15">
								<span class="txt-m-107 cl9">
									new form the farm
								</span>

                                <div class="flex-w flex-t p-t-5">
                                    <h4 class="size-w-5 m-r-20">
										<span class="txt-l-103 cl6">
											Special
										</span>

                                        <span class="txt-l-104 cl3">
											Offer
										</span>
                                    </h4>

                                    <div class="wrap-arrow-slick2 flex-w m-t-6"></div>
                                </div>
                            </div>

                            <div class="slick2">
                                <div class="item-slick2 p-all-15">
                                    <!-- item product2 -->
                                    <a href="product-single.html" class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                        <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                            <img src="{{ asset('assets/images/product-09.jpg') }}" alt="IMG-PRODUCT">
                                        </div>

                                        <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
											<span class="txt-m-103 cl3">
												Super Kernel
											</span>

                                            <div class="how-line1 m-t-14 m-b-19"></div>

                                            <span class="txt-m-104 cl9">
												170
											</span>
                                        </div>
                                    </a>

                                    <!-- item product2 -->
                                    <a href="product-single.html" class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                        <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                            <img src="{{ asset('assets/images/product-10.jpg') }}" alt="IMG-PRODUCT">
                                        </div>

                                        <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
											<span class="txt-m-103 cl3">
												Brown Rice
											</span>

                                            <div class="how-line1 m-t-14 m-b-19"></div>

                                            <span class="txt-m-104 cl9">
												200
											</span>
                                        </div>
                                    </a>

                                    <!-- item product2 -->
                                    <a href="product-single.html" class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                        <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                            <img src="{{ asset('assets/images/product-11.jpg') }}" alt="IMG-PRODUCT">
                                        </div>

                                        <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
											<span class="txt-m-103 cl3">
												Sella
											</span>

                                            <div class="how-line1 m-t-14 m-b-19"></div>

                                            <span class="txt-m-104 cl9">
												130
											</span>
                                        </div>
                                    </a>
                                </div>

                                <div class="item-slick2 p-all-15">
                                    <!-- item product2 -->
                                    <a href="product-single.html" class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                        <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                            <img src="{{ asset('assets/images/product-11.jpg') }}" alt="IMG-PRODUCT">
                                        </div>

                                        <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
											<span class="txt-m-103 cl3">
												Basmati
											</span>

                                            <div class="how-line1 m-t-14 m-b-19"></div>

                                            <span class="txt-m-104 cl9">
												160
											</span>
                                        </div>
                                    </a>

                                    <!-- item product2 -->
                                    <a href="product-single.html" class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                        <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                            <img src="{{ asset('assets/images/product-09.jpg') }}" alt="IMG-PRODUCT">
                                        </div>

                                        <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
											<span class="txt-m-103 cl3">
												Super Kernel
											</span>

                                            <div class="how-line1 m-t-14 m-b-19"></div>

                                            <span class="txt-m-104 cl9">
                                                140
											</span>
                                        </div>
                                    </a>

                                    <!-- item product2 -->
                                    <a href="product-single.html" class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                        <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                            <img src="{{ asset('assets/images/product-10.jpg') }}" alt="IMG-PRODUCT">
                                        </div>

                                        <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
											<span class="txt-m-103 cl3">
												Basmati
											</span>

                                            <div class="how-line1 m-t-14 m-b-19"></div>

                                            <span class="txt-m-104 cl9">
												170
											</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-6 col-lg-4 p-b-20 m-rl-auto-md">
                    <div class="p-rl-10 p-rl-0-xl">
                        <!-- slide2 -->
                        <div class="wrap-slick2">
                            <div class="p-b-20 p-rl-15">
								<span class="txt-m-107 cl9">
									Popular products
								</span>

                                <div class="flex-w flex-t p-t-5">
                                    <h4 class="size-w-5 m-r-20">
										<span class="txt-l-103 cl6">
											Super
										</span>

                                        <span class="txt-l-104 cl3">
											Kernel
										</span>
                                    </h4>

                                    <div class="wrap-arrow-slick2 flex-w m-t-6"></div>
                                </div>
                            </div>

                            <div class="slick2">
                                <div class="item-slick2 p-all-15">
                                    <!-- item product2 -->
                                    <a href="product-single.html" class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                        <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                            <img src="{{ asset('assets/images/product-12.jpg') }}" alt="IMG-PRODUCT">
                                        </div>

                                        <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
											<span class="txt-m-103 cl3">
												Basmati
											</span>

                                            <div class="how-line1 m-t-14 m-b-19"></div>

                                            <span class="txt-m-104 cl9">
												240
											</span>
                                        </div>
                                    </a>

                                    <!-- item product2 -->
                                    <a href="product-single.html" class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                        <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                            <img src="{{ asset('assets/images/product-13.jpg') }}" alt="IMG-PRODUCT">
                                        </div>

                                        <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
											<span class="txt-m-103 cl3">
												Basmati
											</span>

                                            <div class="how-line1 m-t-14 m-b-19"></div>

                                            <span class="txt-m-104 cl9">
												180
											</span>
                                        </div>
                                    </a>

                                    <!-- item product2 -->
                                    <a href="product-single.html" class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                        <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                            <img src="{{ asset('assets/images/product-14.jpg') }}" alt="IMG-PRODUCT">
                                        </div>

                                        <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
											<span class="txt-m-103 cl3">
												Basmati
											</span>

                                            <div class="how-line1 m-t-14 m-b-19"></div>

                                            <span class="txt-m-104 cl9">
												350
											</span>
                                        </div>
                                    </a>
                                </div>

                                <div class="item-slick2 p-all-15">
                                    <!-- item product2 -->
                                    <a href="product-single.html" class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                        <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                            <img src="{{ asset('assets/images/product-13.jpg') }}" alt="IMG-PRODUCT">
                                        </div>

                                        <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
											<span class="txt-m-103 cl3">
												Basmati
											</span>

                                            <div class="how-line1 m-t-14 m-b-19"></div>

                                            <span class="txt-m-104 cl9">
												180
											</span>
                                        </div>
                                    </a>

                                    <!-- item product2 -->
                                    <a href="product-single.html" class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                        <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                            <img src="{{ asset('assets/images/product-14.jpg') }}" alt="IMG-PRODUCT">
                                        </div>

                                        <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
											<span class="txt-m-103 cl3">
												Basmati
											</span>

                                            <div class="how-line1 m-t-14 m-b-19"></div>

                                            <span class="txt-m-104 cl9">
												220
											</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-10 col-md-6 col-lg-4 p-b-20 m-rl-auto-md">
                    <div class="p-l-20 p-rl-0-xl">
                        <!-- slide2 -->
                        <div class="wrap-slick2">
                            <div class="p-b-20 p-rl-15">
								<span class="txt-m-107 cl9">
									costumer needs
								</span>

                                <div class="flex-w flex-t p-t-5">
                                    <h4 class="size-w-5 m-r-20">
										<span class="txt-l-103 cl6">
											Super
										</span>

                                        <span class="txt-l-104 cl3">
											Basmati
										</span>
                                    </h4>

                                    <div class="wrap-arrow-slick2 flex-w m-t-6"></div>
                                </div>
                            </div>

                            <div class="slick2">
                                <div class="item-slick2 p-all-15">
                                    <!-- item product2 -->
                                    <a href="product-single.html" class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                        <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                            <img src="{{ asset('assets/images/product-15.jpg') }}" alt="IMG-PRODUCT">
                                        </div>

                                        <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
											<span class="txt-m-103 cl3">
												Basmati
											</span>

                                            <div class="how-line1 m-t-14 m-b-19"></div>

                                            <span class="txt-m-104 cl9">
												120
											</span>
                                        </div>
                                    </a>

                                    <!-- item product2 -->
                                    <a href="product-single.html" class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                        <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                            <img src="{{ asset('assets/images/product-16.jpg') }}" alt="IMG-PRODUCT">
                                        </div>

                                        <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
											<span class="txt-m-103 cl3">
												Basmati
											</span>

                                            <div class="how-line1 m-t-14 m-b-19"></div>

                                            <span class="txt-m-104 cl9">
												390
											</span>
                                        </div>
                                    </a>

                                    <!-- item product2 -->
                                    <a href="product-single.html" class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                        <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                            <img src="{{ asset('assets/images/product-17.jpg') }}" alt="IMG-PRODUCT">
                                        </div>

                                        <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
											<span class="txt-m-103 cl3">
												Basmati
											</span>

                                            <div class="how-line1 m-t-14 m-b-19"></div>

                                            <span class="txt-m-104 cl9">
												300
											</span>
                                        </div>
                                    </a>
                                </div>

                                <div class="item-slick2 p-all-15">
                                    <!-- item product2 -->
                                    <a href="product-single.html" class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                        <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                            <img src="{{ asset('assets/images/product-16.jpg') }}" alt="IMG-PRODUCT">
                                        </div>

                                        <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
											<span class="txt-m-103 cl3">
												Basmati
											</span>

                                            <div class="how-line1 m-t-14 m-b-19"></div>

                                            <span class="txt-m-104 cl9">
												390
											</span>
                                        </div>
                                    </a>

                                    <!-- item product2 -->
                                    <a href="product-single.html" class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                        <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                            <img src="{{ asset('assets/images/product-15.jpg') }}" alt="IMG-PRODUCT">
                                        </div>

                                        <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
											<span class="txt-m-103 cl3">
												Basmati
											</span>

                                            <div class="how-line1 m-t-14 m-b-19"></div>

                                            <span class="txt-m-104 cl9">
												120
											</span>
                                        </div>
                                    </a>

                                    <!-- item product2 -->
                                    <a href="product-single.html" class="flex-w flex-str size-h-1 bo-all-1 bocl12 hov3 trans-04 m-b-30">
                                        <div class="size-w-6 flex-c-m wrap-pic-max-s">
                                            <img src="{{ asset('assets/images/product-17.jpg') }}" alt="IMG-PRODUCT">
                                        </div>

                                        <div class="size-w-7 flex-col-m p-l-30 p-tb-15 p-r-15 p-l-0-ssm">
											<span class="txt-m-103 cl3">
												Basmati
											</span>

                                            <div class="how-line1 m-t-14 m-b-19"></div>

                                            <span class="txt-m-104 cl9">
												300
											</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <div class="sec-testimonials bg12 p-t-120 p-b-80 how-pos3-parent how-pos4-parent">
        <img class="how-pos3 dis-none-xl" src="{{ asset('assets/images/other-04.png') }}" alt="IMG">
        <img class="how-pos4 dis-none-xl" src="{{ asset('assets/images/other-05.png') }}" alt="IMG">

        <div class="container">
            <!-- Slide3 -->
            <div class="wrap-slick3">
                <div class="slick3">

                    @foreach($testimonials as $testimonial)
                        <div class="item-slick3">
                            <div class="flex-col-c-m">
                                <div class="layer-slick3 animated visible-false" data-appear="zoomIn" data-delay="100">
                                    <div class="wrap-pic-s size-a-3 bo-3-rad-50per bocl10 of-hidden">
                                        <img src="{{ asset('assets/images/testimonials/'.$testimonial->image) }}" alt="AVATAR">
                                    </div>
                                </div>

                                <div class="layer-slick3 animated visible-false" data-appear="fadeInUp" data-delay="800">
                                    <div class="flex-col-c-m p-t-33 p-b-25">
                                            <span class="txt-l-105 cl3 txt-center p-b-9">
                                                {{$testimonial->name}}
                                            </span>

                                        <span class="fs-16 cl11 txt-center">
                                                <i class="fa fa-star m-rl-1"></i>
                                                <i class="fa fa-star m-rl-1"></i>
                                                <i class="fa fa-star m-rl-1"></i>
                                                <i class="fa fa-star m-rl-1"></i>
                                                <i class="fa fa-star m-rl-1"></i>
                                            </span>
                                    </div>
                                </div>

                                <div class="layer-slick3 animated visible-false" data-appear="fadeInUp" data-delay="1600">
                                    <p class="txt-center txt-s-104 cl6 size-w-8">
                                        {{$testimonial->description}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>

                <div class="wrap-slick3-dots p-t-50"></div>
            </div>
        </div>
    </div>

    <!-- Blog -->
    <section class="sec-blog bg0 p-t-145 p-b-45">
        <div class="container">
            <div class="size-a-1 flex-col-c-m p-b-70">
                <div class="txt-center txt-m-101 cl10 how-pos1-parent m-b-14">
                    Keep Updated With Us


                </div>

                <h3 class="txt-center txt-l-101 cl3 respon1">
                    From our blog
                </h3>
            </div>

            <div class="row">
                @foreach($blogs as $blog)
                    <div class="col-md-6 p-b-50">
                        <div class="p-r-15 p-r-0-lg">
                            <a href="{{url('blog/'.$blog->slug)}}" class="wrap-pic-w hov4">
                                <img src="{{ asset('assets/images/blogs/'.$blog->image) }}" alt="BLOG">
                            </a>

                            <div class="flex-w p-t-30">
                                <div class="size-a-4 bg10 flex-col-c-m m-r-34">
                                    <span class="txt-l-106 cl0 p-b-4">
                                        {{date('d', strtotime($blog->updated_at))}}
                                    </span>

                                    <span class="txt-m-108 cl0 p-b-5">
                                        {{date('M', strtotime($blog->updated_at))}}
                                    </span>
                                </div>

                                <div class="size-w-9">
                                    <h4 class="p-b-13">
                                        <a href="blog-single.html" class="txt-m-109 cl3 hov-cl10 trans-04">
                                            {{$blog->title}}
                                        </a>
                                    </h4>

                                    <p class="txt-s-101 cl6 p-b-21">
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
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    {{--<script src="{{asset('js/GaugeMeter.js')}}"></script>

    <script type="text/javascript">
        function okAlert(modalname) {
            document.getElementById("passcode_error").style.color="";
            document.getElementById(modalname).classList.remove("open");
            document.getElementById("modal_overlay").classList.remove("open_overlay");
            return false;
        }

    </script>--}}
@endsection
