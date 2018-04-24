@extends('layouts.site')

@section('content')
    <div class="home-sec" id="home">
        <div class="overlay">
            <div class="container">
                <div class="row text-center ">

                    <div class="col-lg-12  col-md-12 col-sm-12">

                        <div class="flexslider set-flexi" id="main-section">
                            <ul class="slides move-me">

                                <li>
                                    <h3>Delivering Quality Education</h3>
                                    <h1>UNMATCHED APPROACH</h1>
                                    <a href="#features-sec" class="btn btn-primary btn-lg">
                                        GET AWESOME
                                    </a>
                                    <a href="#features-sec" class="btn btn-danger btn-lg">
                                        FEATURE LIST
                                    </a>
                                </li>

                            </ul>
                        </div>


                    </div>

                </div>
            </div>
        </div>

    </div>
    <!--HOME SECTION END-->

    <div class="tag-line">
        <div class="container">
            <div class="row  text-center">
                <div class="containerCentered container">
                    <div class="center-block span8 col-sm-4" style="margin-left: 25em; display: contents">
                        <h1 class="pulloutHeadline ">Get your teaching dreams going.</h1>
                        <h2 class="pulloutPara">Register your teaching experience in your TeachConnet profile  for free and get connected to matching school vacancies in in schools across the country at no cost.</h2>
                        <h2>For School Administrators, register Your School Profile and Access qualified teachers to fill your school teaching vacancies all for free.</h2>
                        <a data-pa-click="" class="btn btn-blue-border" data-ga-category="Consumer - Uncookied HP" data-ga-action="Click" data-ga-opt_label="Control - Module 2 - CTA 1" href="http://walimu4ne.test/register" pa-tracked="1">Register Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--HOME SECTION TAG LINE END-->
    <section class="row-fluid row panel c1 blue reverseLink three-panel" id="bottomPanel" style="background: #11244b; margin-block-end: -5em; font-size: 20px;border: 25px solid #e9e9f000; color: #FFFFFF;"   >

        <header class="containerCentered container center-text">
            <div class="paypal-devices-home"></div>
            <h2 class="pulloutHeadline" style="margin-left:5em;">Make your teaching skill enrich others through Teachconnect.</h2>
        </header>
        <div class="containerCentered container">
            <div class=" span4 col-sm-4">
                <h3 class="contentHead medium">Make your skills usefull</h3>
                <p class="contentPara">Teachers play an extraordinary part in the lives of children for the formative years of their development and the importance of teachers is something that cannot be understated. They involve themselves in moulding their students into responsible citizens of their country.</p>
            </div>
            <div class=" span4 col-sm-4">

                <h3 class="contentHead medium">Accepted country wide</h3>
                <p class="contentPara">Use teachConnect to connect with over 500 schools in the country both, private schools and public schools at any level.</p>

            </div>
            <div class=" span4 col-sm-4">
                <h3 class="contentHead medium">Importance of teachers</h3>
                <p class="contentPara">Teaching is a sense of satisfaction, inspiration, motivation, happiness, completeness , values, respect, joy and at times regret, that you couldn’t do more. There’s a feeling of responsibility, a requirement of reciprocation, a feedback and some pulls and pushes. It’s a job for some, but for the rest teaching is preaching.</p>
            </div>
        </div>
    </section>
        <!--/.HEADER LINE END-->


        <div class="row set-row-pad">
            <div class="col-lg-6 col-md-6 col-sm-6 " data-scroll-reveal="enter from the bottom after 0.4s">
                <img src="{{ asset('site/img/building.jpg') }}" class="img-thumbnail" />
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-lg-offset-1 col-md-offset-1 col-sm-offset-1">

                <div class="alert alert-info" data-scroll-reveal="enter from the bottom after 1.1s">
                       <span style="font-size:40px;">
                          <strong> 2500 + </strong>
                           <hr />
                           <b>Teaching Vacancies</b>
                       </span>
                </div>
            </div>


        </div>
    </div>
    <!-- COURSES SECTION END-->

    <div id="contact-sec">
        <div class="overlay">
            <div class="container set-pad">
                <div class="row text-center">
                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-sm-8 col-md-offset-2 col-sm-offset-2">
                        <h1 data-scroll-reveal="enter from the bottom after 0.1s" class="header-line">CONTACT US </h1>
                        <p data-scroll-reveal="enter from the bottom after 0.3s">
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo.
                            Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                            Aenean commodo.
                        </p>
                    </div>

                </div>
                <!--/.HEADER LINE END-->
                <div class="row set-row-pad" data-scroll-reveal="enter from the bottom after 0.5s">


                    <div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-8 col-sm-offset-2">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control " required="required" placeholder="Your Name" />
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control " required="required" placeholder="Your Email" />
                            </div>
                            <div class="form-group">
                            <textarea name="message" required="required" class="form-control" style="min-height: 150px;"
                                      placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-info btn-block btn-lg">SUBMIT REQUEST</button>
                            </div>

                        </form>
                    </div>


                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row set-row-pad">
            <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1 "
                 data-scroll-reveal="enter from the bottom after 0.4s">

                <h2><strong>Our Location </strong></h2>
                <hr />
                <div>
                    <h4>Pioneer House, Kimathi Street,</h4>
                    <h4>Nairobi.</h4>
                    <h4><strong>Call:</strong> +254 712131415 </h4>
                    <h4><strong>Email: </strong>teachfront@sahan.co.ke</h4>
                </div>


            </div>
            <div class="col-lg-4 col-md-4 col-sm-4   col-lg-offset-1 col-md-offset-1 col-sm-offset-1"
                 data-scroll-reveal="enter from the bottom after 0.4s">

                <h2><strong>Social Conectivity </strong></h2>
                <hr />
                <div>
                    <a href="#"> <img src="{{ asset('site/img/Social/facebook.png') }}" alt="" /> </a>
                    <a href="#"> <img src="{{ asset('site/img/Social/google-plus.png') }}" alt="" /></a>
                    <a href="#"> <img src="{{ asset('site/img/Social/twitter.png') }}" alt="" /></a>
                </div>
            </div>


        </div>
    </div>
    <!-- CONTACT SECTION END-->
@endsection