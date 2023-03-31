@extends('layouts.frontapp')

@section('content')


       <!-- Inner Banner -->
       <div class="inner-banner inner-bg1">
            <div class="container-fluid">
                <div class="container-max">
                    <div class="inner-title">
                        <span>CONTACT US</span>
                        <h2>We’re Always Helpful <br> To Lend A Hand</h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->

        <!-- Service Area Four -->
        <div class="service-area-four pt-100 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="service-card service-card-bg-three section-bg">
                            <i class='flaticon-bankrupt'></i>
                            <a href="service-details.html">
                                <h3>Property Managment</h3>
                            </a>
                            <p class="text-break">Lorem ipsum dolor sitameem adipiscing cnsectetur adisci- mod tur adipiscing</p>
                            <a href="service-details.html" class="learn-more-btn">
                                Learn More
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="service-card service-card-bg-three active">
                            <i class='flaticon-value'></i>
                            <a href="service-details.html"> 
                                <h3>Commercial Development</h3>
                            </a>
                            <p class="text-break">Lorem ipsum dolor sitameem adipiscing cnsectetur adisci- mod tur adipiscing</p>
                            <a href="service-details.html" class="learn-more-btn">
                                Learn More
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="service-card service-card-bg-three section-bg">
                            <i class='flaticon-time-management'></i>
                            <a href="service-details.html">
                                <h3>Construction Management</h3>
                            </a>
                            <p class="text-break">Lorem ipsum dolor sitameem adipiscing cnsectetur adisci- mod tur adipiscing</p>
                            <a href="service-details.html" class="learn-more-btn">
                                Learn More
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-3 col-sm-6">
                        <div class="service-card service-card-bg-three section-bg">
                            <i class='flaticon-house'></i>
                            <a href="service-details.html">
                                <h3>Residentital Development</h3>
                            </a>
                            <p class="text-break">Lorem ipsum dolor sitameem adipiscing cnsectetur adisci- mod tur adipiscing</p>
                            <a href="service-details.html" class="learn-more-btn">
                                Learn More
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Service Area Four End -->

        <!-- Map Area Two -->
        <div class="map-area-two">
            <div class="container-fluid m-0 p-0">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1887.3734131639715!2d-96.95588917878352!3d18.89830951964275!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c4e51eb45eacad%3A0x465ac54aa2735573!2zUmluY29uIGRlbCBCb3NxdWUsIOCmleCmsOCnjeCmoeCni-CmrOCmviwg4Kat4KeH4Kaw4Ka-4KaV4KeN4Kaw4KeB4KacLCDgpq7gp4fgppXgp43gprjgpr_gppXgp4s!5e0!3m2!1sbn!2sbd!4v1594641366896!5m2!1sbn!2sbd" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <div class="contact-wrap">
                    <div class="contact-form">
                        <span>SEND MESSAGE</span>
                        <h2>Contact With Us</h2>
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <i class='bx bx-user'></i>
                                        <input type="text" name="name" id="name" class="form-control" required data-error="Please enter your name" placeholder="Your Name*">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <i class='bx bx-user'></i>
                                        <input type="email" name="email" id="email" class="form-control" required data-error="Please enter your email" placeholder="Email*">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <i class='bx bx-phone'></i>
                                        <input type="text" name="phone_number" id="phone_number" required data-error="Please enter your number" class="form-control" placeholder="Your Phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="form-group">
                                        <i class='bx bx-file'></i>
                                        <input type="text" name="msg_subject" id="msg_subject" class="form-control" required data-error="Please enter your subject" placeholder="Your Subject">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <i class='bx bx-envelope'></i>
                                        <textarea name="message" class="form-control" id="message" cols="30" rows="8" required data-error="Write your message" placeholder="Your Message"></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn default-hot-toddy">
                                        Send Message
                                        <i class='bx bx-right-arrow-alt'></i>
                                    </button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Map Area Two End -->

@endsection