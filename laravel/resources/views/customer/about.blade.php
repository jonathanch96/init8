@extends('customer.master')

@section('content')
<!-- Breadcrumb Begin -->
<div class="breadcrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb__option">
                    <a href="./index.html"><span class="fa fa-home"></span> Home</a>
                    <span>About</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb End -->

<!-- About Section Begin -->
<section class="about-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about__img">
                    <img src="{{asset('assets/img/about-us.png')}}" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__text">
                    <h2>Welcom to Deerhost</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
                    viverra maecenas accumsan lacus vel facilisis.</p>
                    <div class="about__achievement">
                        <div class="about__achieve__item">
                            <span class="fa fa-user-o"></span>
                            <h4 class="achieve-counter">2468</h4>
                            <p>Clients</p>
                        </div>
                        <div class="about__achieve__item">
                            <span class="fa fa-edit"></span>
                            <h4 class="achieve-counter">2468</h4>
                            <p>Domains</p>
                        </div>
                        <div class="about__achieve__item">
                            <span class="fa fa-clone"></span>
                            <h4 class="achieve-counter">2468</h4>
                            <p>Server</p>
                        </div>
                        <div class="about__achieve__item">
                            <span class="fa fa-cog"></span>
                            <h4 class="achieve-counter">2468</h4>
                            <p>Installs</p>
                        </div>
                    </div>
                    <a href="#" class="primary-btn">Get started now</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- About Section End -->

<!-- Feature Section Begin -->
<section class="feature-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>Our Hosting Features</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="feature__item">
                    <span class="fa fa-cloud-upload"></span>
                    <h5>Auto update</h5>
                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="feature__item">
                    <span class="fa fa-sliders"></span>
                    <h5>Optimized software</h5>
                    <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="feature__item">
                    <span class="fa fa-database"></span>
                    <h5>Daily backups</h5>
                    <p>Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="feature__item">
                    <span class="fa fa-globe"></span>
                    <h5>Wide networking</h5>
                    <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="feature__item">
                    <span class="fa fa-shield"></span>
                    <h5>Protected</h5>
                    <p>Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="feature__item">
                    <span class="fa fa-headphones"></span>
                    <h5>Free support</h5>
                    <p>Ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Services Section End -->

<!-- Team Section Begin -->
<section class="team-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="section-title normal-title">
                    <h3>Meet our team</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="team__btn">
                    <a href="#" class="primary-btn">View all</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="team__item">
                    <div class="team__pic">
                        <img src="{{asset('assets/img/team/team-1.jpg')}}" alt="">
                    </div>
                    <div class="team__text">
                        <h5>Sabrina Carpenter</h5>
                        <span>Chief executive officer</span>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua.</p>
                        <div class="team__social">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="team__item">
                    <div class="team__pic">
                        <img src="{{asset('assets/img/team/team-2.jpg')}}" alt="">
                    </div>
                    <div class="team__text">
                        <h5>Sabrina Carpenter</h5>
                        <span>Software engineer</span>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua.</p>
                        <div class="team__social">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="team__item">
                    <div class="team__pic">
                        <img src="{{asset('assets/img/team/team-3.jpg')}}" alt="">
                    </div>
                    <div class="team__text">
                        <h5>Sabrina Carpenter</h5>
                        <span>Support representative</span>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua.</p>
                        <div class="team__social">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="team__item">
                    <div class="team__pic">
                        <img src="{{asset('assets/img/team/team-4.jpg')}}" alt="">
                    </div>
                    <div class="team__text">
                        <h5>Sabrina Carpenter</h5>
                        <span>Product director</span>
                        <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna
                        aliqua.</p>
                        <div class="team__social">
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a>
                            <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Team Section End -->

<!-- Testimonial Section Begin -->
<section class="testimonial-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h3>Our Client say</h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="testimonial__slider owl-carousel">
                <div class="col-lg-4">
                    <div class="testimonial__item">
                        <img src="{{asset('assets/img/testimonial/testimonial-1.jpg')}}" alt="">
                        <h5>Billie Eilish</h5>
                        <span>Designer</span>
                        <p>Ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labuore
                        et dolore magna aliqua.</p>
                        <div class="testimonial__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial__item">
                        <img src="{{asset('assets/img/testimonial/testimonial-2.jpg')}}" alt="">
                        <h5>Billie Eilish</h5>
                        <span>Designer</span>
                        <p>Ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labuore
                        et dolore magna aliqua.</p>
                        <div class="testimonial__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial__item">
                        <img src="{{asset('assets/img/testimonial/testimonial-3.jpg')}}" alt="">
                        <h5>Billie Eilish</h5>
                        <span>Designer</span>
                        <p>Ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labuore
                        et dolore magna aliqua.</p>
                        <div class="testimonial__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial__item">
                        <img src="{{asset('assets/img/testimonial/testimonial-1.jpg')}}" alt="">
                        <h5>Billie Eilish</h5>
                        <span>Designer</span>
                        <p>Ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labuore
                        et dolore magna aliqua.</p>
                        <div class="testimonial__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial__item">
                        <img src="{{asset('assets/img/testimonial/testimonial-2.jpg')}}" alt="">
                        <h5>Billie Eilish</h5>
                        <span>Designer</span>
                        <p>Ipsum dolor sit amet, consectetur adipiscing elit, eiusmod tempor incididunt ut labuore
                        et dolore magna aliqua.</p>
                        <div class="testimonial__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Testimonial Section End -->
<!-- Contact Section Begin -->
<section style="padding-bottom: 100px !important;" class="contact-section spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="contact__text">
                    <h3>Contact info</h3>
                   
                    <ul>
                        <li>
                            <span class="fa fa-map-marker"></span>
                            <h5>Address</h5>
                            <p>{{setting('site.address')}}</p>
                        </li>
                        <li>
                            <span class="fa fa-mobile"></span>
                            <h5>Address</h5>
                            <p>{{setting('site.phone')}}</p>
                        </li>
                        <li>
                            <span class="fa fa-headphones"></span>
                            <h5>Email</h5>
                            <p>{{setting('site.email')}}</p>
                        </li>
                    </ul>
                    <div class="contact__social">
                        <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
                        <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
                        <a href="#" class="youtube"><i class="fa fa-youtube-play"></i></a>
                        <a href="#" class="instagram"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-8">
                <!-- https://developers.google.com/maps/documentation/embed/start -->
                <div class="map">
                    <iframe
                    src="https://www.google.com/maps/embed/v1/place?q=place_id:ChIJvTPAaAn3aS4R4Lv391B_SIg&key=AIzaSyAdJ-RT-3_vMhKBSYm8bBUX7zWfzzH2rOo"
                    height="515" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Contact Section End -->
@stop