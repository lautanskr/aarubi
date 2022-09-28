@include('frontend.header')
        <!-- Inne Page Banner Area Start Here -->
        <section class="inner-page-banner bg-common" data-bg-image="{{asset('frontend/img/project/project1.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>About Us</h1>
                            <ul>
                                <li>
                                    <a href="{{route('home')}}">Home</a>
                                </li>
                                <li>About Us</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here --> 
        <!-- About Us Area Start Here --> 
        <section class="about-wrap-layout6">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-12">
                        <div class="heading-layout1">
                            <h2>We Are The Best Roofing Company &amp; Tightly 
                                Connected with our communities.</h2>
                            <p> 

                                We WOM are counted amongst the leading manufacturers, suppliers and exporters of Colour Coated Roofing Profile Sheets. We are committed to give quality items and long term of benefits to our clients in Domestic and International market.
                                
                                WOM Vision is to be an all inclusive presumed Engineering Metal Product Company and our goal is to make ideal use of our present day foundation, specialized aptitude past experience and information to give excellent and practical cold rolled form Products to our clients.
                                
                                Being the leading Roofing Sheets Supplier, our profile Sheet are made from the finest quality cold rolled steel coils which are coated with protected metallic and reinforced with multiple layers of organic coatings.
                                
                                Profile Sheet can be readily, bent, pressed, cut, drilled, lock seamed and stamped to suit the specific requirement without degradation in the quality of the paint.
                                </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About Us Area End Here --> 
        <!-- About Us Area Start Here --> 
        <section class="about-wrap-layout7 bg-shape-2">
            <div class="about-box-layout9">
                <div class="single-item left-item">
                    <div class="item-content">
                        <h2 class="item-title">Our History</h2>
                        <p>We are the 3rd Generation Budding family businessmen. We champion the art of progress, professionalism and the promotion of the industry. Our strong support involves winning the growing direct selling profession.

                            We at Build It on offer a worry-free solution to our clients. We go that extra-mile through our systems, process and our internal orientation to ensure that product commissioning for the project is a seamless and effortless experience for our clients.
                            
                            We have always kept client service and requirement as our priority due to which our customer retention ratio is over 90% and nearly 85% of our business comes from referrals</p>
                    </div>
                </div>
                <div class="single-item right-item">
                    <img src="{{asset('frontend/img/about/about.png')}}" alt="About Us">
                </div>
            </div>
        </section>
        <!-- About Us Area End Here --> 
        <!-- Why Choose Area Start Here -->
        <section class="why-choose-wrap-layout1">
            <div class="container">
                <div class="heading-layout1">
                    <div class="item-subtitle">Our Speciality</div>
                    <h2>Why Choose Us</h2>
                </div>
                <div class="row">
                    @foreach($about as $a)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="why-choose-box-layout1">
                            <div class="item-img">
                                <img src="..\img\about\{{$a->image}}" alt="why choose">
                            </div>
                            <div class="item-content">
                                <h3 class="item-title"> <a href="#">{{$a->title}}</a></h3>
                                <p>{{$a->description}}</p>

                            </div>
                            
                        </div>
                    </div>
                   
                    @endforeach
                    
                </div>
            </div>
        </section>
        <!-- Why Choose Area End Here -->
      
        
        <!-- Call To Action Area Start Here -->
        <section class="action-wrap-layout1 bg-common" data-bg-image="{{asset('frontend/img/figure/banner-shape.png')}}">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-9 col-12">
                        <div class="action-box-layout1">
                            <h2 class="item-title">Get Your Roofing Project Started Today!</h2>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12 d-flex justify-content-lg-end justify-content-center">
                        <div class="action-box-layout1">
                           <a href="#" class="btn-fill-xl box-shadow bg-textprimary text-accent">GET A QUOTE<i class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Call To Action Area End Here -->
        @include('frontend.footer')