<div class="col-lg-6 col-md-12">
    <!-- contact-form -->
    <div class="form-wrapper">
        <div class="row ">
            <div class="col-xl-12">
                <div class="section-tittle section-tittle2 mb-30">
                    <h2>{{ __('messages.contact-form') }}</h2>
                </div>
            </div>
        </div>
        <form id="contact-form" action="{{url('/email')}}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-12 col-md-6">
                    <div class="form-box user-icon mb-15">
                        <input type="text" name="name" placeholder="Nome">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-box email-icon mb-15">
                        <input type="text" name="email" placeholder="Email">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6">
                    <div class="form-box email-icon mb-15">
                        <input type="text" name="email" placeholder="Telefone">
                    </div>
                </div>
                <div class="col-lg-12 col-md-6 mb-15">
                    <div class="select-itms">
                        <select name="select" id="select2">
                            <option value="">{{ __('messages.quote') }}</option>
                            <option value="">{{ __('messages.suggestion') }}</option>
                        </select>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-box message-icon mb-15">
                        <textarea name="message" id="message" placeholder="Mensagem"></textarea>
                    </div>
                    <div class="submit-info">
                        <button class="submit-btn2" type="submit">{{ __('messages.send') }}</button>
                    </div>
                    @if(session()->has('message'))
                    <div class="alert alert-success text-center">
                        {{ session()->get('message') }}
                    </div>
                    @endif
                </div>
            </div>
        </form>
    </div>
</div>
