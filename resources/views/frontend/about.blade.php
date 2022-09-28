@include('frontend.header');
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
                            <h2>We Won The ‘Best Roofing Company’ Award 2019 &amp; Tightly 
                                Connected with our communities.</h2>
                            <p> Simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's 
                                standard dummy text ever since the when an unknown printer took a galley of type and scrambled 
                                it to make a type specimen book. It has survived not only five centuries but also the leap into 
                                electronic typesetting, remaining essentially unchanged. </p>
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
                        <p>Wesimply dummy text offer the printing and type setting industry. Lorem Ipsum has been 
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took 
                            a galley of type and scrambled it to make a type specimen book. It has survived not 
                            only five centuries, but also the leap into electronic type aeasetting remaining essentially 
                            unchanged. It was popularised in the area tehcnology with the release.</p>
                    </div>
                </div>
                <div class="single-item right-item">
                    <img src="{{asset('fronten/img/about/about4.jpg')}}" alt="About Us">
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
                                <img src="{{asset('frontend/img/figure/why-choose.jpg')}}" alt="why choose">
                            </div>
                            <div class="item-content">
                                <h3 class="item-title"> <a href="#">Innovation</a></h3>
                                <p>When an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                                    It has survived not only five centuries.</p>
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
        @include('frontend.footer');