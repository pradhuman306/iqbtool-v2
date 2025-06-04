<!DOCTYPE html>
@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section Starts -->
    <section class="iqb-hero-banner" data-animate="fade-up">
        <div class="container">
            <div class="iqb-hero-wrapper">
                <div class="iqb-hero-left">
                    <label class="iqb-label">{{ __('hero_banner_subheading') }}</label>
                    <h1>{{ __('hero_banner_heading') }}</h1>
                    <p>{{ __('hero_banner_description') }}</p>
                    <a href="{{ __('hero_banner_button_url') }}" class="btn btn-primary" target="_blank"
                        aria-label="hero_banner_button_text">{{ __('hero_banner_button_text') }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 15" fill="none">
                            <path d="M1 1L7.5 7.5L1 14" stroke="#fff" stroke-width="2"></path>
                        </svg>
                    </a>
                </div>
                <div class="iqb-hero-right">
                    <img src="{{asset('/')}}<?= __('hero_banner_image'); ?>" alt="IQB Hero Banner"
                        class="hero-image-class">
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section Ends -->
    <!-- Our Solutions Section Starts -->
    <section class="iqb-solutions" data-animate="fade-up">
        <div class="container">
            <div class="iqb-solutions-wrapper gradient">
                <div class="iqb-section-header iqb-solutions-head">
                    <label class="iqb-label">{{ __('customizable_subheading') }}</label>
                    <h2>{{ __('customizable_heading') }}</h2>
                    <p>{{ __('customizable_description') }}</p>
                </div>
                <div class="iqb-solutions-body">
                    <div class="iqb-solutions-content row align-center justify-between">
                        <div class="iqb-solutions-left col-2">
                            <h3>FML</h3>
                            <p>{{ __('fml_description') }}</p>
                            <a href="{{ __('fml_button_url') }}" class="btn btn-primary" target="_blank"
                                aria-label="fml_button_text">{{ __('fml_button_text') }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 15"
                                    fill="none">
                                    <path d="M1 1L7.5 7.5L1 14" stroke="#fff" stroke-width="2"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="iqb-solutions-right col-2">
                            <figure>
                                <img src="{{asset('/')}}<?= __('fml_image'); ?>" alt="" class="">
                            </figure>
                        </div>
                    </div>
                    <div class="iqb-solutions-content row align-center justify-between">
                        <div class="iqb-solutions-left col-2">
                            <h3>KFML</h3>
                            <p>{{ __('kfml_description') }}</p>
                            <a href="{{ __('kfml_button_url') }}" class="btn btn-primary" target="_blank"
                                aria-label="kfml_button_text">{{ __('kfml_button_text') }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 15"
                                    fill="none">
                                    <path d="M1 1L7.5 7.5L1 14" stroke="#fff" stroke-width="2"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="iqb-solutions-right col-2">
                            <figure>
                                <img src="{{asset('/')}}<?= __('kfml_image'); ?>" alt="" class="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Solutions Section Ends -->
    <!-- IQB Tool Preview Section Starts -->
    <section class="iqb-tool" data-animate="fade-up">
        <div class="container">
            <div class="iqb-tool-wrapper"
                style="background-image: url('{{asset('/')}}<?= __('form_solutions_background_image'); ?>');">
                <div class="iqb-section-header iqb-tool-head">
                    <label class="iqb-label">{{ __('form_solution_subheading') }}</label>
                    <h2>{{ __('form_solutions_heading') }}</h2>
                    <p>{{ __('form_solutions_description') }}</p>
                    <a href="{{ __('form_solutions_button_url') }}" class="btn btn-primary btn-invert" target="_blank"
                        aria-label="{{ __('form_solutions_button_text') }}">{{ __('form_solutions_button_text') }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 15" fill="none">
                            <path d="M1 1L7.5 7.5L1 14" stroke="#fff" stroke-width="2"></path>
                        </svg>
                    </a>
                </div>
                <div class="iqb-tool-body">
                    <figure>
                        <img src="{{asset('/')}}<?= __('form_solutions_image'); ?>" alt="IQB Tool Preview UI"
                            class="">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- IQB Tool Preview Section Ends -->
    <!-- About IQB Section Starts -->
    <section class="iqb-about" data-animate="fade-up">
        <div class="container">
            <div class="iqb-about-wrapper">
                <div class="iqb-section-header iqb-about-head">
                    <label class="iqb-label">{{ __('about_iqb_subheading') }}</label>
                    <h2>{{ __('about_iqb_heading') }}</h2>
                    <p>{{ __('about_iqb_description') }}</p>
                </div>
                <div class="iqb-about-body row align-center justify-between">
                    <div class="iqb-about-left col-2">
                   {!! __('about_iqb_details') !!}
                    </div>
                    <div class="iqb-about-right col-2">
                        <figure>
                            <img src="{{asset('/')}}<?= __('about_iqb_image'); ?>" alt="iqb-tool-features-nl"
                                class="" loading="lazy">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About IQB Section Ends -->
    <!-- IQB Features Section Starts -->
    <section class="iqb-features" data-animate="fade-up">
        <div class="container">
            <div class="iqb-features-wrapper gradient">
                <div class="iqb-section-header iqb-features-head">
                    <label class="iqb-label">{{ __('useful_features_subheading') }}</label>
                    <h2>{{ __('useful_features_heading') }}</h2>
                    <p>{{ __('useful_features_description') }}Please reach out to our team to discuss further and explore collaboration opportunities.</p>
                </div>
                <div class="iqb-features-body row">
                    <div class="iqb-features-list col-4">
                        <img src="{{asset('/')}}<?= __('useful_features_image'); ?>" alt="iqb report" class="" loading="lazy">
                        <p>{{ __('features_item_description') }}</p>
                    </div>
                    <div class="iqb-features-list col-4">
                        <img src="{{ asset('assets/images/iqb-style.svg') }}" alt="iqb style" class="" loading="lazy">
                        <p>{{ __('Incorporating our unique house style, we present the following line') }}</p>
                    </div>
                    <div class="iqb-features-list col-4">
                        <img src="{{ asset('assets/images/iqb-export-report.svg') }}" alt="iqb pdf and doc report" class=""
                            loading="lazy">
                        <p>{{ __('Experience the power of one-click: both an FML and a KFML combined') }}</p>
                    </div>
                    <div class="iqb-features-list col-4">
                        <img src="{{ asset('assets/images/iqb-save-time.svg') }}" alt="iqb save time" class=""
                            loading="lazy">
                        <p>{{ __('Save time, using our intelligent questionnaire builder features') }}</p>
                    </div>
                </div>
                <a href="{{ __('features_button_url') }}" class="btn btn-primary" target="_blank"
                    aria-label="{{ __('features_button_text') }}">{{ __('features_button_text') }}
                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 15" fill="none">
                        <path d="M1 1L7.5 7.5L1 14" stroke="#fff" stroke-width="2"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <!-- IQB Features Section Ends -->
    <!-- IQB Testimonials Section Starts -->
    <section class="iqb-testimonials" data-animate="fade-up">
        <div class="container">
            <div class="iqb-testimonials-wrapper">
                <div class="iqb-section-header iqb-testimonials-head">
                    <label class="iqb-label">{{ __('testimonials_subheading') }}</label>
                    <h2>{{ __('testimonials_heading') }}</h2>
                    <p>{{ __('testimonials_description') }}</p>
                </div>
                <div class="iqb-testimonials-slider-wrapper">
                    <div class="iqb-testimonials-slider">
                        <div class="iqb-testimonials-body" style="transition: transform 0.5s; transform: translateX(0%);">
                            <div class="iqb-testimonials-item">
                                <div class="iqb-testimonials-item-wrap">
                                    <p>{{ __('testimonials_item_description') }}</p>
                                    <div class="iqb-testimonials-footer">
                                        <span>{{ __('author_name') }}</span>
                                        <small>{{ __('author_designation') }}</small>
                                    </div>
                                </div>
                            </div>
                            <div class="iqb-testimonials-item">
                                <div class="iqb-testimonials-item-wrap">
                                    <p>{{ __('Very convenient for quickly navigating through a (K)FML and compiling it') }}</p>
                                    <div class="iqb-testimonials-footer">
                                        <span>D E</span>
                                        <small>{{ __('Freelance Occupational Physician') }}</small>
                                    </div>
                                </div>
                            </div>
                            <div class="iqb-testimonials-item">
                                <div class="iqb-testimonials-item-wrap">
                                    <p>{{ __('Through IQB, I have been using KFML since version 4, and compiling these reports has now become very simple') }}</p>
                                    <div class="iqb-testimonials-footer">
                                        <span>W K</span>
                                        <small>{{ __('Freelance Occupational Physician') }}</small>
                                    </div>
                                </div>
                            </div>
                             <div class="iqb-testimonials-item">
                                <div class="iqb-testimonials-item-wrap">
                                    <p>{{ __('Very convenient for quickly navigating through a (K)FML and compiling it') }}</p>
                                    <div class="iqb-testimonials-footer">
                                        <span>D E</span>
                                        <small>{{ __('Freelance Occupational Physician') }}</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Dots indicator -->
                <div class="slider-dots"></div>
            </div>
        </div>
    </section>
    <!-- IQB Testimonials Section Ends -->
    <!-- IQB FAQ Section Starts -->
    <section class="iqb-faqs" data-animate="fade-up">
        <div class="container">
            <div class="iqb-faqs-wrapper gradient">
                <div class="iqb-section-header iqb-faqs-head">
                    <label class="iqb-label">{{ __('faq_subheading') }}</label>
                    <h2>{{ __('faq_heading') }}</h2>
                    <p>{{ __("faq_description") }}</p>
                </div>
                <div class="iqb-faqs-body">
                    <div class="iqb-faq-list active">
                        <h3>{{ __('faq_question') }}
                            <svg
                                xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 15" fill="none">
                                <path d="M1 1L7.5 7.5L1 14" stroke="#0E0B3D" stroke-width="2"></path>
                            </svg>
                        </h3>
                        <div class="iqb-faqs-content" style="max-height: 67px;">
                            <p>{{ __('faq_answer') }}</p>
                        </div>
                    </div>
                </div>
                <a href="https://login.iqb-tool.com/request-access" class="btn btn-primary" target="_blank">{{ __('Get more info') }}
                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 15" fill="none">
                        <path d="M1 1L7.5 7.5L1 14" stroke="#fff" stroke-width="2"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>


    <!-- IQB FAQ Section Ends -->
@endsection