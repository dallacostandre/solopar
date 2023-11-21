@extends('layout.app')
@section('content')
    <style>
        .service-description {
            text-align: center;
            margin-top: 30px;
        }
        

        .image_service {
            width: 50%
        }

        @media (max-width: 575px) {
            .image_service {
                width: 100%
            }
        }
    </style>
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
        {{-- barracões, prédios, viadutos, pontes e contensão --}}
        <div class="categories-area section-padding40 gray-bg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-6 col-sm-6">
                        <div class="single-cat">
                            {{-- <div class="cat-icon">
                            <img src="img/gallery/icon1.png" alt="solopar-fundações-cravaçãoe-sondagens">
                        </div> --}}
                            <div class="cat-cap">
                                <h5 class="text-center" style="margin-top: 30px;"><a
                                        href="#">{{ __('messages.barracoes') }}</a></h5>
                                <div class="text-center">
                                    <img src="img/servicos/barracao.jpeg" alt="solopar-fundações-cravaçãoe-sondagens"
                                        class="image_service">
                                </div>
                                <p class="service-description">{{ __('messages.get-to-know-more-description-barracoes') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-lg-12 col-md-6 col-sm-6">
                        <div class="single-cat">
                            {{-- <div class="cat-icon">
                            <img src="img/gallery/icon2.png" alt="solopar-fundações-cravaçãoe-sondagens">
                        </div> --}}
                            <div class="cat-cap">
                                <h5 class="text-center" style="margin-top: 30px;"><a
                                        href="#">{{ __('messages.predios') }}</a></h5>
                                <div class="text-center">
                                    <img src="img/servicos/fundacao-de-predio.jpeg"
                                        alt="solopar-fundações-cravaçãoe-sondagens" class="image_service">
                                </div>
                                <p class="service-description">{{ __('messages.get-to-know-more-description-predios') }}</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-lg-12 col-md-6 col-sm-6">
                        <div class="single-cat">
                            {{-- <div class="cat-icon">
                            <img src="img/gallery/icon3.png" alt="solopar-fundações-cravaçãoe-sondagens">
                        </div> --}}
                            <div class="cat-cap">
                                <h5 class="text-center" style="margin-top: 30px;"><a
                                        href="#">{{ __('messages.viadutos') }}</a></h5>
                                <div class="text-center">
                                    <img src="img/servicos/viaduto.jpeg" alt="solopar-fundações-cravaçãoe-sondagens"
                                        class="image_service">
                                </div>
                                <p class="service-description">{{ __('messages.get-to-know-more-description-viadutos') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-lg-12 col-md-6 col-sm-6">
                        <div class="single-cat">
                            {{-- <div class="cat-icon">
                            <img src="img/gallery/icon4.png" alt="solopar-fundações-cravaçãoe-sondagens">
                        </div> --}}
                            <div class="cat-cap">
                                <h5 class="text-center" style="margin-top: 30px;"><a
                                        href="#">{{ __('messages.pontes') }}</a></h5>
                                <div class="text-center">
                                    <img src="img/servicos/contencao.jpeg" alt="solopar-fundações-cravaçãoe-sondagens"
                                        class="image_service">
                                </div>
                                <p class="service-description">{{ __('messages.get-to-know-more-description-pontes') }}</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-lg-12 col-md-6 col-sm-6">
                        <div class="single-cat">
                            {{-- <div class="cat-icon">
                            <img src="img/gallery/icon4.png" alt="solopar-fundações-cravaçãoe-sondagens">
                        </div> --}}
                            <div class="cat-cap">
                                <h5 class="text-center" style="margin-top: 30px;"><a
                                        href="#">{{ __('messages.service4') }}</a></h5>
                                <div class="text-center">
                                    <img src="img/servicos/cravacao.jpeg" alt="solopar-fundações-cravaçãoe-sondagens"
                                        class="image_service">
                                </div>
                                <p class="service-description">{{ __('messages.get-to-know-more-description-4') }}</p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-lg-12 col-md-6 col-sm-6">
                        <div class="single-cat">
                            {{-- <div class="cat-icon">
                            <img src="img/gallery/icon4.png" alt="solopar-fundações-cravaçãoe-sondagens">
                        </div> --}}
                            <div class="cat-cap">
                                <h5 class="text-center" style="margin-top: 30px;"><a
                                        href="#">{{ __('messages.service_footer_2') }}</a></h5>
                                <div class="text-center">
                                    <img src="img/servicos/sondagem.jpeg" alt="solopar-fundações-cravaçãoe-sondagens"
                                        class="image_service">
                                </div>
                                <p class="service-description">{{ __('messages.get-to-know-more-description-sondagem') }}
                                </p>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="col-lg-12 col-md-6 col-sm-6">
                        <div class="single-cat">
                            {{-- <div class="cat-icon">
                            <img src="img/gallery/icon4.png" alt="solopar-fundações-cravaçãoe-sondagens">
                        </div> --}}
                            <div class="cat-cap">
                                <h5 class="text-center" style="margin-top: 30px;"><a
                                        href="#">{{ __('messages.service5') }}</a></h5>
                                <div class="text-center">
                                    <img src="img/servicos/projetos.jpeg" alt="solopar-fundações-cravaçãoe-sondagens"
                                        class="image_service">
                                </div>
                                <p class="service-description">{{ __('messages.get-to-know-more-service-project') }}</p>
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
                                    <h3><a href="#">{{ __('messages.help') }}</a></h3>
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

    </main>
@endsection
