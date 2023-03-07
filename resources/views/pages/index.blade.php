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
                                    <a href="https://wa.me/+5541997472046?" class="btn hero-btn" data-animation="fadeInLeft"
                                        data-delay="0.7s">{{ __('messages.contact-home') }} 
                                        <i class="ti-arrow-right"></i>
                                    </a>
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
                                    <a href="https://wa.me/+5541997472046?" class="btn hero-btn" data-animation="fadeInLeft"
                                        data-delay="0.7s">{{ __('messages.contact-home') }} 
                                        <i class="ti-arrow-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
                            <span class="element">{{ __('messages.clientes') }}</span>
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
                                    <p>{{ __('messages.testimonial-1') }}</p>
                                    <div class="rattiong-caption">
                                        <span>{{ __('messages.testimonial-name-1') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="testimonial-caption">
                                    <p>{{ __('messages.testimonial-2') }}</p>
                                    <div class="rattiong-caption">
                                        <span>{{ __('messages.testimonial-name-2') }}</span>
                                    </div>
                                </div>
                            </div><div class="single-testimonial">
                                <div class="testimonial-caption">
                                    <p>{{ __('messages.testimonial-3') }}</p>
                                    <div class="rattiong-caption">
                                        <span>{{ __('messages.testimonial-name-3') }}</span>
                                    </div>
                                </div>
                            </div><div class="single-testimonial">
                                <div class="testimonial-caption">
                                    <p>{{ __('messages.testimonial-4') }}</p>
                                    <div class="rattiong-caption">
                                        <span>{{ __('messages.testimonial-name-4') }}</span>
                                    </div>
                                </div>
                            </div><div class="single-testimonial">
                                <div class="testimonial-caption">
                                    <p>{{ __('messages.testimonial-5') }}</p>
                                    <div class="rattiong-caption">
                                        <span>{{ __('messages.testimonial-name-5') }}</span>
                                    </div>
                                </div>
                            </div><div class="single-testimonial">
                                <div class="testimonial-caption">
                                    <p>{{ __('messages.testimonial-6') }}</p>
                                    <div class="rattiong-caption">
                                        <span>{{ __('messages.testimonial-name-6') }}</span>
                                    </div>
                                </div>
                            </div><div class="single-testimonial">
                                <div class="testimonial-caption">
                                    <p>{{ __('messages.testimonial-7') }}</p>
                                    <div class="rattiong-caption">
                                        <span>{{ __('messages.testimonial-name-7') }}</span>
                                    </div>
                                </div>
                            </div><div class="single-testimonial">
                                <div class="testimonial-caption">
                                    <p>{{ __('messages.testimonial-8') }}</p>
                                    <div class="rattiong-caption">
                                        <span>{{ __('messages.testimonial-name-8') }}</span>
                                    </div>
                                </div>
                            </div><div class="single-testimonial">
                                <div class="testimonial-caption">
                                    <p>{{ __('messages.testimonial-9') }}</p>
                                    <div class="rattiong-caption">
                                        <span>{{ __('messages.testimonial-name-9') }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
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
                                    <h3><a href="https://wa.me/+5541997472046?   ">{{ __('messages.help') }}</a></h3>
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
