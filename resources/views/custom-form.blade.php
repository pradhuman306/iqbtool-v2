@extends("layouts.app")
@section('title', 'Custom Form')
@section('content')
    <section class="gradient-inner">
        <div class="container">
            <div class="iqb-section-header iqb-page-head animate" data-animate="fade-up">
                <label class="iqb-label">{{ __('Customizable Form Solutions') }}</label>
                <h1 id="page-title">{{ __('We offer tailored forms just for you') }}</h1>
                <p>{{ __('Customizable Form Description') }}</p>
            </div>
            <div class="iqb-tool-wrapper animate" data-animate="fade-up" style="background-image: url('{{ asset('assets/images/iqb-tool-preview-bg.svg') }}');">
                <div class="iqb-tool-body">
                    <figure>
                       <img src="{{ asset('assets/images/iqb-tool-preview-ui-nl.svg') }}" alt="IQB Tool Preview UI"
                            class="">
                    </figure>
                </div>
            </div>
        </div>
    </section>
@endsection