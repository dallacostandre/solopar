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
                            <h2>Projetos</h2>
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
    <div class="gallery-area">
        <div class="container-fluid p-0 fix">
            <div class="row no-gutters">
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-gallery text-center">
                        <div class="gallery-img" style="background-image: url(img/gallery/gallery1.webp);"></div>
                        <div class="thumb-content-box">
                            <div class="thumb-content">
                                <h3>{{__('messages.service1')}}</h3>
                                <p>{{__('messages.get-to-know-more-description-1')}}</p>
                                <a href="#">{{__('messages.get-to-know-more')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-gallery no-margin text-center">
                        <div class="gallery-img" style="background-image: url(img/gallery/gallery2.webp);"></div>
                        <div class="thumb-content-box">
                            <div class="thumb-content">
                                <h3>{{__('messages.service2')}}</h3>
                                <p>{{__('messages.get-to-know-more-description-2')}}</p>
                                <a href="#">{{__('messages.get-to-know-more')}}</a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="col-xl-4 col-lg-4 col-md-6">
                    <div class="single-gallery text-center">
                        <div class="gallery-img" style="background-image: url(img/gallery/gallery3.webp);"></div>
                        <div class="thumb-content-box">
                            <div class="thumb-content">
                                <h3>{{__('messages.service4')}}</h3>
                                <p>{{__('messages.get-to-know-more-description-4')}}</p>
                                <a href="#">{{__('messages.get-to-know-more')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
