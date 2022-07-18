@extends('layout.app')
@section('content')
<main>
    <!--? Hero Start -->
    <div class="slider-area2 section-bg2" data-background="img/hero/hero2.webp">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2">
                            <h2>{{__('messages.about-us')}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!--? About 1 Start-->
    <section class="about-low-area section-padding40">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-xl-6 col-lg-6 col-md-10">
                    <div class="about-caption mb-50">
                        <!-- Section Tittle -->
                        <div class="section-tittle mb-35">
                            <span class="element">{{__('messages.about-us')}}</span>
                            <h2>{{__('messages.company')}}</h2>
                        </div>
                        <p style="text-align: justify">{{__('messages.about-us-description')}}</p>
                    </div>
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="experience">
                                <span>45</span>
                                <p>{{__('messages.projects-clients')}}</p>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <div class="experience">
                                <span>127</span>
                                <p>{{__('messages.projects-deliveried')}}</p>
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
                            <p>{{__('messages.years-created')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About  End-->
    <!-- Want To work -->
    <section class="wantToWork-area" style="background-color:#ff6600">
        <div class="container">
            <div class="wants-wrapper w-padding2">
                <div class="row align-items-center justify-content-between">
                    <div class="col-xl-8 col-lg-9 col-md-8">
                        <div class="wantToWork-caption wantToWork-caption2">
                            <h2 style="color: white;">{{__('messages.quote')}}</h2>
                            <p style="color: white;">{{__('messages.quote-description')}}</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4">
                        <a href="{{route('contact')}}" class="btn w-btn wantToWork-btn" style="background: white; color:#ff6600">{{__('messages.quote')}} <i class="ti-arrow-right" style="color:#ff6600""></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Want To work End -->
    <!-- Contact form Start -->
    <div class="contact-form testimonial-area section-padding40 mb-40">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-lg-6 col-md-12">
                    <!-- galary -->
                    <div class="single-gallery">
                        <div class="gallery-img" style="background-image: url(img/gallery/gallery2.png);"></div>
                        <div class="thumb-content-box">
                            <div class="thumb-content">
                                <h3><a href="#">{{__('messages.help')}}</a></h3>
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
</main>
@endsection