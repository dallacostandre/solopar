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
                            <h2>{{ __('messages.our-services') }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!--? Categories Area Start -->
    <div class="categories-area section-padding40 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat">
                        <div class="cat-icon">
                            <img src="img/gallery/icon1.png" alt="solopar-fundações-cravaçãoe-sondagens">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">{{__('messages.service1')}}</a></h5>
                            <p>{{__('messages.get-to-know-more-description-1')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat">
                        <div class="cat-icon">
                            <img src="img/gallery/icon2.png" alt="solopar-fundações-cravaçãoe-sondagens">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">{{__('messages.service2')}}</a></h5>
                            <p>{{__('messages.get-to-know-more-description-2')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat">
                        <div class="cat-icon">
                            <img src="img/gallery/icon3.png" alt="solopar-fundações-cravaçãoe-sondagens">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">{{__('messages.service3')}}</a></h5>
                            <p>{{__('messages.get-to-know-more-description-3')}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-cat">
                        <div class="cat-icon">
                            <img src="img/gallery/icon4.png" alt="solopar-fundações-cravaçãoe-sondagens">
                        </div>
                        <div class="cat-cap">
                            <h5><a href="services.html">{{__('messages.service4 ')}}</a></h5>
                            <p>{{__('messages.get-to-know-more-description-4')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- cat End -->
    <!--? Gallery Area Start -->
    <!-- Gallery Area End -->
    <!-- Want To work -->
    @component('componentes.call-to-action')
        @endcomponent
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