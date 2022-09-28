@include('frontend.header');
        <!-- Inne Page Banner Area Start Here -->
        <section class="inner-page-banner bg-common" data-bg-image="{{asset('frontend/img/figure/breadcumb.jpg')}}">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcrumbs-area">
                            <h1>All Projects</h1>
                            <ul>
                                <li>
                                    <a href="index-2.html">Home</a>
                                </li>
                                <li>Projects</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Inne Page Banner Area End Here --> 
        <!-- Projects Area Start Here -->
        <section class="project-wrap-layout5">
            <div class="container">
                <div class="heading-layout1">
                    <h2>We Have Done Many Others Work <span>Let’s See Our Projects</span></h2>
                </div>
                <div class="row">
                    @foreach($products as $p)
                    <div class="col-lg-4 col-md-6">
                        <div class="project-box-layout5">
                            <div class="item-img">
                                <img src="..\admin\product\{{$p->image}}" alt="Project Thumb">
                            </div>
                            <div class="item-content">
                                <div class="item-heading">
                                    <div class="item-subtitle">{{Str::limit($p->description,80)}}</div>
                                    <h3 class="item-title"><a href="#">{{$p->product_name}}</a></h3>
                                </div>
                                <div class="item-btn-wrap">
                                    <a href="#" class="item-btn"><i class="fas fa-plus"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                   
                </div>
            </div>
        </section>
        <!-- Projects Area End Here -->
        @include('frontend.footer');