@extends('layout.app')
@section('content')
    {{-- <style>
        /* Slider */

        .slick-slide {
            margin: 0px 20px;
        }

        .slick-slide img {
            width: 70%;
        }

        .slick-slider {
            position: relative;
            display: block;
            box-sizing: border-box;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            -webkit-touch-callout: none;
            -khtml-user-select: none;
            -ms-touch-action: pan-y;
            touch-action: pan-y;
            -webkit-tap-highlight-color: transparent;
        }

        .slick-list {
            position: relative;
            display: block;
            overflow: hidden;
            margin: 0;
            padding: 0;
        }

        .slick-list:focus {
            outline: none;
        }

        .slick-list.dragging {
            cursor: pointer;
            cursor: hand;
        }

        .slick-slider .slick-track,
        .slick-slider .slick-list {
            -webkit-transform: translate3d(0, 0, 0);
            -moz-transform: translate3d(0, 0, 0);
            -ms-transform: translate3d(0, 0, 0);
            -o-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .slick-track {
            position: relative;
            top: 0;
            left: 0;
            display: block;
        }

        .slick-track:before,
        .slick-track:after {
            display: table;
            content: '';
        }

        .slick-track:after {
            clear: both;
        }

        .slick-loading .slick-track {
            visibility: hidden;
        }

        .slick-slide {
            display: none;
            float: left;
            height: 100%;
            min-height: 1px;
        }

        [dir='rtl'] .slick-slide {
            float: right;
        }

        .slick-slide img {
            display: block;
        }

        .slick-slide.slick-loading img {
            display: none;
        }

        .slick-slide.dragging img {
            pointer-events: none;
        }

        .slick-initialized .slick-slide {
            display: block;
        }

        .slick-loading .slick-slide {
            visibility: hidden;
        }

        .slick-vertical .slick-slide {
            display: block;
            height: auto;
            border: 1px solid transparent;
        }

        .slick-arrow.slick-hidden {
            display: none;
        }
    </style> --}}
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
        @component('componentes.gallery')
        @endcomponent
        @component('componentes.mission')
        @endcomponent

        {{-- <div class="container" style="padding-bottom:50px; padding-top:50px;">
            <section class="customer-logos slider">
                <div class="slide">
                    <img src="img/mep.jpeg">
                </div>
                <div class="slide">
                    <img src="img/SUMERA.png">
                </div>
                <div class="slide">
                    <img src="img/ikigai.png" >
                </div>
            </section>
        </div> --}}
        @component('componentes.call-to-action')
        @endcomponent
        <div class="contact-form testimonial-area section-padding40 mb-40">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 col-sm-10">
                        <div class="section-tittle text-center mb-100" id="depoimentoss">
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
                            </div>
                            <div class="single-testimonial">
                                <div class="testimonial-caption">
                                    <p>{{ __('messages.testimonial-3') }}</p>
                                    <div class="rattiong-caption">
                                        <span>{{ __('messages.testimonial-name-3') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="testimonial-caption">
                                    <p>{{ __('messages.testimonial-4') }}</p>
                                    <div class="rattiong-caption">
                                        <span>{{ __('messages.testimonial-name-4') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="testimonial-caption">
                                    <p>{{ __('messages.testimonial-5') }}</p>
                                    <div class="rattiong-caption">
                                        <span>{{ __('messages.testimonial-name-5') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="testimonial-caption">
                                    <p>{{ __('messages.testimonial-6') }}</p>
                                    <div class="rattiong-caption">
                                        <span>{{ __('messages.testimonial-name-6') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="testimonial-caption">
                                    <p>{{ __('messages.testimonial-7') }}</p>
                                    <div class="rattiong-caption">
                                        <span>{{ __('messages.testimonial-name-7') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial">
                                <div class="testimonial-caption">
                                    <p>{{ __('messages.testimonial-8') }}</p>
                                    <div class="rattiong-caption">
                                        <span>{{ __('messages.testimonial-name-8') }}</span>
                                    </div>
                                </div>
                            </div>
                            <div class="single-testimonial">
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
                                    <img src="img/gallery/man1.png" alt="solopar-fundações-cravação-e-sondagens">
                                </div>
                                <div class="single-mam-img">
                                    <img src="img/gallery/man2.png" alt="solopar-fundações-cravação-e-sondagens">
                                </div>
                                <div class="single-mam-img">
                                    <img src="img/gallery/man3.png" alt="solopar-fundações-cravação-e-sondagens">
                                </div>
                                <div class="single-mam-img">
                                    <img src="img/gallery/man4.png" alt="solopar-fundações-cravação-e-sondagens">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <!-- gallery -->
                        <div class="single-gallery">
                            <div class="gallery-img" style="background-image: url(img/gallery/gallery2.png);"></div>
                            <div class="thumb-content-box">
                                <div class="thumb-content">
                                    <h3><a href="https://wa.me/+5541997472046?   ">{{ __('messages.help') }}</a></h3>
                                    <p>{{ __('messages.help-2') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @component('componentes.form')
                    @endcomponent
                </div>
            </div>
        </div>
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

    <script src="https://code.jquery.com/jquery-2.2.0.min.js" type="text/javascript"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>
    {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> --}}

    <script>
        $(document).ready(function() {
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });
    </script>
@endsection
