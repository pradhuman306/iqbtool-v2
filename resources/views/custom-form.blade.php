@extends("layouts.app")
@section('title', __('custom_form_page_title'))
@section('description', __('custom_form_page_subtitle'))
@section('content')
    <div class="gradient-inner">
        <div class="container">
            <div class="iqb-section-header iqb-page-head" data-animate="fade-up">
                <label class="iqb-label">{{ __('customizable_form_subheading') }}</label>
                <h1 id="page-title">{{ __('customizable_form_heading') }}</h1>
                <p>{{ __('customizable_form_description') }}</p>
            </div>
            <div class="iqb-tool-wrapper" data-animate="fade-up" style="background-image: url('{{asset('/')}}<?= __('customizable_forms_background_image'); ?>');">
                <div class="iqb-tool-body">
                    <figure>
                       <img src="{{asset('/')}}<?= __('customizable_form_image'); ?>" alt="IQB Tool Preview UI"
                            class="">
                    </figure>
                </div>
            </div>
        </div>
    </div>
@endsection