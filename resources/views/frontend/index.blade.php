@include('frontend.header')
         <!-- Slider Area Start Here -->
         <section class="slick-slider-wrap-layout1">
            <div class="slick-slider-layout1">
                <div class="slick-carousel slick-content" data-slick='{
                    "slidesToShow": 1,
                    "slidesToShowTab": 1,
                    "slidesToShowMobile": 1,
                    "slidesToShowMobiles": 1,
                    "slidesToScroll": 1,
                    "speed": 1000,
                    "autoplaySpeed": 2000,
                    "dots": false,
                    "arrows": false,
                    "lazyLoad": "progressive",
                    "pauseOnHover": true,
                    "autoplay": true,
                    "centerMode": true,
                    "adaptiveHeight": false,
                    "rtl": false,
                    "asNavFor": ".slick-nav"
                    }'>
                    <div class="slick-slider">
                        <div class="item-img">
                            <img src="{{asset('frontend/img/slider/slide1-1.jpg')}}" alt="slide">
                            <div class="item-content">
                               
                            </div>
                        </div>
                    </div>
                    <div class="slick-slider">
                        <div class="item-img">
                            <img src="{{asset('frontend/img/slider/slide1-2.jpg')}}" alt="slide">
                            <div class="item-content">
                               
                            </div>
                        </div>
                    </div>
                    <div class="slick-slider">
                        <div class="item-img">
                            <img src="{{asset('frontend/img/slider/slide1-3.jpg')}}" alt="slide">
                            <div class="item-content">
                               
                            </div>
                        </div>
                    </div>
                    <div class="slick-slider">
                        <div class="item-img">
                            <img src="{{asset('frontend/img/slider/slide1-4.jpg')}}" alt="slide">
                            <div class="item-content">
                               
                            </div>
                        </div>
                    </div>
                    <div class="slick-slider">
                        <div class="item-img">
                            <img src="{{asset('frontend/img/slider/slide1-5.jpg')}}" alt="slide">
                            <div class="item-content">
                               
                            </div>
                        </div>
                    </div>
                    <div class="slick-slider">
                        <div class="item-img">
                            <img src="{{asset('frontend/img/slider/slide1-6.jpg')}}" alt="slide">
                            <div class="item-content">
                               
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-nav-wrap">
                    <div class="container">
                        <div class="slick-carousel slick-nav" data-slick='{
                            "slidesToShow": 6,
                            "slidesToShowTab": 5,
                            "slidesToShowMobile": 3,
                            "slidesToShowMobiles": 2,
                            "slidesToScroll": 1,
                            "speed": 1000,
                            "autoplaySpeed": 2000,
                            "dots": false,
                            "arrows": false,
                            "lazyLoad": "progressive",
                            "pauseOnHover": true,
                            "autoplay": true,
                            "focusOnSelect": true,
                            "centerMode": false,
                            "adaptiveHeight": false,
                            "rtl": false,
                            "asNavFor": ".slick-content",
                            "prevArrow": "<span class=\"slick-prev slick-navigation\"><i class=\"flaticon-back\"></i></span>",
                            "nextArrow": "<span class=\"slick-next slick-navigation\"><i class=\"flaticon-next\"></i></span>"
                            }'>
                            <div class="nav-item">
                                <div class="item-icon">
                                    <i class="flaticon-roof-4"></i>
                                </div>
                                <h4 class="item-title">Inspection</h4>
                            </div>
                            <div class="nav-item">
                                <div class="item-icon">
                                    <i class="flaticon-roof"></i>
                                </div>
                                <h4 class="item-title">Siding</h4>
                            </div>
                            <div class="nav-item">
                                <div class="item-icon">
                                    <i class="flaticon-roof-1"></i>
                                </div>
                                <h4 class="item-title">Replacement</h4>
                            </div>
                            <div class="nav-item">
                                <div class="item-icon">
                                    <i class="flaticon-roof-3"></i>
                                </div>
                                <h4 class="item-title">Insulation</h4>
                            </div>
                            <div class="nav-item">
                                <div class="item-icon">
                                    <i class="flaticon-roof-2"></i>
                                </div>
                                <h4 class="item-title">Gutters</h4>
                            </div>
                            <div class="nav-item">
                                <div class="item-icon">
                                    <i class="flaticon-broken-house"></i>
                                </div>
                                <h4 class="item-title">Roof Repair</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Slider Area End Here -->
         
    
      <!-- About Area Start Here -->
        <section class="about-wrap-layout5">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-lg-11 col-12">
                        <div class="about-box-layout8">
                            <div class="item-content">
                                <h2 class="item-title">We Have Experienced  Working People</h2>
                                <p>Bhen an unknown printer took a galley of type and are scrambled it to make a type 
                                    specimen book. It haeys urvived notbut also the leap electronic type setting remaining 
                                    essentially.Bhen an unknown printer took a galley of type and are scrambled it to make 
                                    a type specnotbut also the leap electronic.</p>
                                <ul class="list-item">
                                    <li><i class="fas fa-check"></i>Expert &amp; Professional Engineers</li>
                                    <li><i class="fas fa-check"></i>We are Award Winning Company</li>
                                    <li><i class="fas fa-check"></i>Fully Satisfaction Guarantee</li>
                                    <li><i class="fas fa-check"></i>35 + Successfull Projects done</li>

                                </ul>
                            </div>
                            <div class="item-img">
                                <img src="{{asset('frontend/img/about/about3.jpg')}}" alt="About">
                                <div class="item-icon">
                                    <a class="play-btn popup-youtube" href="https://www.youtube.com/watch?v=1iIZeIy7TqM">
                                        <i class="flaticon-play-arrow"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Area End Here --> 
        <!-- Project Area Start Here -->
        <section class="project-wrap-layout3">
            <div class="project-box-layout3">
                <div class="heading-layout1">
                    <div class="item-subtitle">Working Projects</div>
                    <h2>Our Latest Projects</h2>
                </div>
                <div class="rc-carousel nav-control-layout2" data-loop="true" data-center="true" data-items="10" data-margin="50"
                    data-autoplay="false" data-autoplay-timeout="3000" data-smart-speed="1000" data-dots="false"
                    data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
                    data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false"
                    data-r-small="3" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3"
                    data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="true"
                    data-r-large-dots="false" data-r-extra-large="4" data-r-extra-large-nav="true"
                    data-r-extra-large-dots="false">
                    <div class="project-single-content">
                        <div class="item-img">
                            <img src="img/project/project13.jpg" alt="Thumbnail">
                        </div>
                        <div class="item-content">
                            <div class="item-heading">
                                <h3 class="item-title"><a href="single-project1.html">Commercial Roofing</a></h3>
                                <div class="item-tag">
                                    <a href="#">Construction,</a>
                                    <a href="#">Siding</a>
                                </div>
                            </div>
                            <a href="single-project1.html" class="btn-fill-md bg-textprimary text-primarytext">DETAILS</a>
                        </div>
                    </div>
                    <div class="project-single-content">
                        <div class="item-img">
                            <img src="{{asset('frontend/img/project/project14.jpg')}}" alt="Thumbnail">
                        </div>
                        <div class="item-content">
                            <div class="item-heading">
                                <h3 class="item-title"><a href="single-project1.html">Residential Roofing</a></h3>
                                <div class="item-tag">
                                    <a href="#">Construction,</a>
                                    <a href="#">Siding</a>
                                </div>
                            </div>
                            <a href="single-project1.html" class="btn-fill-md bg-textprimary text-primarytext">DETAILS</a>
                        </div>
                    </div>
                    <div class="project-single-content">
                        <div class="item-img">
                            <img src="{{asset('frontend/img/project/project15.jpg')}}" alt="Thumbnail">
                        </div>
                        <div class="item-content">
                            <div class="item-heading">
                                <h3 class="item-title"><a href="single-project1.html">Residential Roofing</a></h3>
                                <div class="item-tag">
                                    <a href="#">Construction,</a>
                                    <a href="#">Siding</a>
                                </div>
                            </div>
                            <a href="single-project1.html" class="btn-fill-md bg-textprimary text-primarytext">DETAILS</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Project Area End Here -->
        <!-- Call To Action Area Start Here -->
        <section class="action-wrap-layout1 bg-common" data-bg-image="{{asset('frontend/img/figure/banner-shape.png')}}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9">
                        <div class="action-box-layout1">
                            <h2 class="item-title">Get Your Roofing Project Started Today!</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 d-flex justify-content-lg-end justify-content-center">
                        <div class="action-box-layout1">
                        <a href="#" class="btn-fill-xl box-shadow bg-textprimary text-accent">GET A QUOTE<i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call To Action Area End Here -->
       
        <!-- Testimonial Area Start Here -->
        <section class="testimonial-wrap-layout1 bg-aash bg-common" data-bg-image="{{asset('img/figure/bg-banner.png')}}">
            <div class="container">
                <div class="heading-layout1">
                    <div class="item-subtitle">Testimonials</div>
                    <h2>Valuable Clients Reviews</h2>
                </div>
                <div class="rc-carousel dot-control-layout1" data-loop="true" data-items="10" data-margin="30"
                data-autoplay="false" data-autoplay-timeout="3000" data-smart-speed="1000" data-dots="true"
                data-nav="false" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="false"
                data-r-x-small-dots="true" data-r-x-medium="1" data-r-x-medium-nav="false" data-r-x-medium-dots="true"
                data-r-small="1" data-r-small-nav="false" data-r-small-dots="true" data-r-medium="2"
                data-r-medium-nav="false" data-r-medium-dots="true" data-r-large="2" data-r-large-nav="false"
                data-r-large-dots="true" data-r-extra-large="2" data-r-extra-large-nav="false"
                data-r-extra-large-dots="true">
                    <div class="testimonial-box-layout1 bg-textprimary">
                        <div class="media media-none--xs">
                            <div class="item-img">
                                <img src="{{asset('frontendimg/figure/testimonial.jpg')}}" class="media-img-auto" alt="feedback">
                            </div>
                            <div class="media-body">
                                <h3 class="item-title">Mark Steven</h3>
                                <div class="item-subtitle">Architecture</div>
                                <ul class="item-rating">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <p>“ Wimply dummy text of the printing and typesetting industry Lorem Ipsum has been 
                            the in printing and type setting indus tryprinting and tprinting and type setting 
                            industry ”</p>
                    </div>
                    <div class="testimonial-box-layout1 bg-textprimary">
                        <div class="media media-none--xs">
                            <div class="item-img">
                                <img src="{{asset('frontend/img/figure/testimonial1.jpg')}}" class="media-img-auto" alt="feedback">
                            </div>
                            <div class="media-body">
                                <h3 class="item-title">Alexandrio Rojo</h3>
                                <div class="item-subtitle">Architecture</div>
                                <ul class="item-rating">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <p>“ Wimply dummy text of the printing and typesetting industry Lorem Ipsum has been 
                            the in printing and type setting indus tryprinting and tprinting and type setting 
                            industry ”</p>
                    </div>
                    <div class="testimonial-box-layout1 bg-textprimary">
                        <div class="media media-none--xs">
                            <div class="item-img">
                                <img src="{{asset('frontend/img/figure/testimonial.jpg')}}" class="media-img-auto" alt="feedback">
                            </div>
                            <div class="media-body">
                                <h3 class="item-title">Mark Steven</h3>
                                <div class="item-subtitle">Architecture</div>
                                <ul class="item-rating">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <p>“ Wimply dummy text of the printing and typesetting industry Lorem Ipsum has been 
                            the in printing and type setting indus tryprinting and tprinting and type setting 
                            industry ”</p>
                    </div>
                    <div class="testimonial-box-layout1 bg-textprimary">
                        <div class="media media-none--xs">
                            <div class="item-img">
                                <img src="{{asset('frontend/img/figure/testimonial1.jpg')}}" class="media-img-auto" alt="feedback">
                            </div>
                            <div class="media-body">
                                <h3 class="item-title">Alexandrio Rojo</h3>
                                <div class="item-subtitle">Architecture</div>
                                <ul class="item-rating">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <p>“ Wimply dummy text of the printing and typesetting industry Lorem Ipsum has been 
                            the in printing and type setting indus tryprinting and tprinting and type setting 
                            industry ”</p>
                    </div>
                    <div class="testimonial-box-layout1 bg-textprimary">
                        <div class="media media-none--xs">
                            <div class="item-img">
                                <img src="{{asset('frontend/img/figure/testimonial.jpg')}}" class="media-img-auto" alt="feedback">
                            </div>
                            <div class="media-body">
                                <h3 class="item-title">Mark Steven</h3>
                                <div class="item-subtitle">Architecture</div>
                                <ul class="item-rating">
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                    <li><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                        </div>
                        <p>“ Wimply dummy text of the printing and typesetting industry Lorem Ipsum has been 
                            the in printing and type setting indus tryprinting and tprinting and type setting 
                            industry ”</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial Area End Here -->
       
        <!-- Blog Area End Here -->
        {{-- <!-- Brand Area Start Here -->
        <section class="brand-wrap-layout2">
            <div class="container">
                <div class="rc-carousel nav-control-layout1" data-loop="true" data-items="10" data-margin="30"
                data-autoplay="true" data-autoplay-timeout="3000" data-smart-speed="1000" data-dots="false"
                data-nav="true" data-nav-speed="false" data-r-x-small="1" data-r-x-small-nav="true"
                data-r-x-small-dots="false" data-r-x-medium="2" data-r-x-medium-nav="true" data-r-x-medium-dots="false"
                data-r-small="3" data-r-small-nav="true" data-r-small-dots="false" data-r-medium="3"
                data-r-medium-nav="true" data-r-medium-dots="false" data-r-large="3" data-r-large-nav="true"
                data-r-large-dots="false" data-r-extra-large="4" data-r-extra-large-nav="true"
                data-r-extra-large-dots="false">
                    <div class="brand-box-layout2">
                        <div class="item-img">
                            <img src="{{asset('frontend/img/brand/brand1.png')}}" alt="Brand">
                        </div>
                    </div>
                    <div class="brand-box-layout2">
                        <div class="item-img">
                            <img src="{{asset('frontend/img/brand/brand2.png')}}" alt="Brand">
                        </div>
                    </div>
                    <div class="brand-box-layout2">
                        <div class="item-img">
                            <img src="{{asset('frontend/img/brand/brand3.png')}}" alt="Brand">
                        </div>
                    </div>
                    <div class="brand-box-layout2">
                        <div class="item-img">
                            <img src="{{asset('frontendimg/brand/brand4.png')}}" alt="Brand">
                        </div>
                    </div>
                    <div class="brand-box-layout2">
                        <div class="item-img">
                            <img src="{{asset('frontend/img/brand/brand2.png')}}" alt="Brand">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Brand Area End Here --> --}}
        @include('frontend.footer')