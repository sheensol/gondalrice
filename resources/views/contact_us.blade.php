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
                    Contact
                </h2>

                <span class="txt-m-201 cl0 flex-c-m flex-w">
					<a href="{{url('/')}}" class="txt-m-201 cl0 hov-cl10 trans-04 m-r-6">
						Home
					</a>

					<span>
						/ Contact
					</span>
				</span>
            </div>
        </div>
    </section>

    <!-- Form Contact -->
    <section class="container bg0 p-t-150 p-b-90">
        <div class="row">
            <div class="col-sm-10 col-md-6 col-lg-5 m-rl-auto p-b-10">
                <div class="h-full m-r--30 m-r-0-lg m-l-15-xl">
                    <div class="bg-img3 h-full respon18" style="background-image: url('{{asset('assets/images/contact.jpg')}}');"></div>
                </div>
            </div>

            <div class="col-sm-10 col-md-6 col-lg-7 m-rl-auto p-b-10">
                <div class="p-t-75 p-l-70 p-rl-0-lg">
                    <div class="size-a-1 flex-col-l p-b-70">
                        <div class="txt-m-101 cl10 how-pos1-parent m-b-14">
                            Get In Touch

                            <div class="how-pos1">
                                <img src="{{asset('assets/images/icons/symbol-02.png')}}" alt="IMG">
                            </div>
                        </div>

                        <h3 class="txt-l-101 cl3 respon1">
                            Leave us a message!
                        </h3>
                    </div>

                    <form action="{{route('contact')}}" name="frmcontact" id="frmcontact" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-lg-6 p-b-20">
                                <div class="m-r--5 m-rl-0-lg validate-input" data-validate = "Name is required">
                                    <input class="txt-s-115 cl3 plh1 size-a-25 bo-all-1 bocl15 focus1 p-rl-20" type="text" name="name" placeholder="Your Full Name *" required>
                                </div>
                            </div>

                            <div class="col-lg-6 p-b-20">
                                <div class="m-l--5 m-rl-0-lg validate-input" data-validate = "Valid email is: ex@abc.xyz">
                                    <input class="txt-s-115 cl3 plh1 size-a-25 bo-all-1 bocl15 focus1 p-rl-20" type="email" name="email" placeholder="Your Email *" required>
                                </div>
                            </div>

                            <div class="col-lg-6 p-b-20">
                                <div class="m-r--5 m-rl-0-lg">
                                    <input class="txt-s-115 cl3 plh1 size-a-25 bo-all-1 bocl15 focus1 p-rl-20" type="text" name="address" placeholder="Your Address" required>
                                </div>
                            </div>

                            <div class="col-lg-6 p-b-20">
                                <div class="m-l--5 m-rl-0-lg validate-input" data-validate = "Phone is required">
                                    <input class="txt-s-115 cl3 plh1 size-a-25 bo-all-1 bocl15 focus1 p-rl-20" type="text" name="phone" placeholder="Your Phone *" required>
                                </div>
                            </div>

                            <div class="col-12 p-b-20">
                                <div class="validate-input" data-validate = "Message is required">
                                    <textarea class="txt-s-115 cl3 plh1 size-a-48 bo-all-1 bocl15 focus1 p-rl-20 p-tb-10" name="message" placeholder="Your Message" required></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="flex-l p-t-10">
                            <button type="submit" class="flex-c-m txt-s-103 cl0 bg10 size-a-2 hov-btn2 trans-04">
                                Send Us
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <!-- Ccontact -->
    <section class="container p-t-90 p-b-45">
        <div class="row">
            <div class="col-sm-6 col-lg-3 p-b-50">
                <div class="flex-col-c-m p-rl-25">
                    <div class="wrap-pic-max-s p-b-25">
                        <img src="{{asset('assets/images/icons/icon-address.png')}}" alt="IMG">
                    </div>

                    <h5 class="txt-m-114 cl3 txt-center p-b-9">
                        Address
                    </h5>

                    <span class="txt-s-101 cl6 txt-center">
						40 Km Lahore, Jaranwala Road Thabal Stop Mandi Faiz Abad, District Nankana Sahib. Punjab Pakistan			</span>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <div class="flex-col-c-m p-rl-25">
                    <div class="wrap-pic-max-s p-b-25">
                        <img src="{{asset('assets/images/icons/icon-phone-03.png')}}" alt="IMG">
                    </div>

                    <h5 class="txt-m-114 cl3 txt-center p-b-9">
                        Phone
                    </h5>

                    <span class="txt-s-101 cl6 txt-center">
						+92 301 4488496
					</span>

                    <span class="txt-s-101 cl6 txt-center">
						+92 300 4444565
					</span>
                </div>
            </div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <div class="flex-col-c-m p-rl-25">
                    <div class="wrap-pic-max-s p-b-25 p-t-5">
                        <img src="{{asset('assets/images/icons/icon-mail-03.png')}}" alt="IMG">
                    </div>

                    <h5 class="txt-m-114 cl3 txt-center p-b-9">
                        Emaill contact
                    </h5>

                    <span class="txt-s-101 cl6 txt-center">
						gondalricemills@gmail.com
					</span>

                    <span class="txt-s-101 cl6 txt-center">
						sales@gondalrice.com

					</span>
                </div>	</div>

            <div class="col-sm-6 col-lg-3 p-b-50">
                <div class="flex-col-c-m p-rl-25">
                    <div class="wrap-pic-max-s p-b-25">
                        <img src="{{asset('assets/images/icons/icon-web.png')}}" alt="IMG">
                    </div>

                    <h5 class="txt-m-114 cl3 txt-center p-b-9">
                        Website
                    </h5>

                    <span class="txt-s-101 cl6 txt-center">
						www.GondalRice.com
					</span>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('scripts')
    <!--===============================================================================================-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
    <script src="{{asset('assets/js/map-custom.js')}}"></script>
    <!--===============================================================================================-->
@endsection
