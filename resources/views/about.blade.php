@extends('layouts.frontapp')

@section('content')

       <!-- Inner Banner -->
       <div class="inner-banner inner-bg6">
            <div class="container-fluid">
                <div class="container-max">
                    <div class="inner-title">
                        <span>ABOUT US</span>
                        <h2>We Have A Goal To Achieve you <br> To Your Destination</h2>    
                    </div>
                </div>
            </div>
        </div>
        <!-- Inner Banner End -->
        <hr>

        <!-- Forward Area -->
        <div class="forward-area">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 ">
                        <div class="forward-img">
                            <img src="{{asset('img/home1/1.jpg')}}" alt="Images">
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="forward-content">
                            <div class="section-title">
                                <span>Message FRom Company</span>
                                <h2>Go Forward With <b>Us</b></h2>
                                <p>
                                    Lorem ipsum dolor sit ame consectetur adipisicing elit, sed do eiusmod tempor 
                                    incididunt ut labore et dolore magna aliquaUt enim ad minim vequis nostrud exercitation 
                                </p>
                            </div>

                            <div class="signature">
                                <ul>
                                    <li>
                                        <img src="assets/img/signature.png" class="signature-img1"  alt="Images">
                                        <img src="assets/img/signature2.png" class="signature-img2"  alt="Images">
                                    </li>
                                    <li>
                                        <h3>JORDHAN LEON</h3>
                                        <span>Company Owner</span>
                                    </li>
                                </ul>
                            </div> 

                            <a href="#" class="default-btn default-bg-buttercup">
                                Finalize Meeting 
                                <i class='bx bx-right-arrow-alt'></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Forward Area End -->

        <!-- About Area -->
        <div class="about-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="about-content">
                            <div class="section-title-two">
                                <span class="section-span-bg2">Our mission & vission</span>
                                <h2>Working For You</h2>
                                <p>
                                    Lorem ipsum dolor sit ame consectetur adipisicing eli sed usmod tempor
                                    incididunt ut labore et dolore magnaenim  minim veniaquis nostrud exercitation 
                                </p>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 col-sm-6">
                                    <div class="about-card">
                                        <h3>Our Strategy</h3>
                                        <p>Lorem ipsum dolor sitameem adipiscing cnsectetur adimod tur adipiscing</p>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-sm-6">
                                    <div class="about-card">
                                        <h3>Our Mission</h3>
                                        <p>Lorem ipsum dolor sitameem adipiscing cnsectetur adimod tur adipiscing</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6">
                        <div class="about-img">
                            <img src="{{asset('img/home1/1.jpg')}}" alt="Images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- About Area End -->


        <!-- Innovation Area -->
        <div class="innovation-area pt-100 pb-70">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-xxl-6">
                        <div class="innovation-content-two">
                            <div class="section-title-two">
                                <span class="section-span-bg2">DELIVERING INNOVATION</span>
                                <h2 class="color-innovation">Sustainability Property <b class="section-color2">Goals As Expected</b></h2>
                                <p>
                                    Lorem ipsum dolor sit ame consectetur adipisicing elit, sed do eiusmod tempor 
                                    incididunt ut labore et dolore magna aliquaUt enim ad minim vequis nostrud exercitation
                                </p>
                            </div>
                            <div class="innovation-btn">
                                <a href="#" class="default-btn default-hot-toddy">View Details <i class='bx bx-right-arrow-alt'></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-5 col-xxl-6">
                        <div class="innovation-bg">
                            <div class="innovation-slider owl-carousel owl-theme">
                                <div class="innovation-item">
                                    <i class='flaticon-growth'></i>
                                    <h3>Designed Marvel</h3>
                                    <p>
                                        Lorem ipsum doconsectetur adipisicing elit sed do eiusmod tempor 
                                        incididunt ut labore et dolore magna aliqua.Ut eveniam
                                    </p>
                                </div>

                                <div class="innovation-item">
                                    <i class='flaticon-smartphone'></i>
                                    <h3>Quality Management</h3>
                                    <p>
                                        Lorem ipsum doconsectetur adipisicing elit sed do eiusmod tempor 
                                        incididunt ut labore et dolore magna aliqua.Ut eveniam
                                    </p>
                                </div>

                                <div class="innovation-item">
                                    <i class='flaticon-growth'></i>
                                    <h3>Designed Marvel</h3>
                                    <p>
                                        Lorem ipsum doconsectetur adipisicing elit sed do eiusmod tempor 
                                        incididunt ut labore et dolore magna aliqua.Ut eveniam
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Innovation Area End -->


@endsection