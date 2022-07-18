@extends('layout.app')
@section('content')
    <main>
        <!--? slider Area Start-->
        <div class="slider-area position-relative">
            <div class="slider-active">
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay="0.2s">{{ __('messages.home-title') }}</h1>
                                    <p data-animation="fadeInLeft" data-delay="0.4s">
                                        {{ __('messages.home-title-description') }}</p>
                                    <a href="#" class="btn hero-btn" data-animation="fadeInLeft"
                                        data-delay="0.7s">{{ __('messages.contact-home') }} <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Single Slider -->
                <div class="single-slider slider-height d-flex align-items-center">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-7 col-lg-9 col-md-8 col-sm-9">
                                <div class="hero__caption">
                                    <h1 data-animation="fadeInLeft" data-delay="0.2s">{{ __('messages.home-title') }}
                                    </h1>
                                    <p data-animation="fadeInLeft" data-delay="0.4s">
                                        {{ __('messages.home-title-description') }}</p>
                                    <a href="#" class="btn hero-btn" data-animation="fadeInLeft"
                                        data-delay="0.7s">{{ __('messages.contact-home') }} <i
                                            class="ti-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Video icon -->
            <div class="video-icon">
                <a class="popup-video btn-icon" href="https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2F100081344250484%2Fvideos%2F729715184738553%2F&show_text=false&width=476&t=0https://www.facebook.com/100081344250484/videos/729715184738553/" data-animation="bounceIn"
                    data-delay=".4s"><i class="fas fa-play"></i></a>
            </div>
        </div>
        <!-- slider Area End-->
        <!--? About 1 Start-->
        <section class="about-low-area section-padding40">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-xl-6 col-lg-6 col-md-10">
                        <div class="about-caption mb-50">
                            <!-- Section Tittle -->
                            <div class="section-tittle mb-35">
                                <span class="element">{{ __('messages.about-us') }}</span>
                                <h2>{{ __('messages.company') }}</h2>
                            </div>
                            <p style="text-align: justify">{{ __('messages.about-us-description') }}</p>
                        </div>
                        <div class="row">
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="experience">
                                    <span>45</span>
                                    <p>{{ __('messages.projects-clients') }}</p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                                <div class="experience">
                                    <span>127</span>
                                    <p>{{ __('messages.projects-deliveried') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-6 col-md-9 offset-md-1 offset-sm-1">
                        <div class="about-right-cap">
                            <div class="about-right-img">
                                <img src="img/gallery/about1.jpeg" alt="solopar-fundações-cravaçãoe-sondagens">
                            </div>
                            <div class="img-cap">
                                <span>2013</span>
                                <p>{{ __('messages.years-created') }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- About  End-->
        <!--? Gallery Area Start -->
        @component('componentes.gallery')
        @endcomponent
        <!-- Gallery Area End -->
        <!--? Categories Area Start -->
        @component('componentes.mission')
        @endcomponent

        <!-- cat End -->
        <!-- Services Area start -->
        {{-- <div class="service-area section-bg" data-background="img/gallery/section_bg01.png">
        <div class="container">
            <div class="row align-items-end no-gutters">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-main position-relative">
                        <div class="single-wrapper active">
                            <div class="single-services ">
                                <span>01.</span>
                                <h4>Building Yead</h4>
                                <p>We collect and analyze information about your general usage of the website to the products services and courses.</p>
                            </div>
                            <div class="services-btn">
                                <a href="project.html">View More</a>
                            </div>
                        </div>
                        <span class="transparrent-btn active position-absolute">02. Meghna Bridge</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-main position-relative ">
                        <div class="single-wrapper hide">
                            <div class="single-services ">
                                <span>02.</span>
                                <h4>Meghna Bridge</h4>
                                <p>We collect and analyze information about your general usage of the website to the products services and courses.</p>
                            </div>
                            <div class="services-btn">
                                <a href="project.html">View More</a>
                            </div>
                        </div>
                        <span class="transparrent-btn position-absolute">02. Meghna Bridge</span>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="single-main position-relative">
                        <div class="single-wrapper hide">
                            <div class="single-services ">
                                <span>03.</span>
                                <h4>Kalis Vadru</h4>
                                <p>We collect and analyze information about your general usage of the website to the products services and courses.</p>
                            </div>
                            <div class="services-btn">
                                <a href="project.html">View More</a>
                            </div>
                        </div>
                        <span class="transparrent-btn position-absolute">03. Kalis Vadru</span>
                    </div>
                </div>
            </div>
        </div>
        </div> --}}
        <!-- Services Area End -->
        <!-- Want To work -->
        @component('componentes.call-to-action')
        @endcomponent

        <!-- Want To work End -->
        <!-- Contact form Start -->
        <div class="contact-form testimonial-area section-padding40 mb-40">
            <div class="container">
                <!-- Section Tittle -->
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10">
                        <div class="section-tittle text-center mb-100">
                            <span class="element">{{ __('messages.projects') }}</span>
                            <h2>{{ __('messages.projects-title') }}</h2>
                        </div>
                    </div>
                </div>
                <div class="row no-gutters">
                    <div class="col-lg-6 col-md-12">
                        <!-- Testimonial Start -->
                        <div class="h1-testimonial-active">
                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                <div class="testimonial-caption">
                                    <p>{{ __('messages.testimonial-caption-1') }}</p>
                                    <div class="rattiong-caption">
                                        <span>{{ __('messages.service1') }}</span>
                                    </div>
                                </div>
                            </div>
                            <!-- Single Testimonial -->
                            <div class="single-testimonial">
                                <div class="testimonial-caption">
                                    <p>{{ __('messages.testimonial-caption-2') }}</p>
                                    <div class="rattiong-caption">
                                        <span>{{ __('messages.service2') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="testimonial-caption">
                                    <p>{{ __('messages.testimonial-caption-3') }}</p>
                                    <div class="rattiong-caption">
                                        <span>{{ __('messages.service3') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="testimonial-caption">
                                    <p>{{ __('messages.testimonial-caption-4') }}</p>
                                    <div class="rattiong-caption">
                                        <span>{{ __('messages.service4') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <!-- slider -->
                        <div class="single-man-slider">
                            <div class="man-slider-active">
                                <div class="single-mam-img">
                                    <img src="img/gallery/man1.png" alt="solopar-fundações-cravaçãoe-sondagens">
                                </div>
                                <div class="single-mam-img">
                                    <img src="img/gallery/man2.png" alt="solopar-fundações-cravaçãoe-sondagens">
                                </div>
                                <div class="single-mam-img">
                                    <img src="img/gallery/man3.png" alt="solopar-fundações-cravaçãoe-sondagens">
                                </div>
                                <div class="single-mam-img">
                                    <img src="img/gallery/man4.png" alt="solopar-fundações-cravaçãoe-sondagens">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <!-- galary -->
                        <div class="single-gallery">
                            <div class="gallery-img" style="background-image: url(img/gallery/gallery2.png);"></div>
                            <div class="thumb-content-box">
                                <div class="thumb-content">
                                    <h3><a href="#">{{ __('messages.help') }}</a></h3>
                                    <p>{{__('messages.help-2')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @component('componentes.form')
                    @endcomponent
                </div>
            </div>
        </div>
        <!-- Contact form End -->
        <!--? Blog Area Start -->
        {{-- <section class="home-blog-area pb-bottom">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="section-tittle mb-100">
                        <span class="element">From News</span>
                        <h2>News & Media center</h2>
                        <p>We collect and analyze information about your general usage of the website products services and courses.</p>
                        <a href="blog_details.html" class="all-btn">View All</a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="img/gallery/home-blog1.png" alt="solopar-fundações-cravaçãoe-sondagens">
                            </div>
                            <div class="blog-cap">
                                <p>22 Apr 2020</p>
                                <h3><a href="blog_details.html">We might track your usage patterns to see</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <img src="img/gallery/home-blog2.png" alt="solopar-fundações-cravaçãoe-sondagens">
                            </div>
                            <div class="blog-cap">
                                <p>22 Apr 2020</p>
                                <h3><a href="blog_details.html">The massive stadium screens at the MCG</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
        <!-- Blog Area End -->
        <!--?  Map Area start  -->
        <section class="Map-area">
            <div class="mapouter">
                <div class="gmap_canvas"><iframe width="1080" height="530" id="gmap_canvas"
                        src="https://maps.google.com/maps?q=Rua%20Magdalena%20de%20Almeida,%20224%20%20Cap%C3%A3o%20Raso%20%E2%80%93%2081130260%20%E2%80%93%20Curitiba%20%E2%80%93%20PR&t=&z=13&ie=UTF8&iwloc=&output=embed"
                        frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                        href="https://fmovies-online.net">fmovies</a><br>
                    <style>
                        .mapouter {
                            position: relative;
                            text-align: center;
                            height: 530px;
                            width: "100%";
                        }
                    </style><a href="https://www.embedgooglemap.net">embedgooglemap.net</a>
                    <style>
                        .gmap_canvas {
                            overflow: hidden;
                            background: none !important;
                            height: 530px;
                            width: "100%";
                        }
                    </style>
                </div>
            </div>
        </section>
    </main>
@endsection
