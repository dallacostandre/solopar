@extends('layout.app')
@section('content')
<main>
    <!--? Hero Start -->
    <div class="slider-area2 section-bg2"  data-background="img/hero/hero2.webp">
        <div class="slider-height2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2">
                            <h2>{{__('messages.get-in-touch')}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <!--?  Contact Area start  -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">{{__('messages.get-in-touch')}}</h2>
                </div>
                <div class="col-lg-8">
                    <form class="form-contact" action="{{asset('/email')}}" method="post" novalidate="novalidate" role="form">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="content" id="content" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Escreva sua mensagem'" placeholder="{{__('messages.message-us')}}"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="name" id="name" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Escreva seu nome'" 
                                    placeholder="{{__('messages.name')}}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control valid" name="email" id="email" type="email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" placeholder="{{__('messages.email')}}">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control" name="subject" id="subject" type="text" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Assunto'" 
                                    placeholder="{{__('messages.subject')}}">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">{{__('messages.send')}}</button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>{{__('messages.address-2')}}</h3>
                            <p>81130260 – Curitiba – PR</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="fab fa-whatsapp"></i></span>
                        <div class="media-body">
                            <h3><a href="http://wa.me/+5541997472046">{{__('messages.whatsapp')}}</a></h3>
                            <p><a href="http://wa.me/+5541997472046" style="color: gray">Enviar Mensagem</a></p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>{{__('messages.phone')}}</h3>
                            <p>Seg. a Sex. 9h00 a 18h00</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>{{__('messages.email')}}</h3>
                            <p>{{__('messages.email-message-page')}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Area End -->
</main>

@endsection