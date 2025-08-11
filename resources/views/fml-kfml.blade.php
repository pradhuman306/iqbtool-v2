@extends("layouts.app")
@section('title', 'FML/KFML')
@section('content')
    <div class="gradient-inner">
        <div class="container">
            <div class="iqb-section-header iqb-page-head" data-animate="fade-up">
                <label class="iqb-label">{{ __('fmlkfml_subheading') }}</label>
                <h1 id="page-title">{{ __('fmlkfml_heading') }}</h1>
                <p>{{ __('fmlkfml_description') }}</p>
            </div>
            <div class="iqb-solutions-body">
                <div class="iqb-solutions-content row align-center justify-between">
                   <div class="iqb-solutions-left col-2">
                            <h3>FML</h3>
                            <p>{{ __('fmlpage_description') }}</p>
                            <a href="{{ __('fmlpage_button_url') }}" class="btn btn-primary" target="_blank"
                                aria-label="fmlpage_button_text">{{ __('fmlpage_button_text') }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 15"
                                    fill="none">
                                    <path d="M1 1L7.5 7.5L1 14" stroke="#fff" stroke-width="2"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="iqb-solutions-right col-2">
                            <figure>
                                <img src="{{asset('/')}}<?= __('fmlpage_image'); ?>" alt="" class="">
                            </figure>
                        </div>
                </div>
                <div class="iqb-solutions-content row align-center justify-between">
                    <div class="iqb-solutions-left col-2">
                            <h3>KFML</h3>
                            <p>{{ __('kfmlpage_description') }}</p>
                            <a href="{{ __('kfmlpage_button_url') }}" class="btn btn-primary" target="_blank"
                                aria-label="kfmlpage_button_text">{{ __('kfmlpage_button_text') }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 15"
                                    fill="none">
                                    <path d="M1 1L7.5 7.5L1 14" stroke="#fff" stroke-width="2"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="iqb-solutions-right col-2">
                            <figure>
                                <img src="{{asset('/')}}<?= __('kfmlpage_image'); ?>" alt="" class="">
                            </figure>
                        </div>
                </div>
            </div>
        </div>
    </div>

@endsection