<!DOCTYPE html>
@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section Starts -->
    <section class="iqb-hero-banner animate">
        <div class="container">
            <div class="iqb-hero-wrapper">
                <div class="iqb-hero-left">
                    <label class="iqb-label">{{ __('Achieve More with Less') }}</label>
                    <h1>{{ __('Smarter forms for busy professionals') }}</h1>
                    <p>{{ __('Maximize your productivity and reduce time wastage with our efficient solutions') }}</p>
                    <a href="https://login.iqb-tool.com/request-access" class="btn btn-primary" target="_blank"
                        aria-label="Get started now">{{ __('Get started now') }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 15" fill="none">
                            <path d="M1 1L7.5 7.5L1 14" stroke="#fff" stroke-width="2"></path>
                        </svg>
                    </a>
                </div>
                <div class="iqb-hero-right">
                    <img src="{{ asset('assets/images/iqb-hero-banner.svg') }}" alt="IQB Hero Banner"
                        class="hero-image-class">
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section Ends -->
    <!-- Our Solutions Section Starts -->
    <section class="iqb-solutions animate" data-animate="fade-up">
        <div class="container">
            <div class="iqb-solutions-wrapper gradient">
                <div class="iqb-section-header iqb-solutions-head">
                    <label class="iqb-label">{{ __('Customizable fill-in lists') }}</label>
                    <h2>{{ __('Offering a range of forms to suit your needs') }}</h2>
                    <p>{{ __('Choose from our range of forms, designed to meet your specific needs') }}</p>
                </div>
                <div class="iqb-solutions-body">
                    <div class="iqb-solutions-content row align-center justify-between">
                        <div class="iqb-solutions-left col-2">
                            <h3>FML</h3>
                            <p>{{ __('FML Description') }}</p>
                            <a href="https://login.iqb-tool.com/request-access" class="btn btn-primary" target="_blank"
                                aria-label="Get started now">{{ __('Get started now') }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 15"
                                    fill="none">
                                    <path d="M1 1L7.5 7.5L1 14" stroke="#fff" stroke-width="2"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="iqb-solutions-right col-2">
                            <figure>
                                <img src="{{ asset('assets/images/fml5-nl.svg') }}" alt="fml5-nl" class="">
                            </figure>
                        </div>
                    </div>
                    <div class="iqb-solutions-content row align-center justify-between">
                        <div class="iqb-solutions-left col-2">
                            <h3>KFML</h3>
                            <p>{{ __('KFML Description') }}</p>
                            <a href="https://login.iqb-tool.com/request-access" class="btn btn-primary" target="_blank"
                                aria-label="Get started now">{{ __('Get started now') }}
                                <svg xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 15"
                                    fill="none">
                                    <path d="M1 1L7.5 7.5L1 14" stroke="#fff" stroke-width="2"></path>
                                </svg>
                            </a>
                        </div>
                        <div class="iqb-solutions-right col-2">
                            <figure>
                                <img src="{{ asset('assets/images/fml4-nl.svg') }}" alt="fml4-nl" class="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Solutions Section Ends -->
    <!-- IQB Tool Preview Section Starts -->
    <section class="iqb-tool animate" data-animate="fade-up">
        <div class="container">
            <div class="iqb-tool-wrapper"
                style="background-image: url('{{ asset('assets/images/iqb-tool-preview-bg.svg') }}');">
                <div class="iqb-section-header iqb-tool-head">
                    <label class="iqb-label">{{ __('New Form Solutions') }}</label>
                    <h2>{{ __('Contact us') }}</h2>
                    <p>{{ __('New Form Description') }}</p>
                    <a href="https://login.iqb-tool.com/request-access" class="btn btn-primary btn-invert" target="_blank"
                        aria-label="Get started">{{ __('Get started') }}
                        <svg xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 15" fill="none">
                            <path d="M1 1L7.5 7.5L1 14" stroke="#fff" stroke-width="2"></path>
                        </svg>
                    </a>
                </div>
                <div class="iqb-tool-body">
                    <figure>
                        <img src="{{ asset('assets/images/iqb-tool-preview-ui-nl.svg') }}" alt="IQB Tool Preview UI"
                            class="">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <!-- IQB Tool Preview Section Ends -->
    <!-- About IQB Section Starts -->
    <section class="iqb-about animate" data-animate="fade-up">
        <div class="container">
            <div class="iqb-about-wrapper">
                <div class="iqb-section-header iqb-about-head">
                    <label class="iqb-label">{{ __('About IQB Tool') }}</label>
                    <h2>{{ __('Get acquainted with our IQB tool') }}</h2>
                    <p>{{ __('About IQB Description') }}</p>
                </div>
                <div class="iqb-about-body row align-center justify-between">
                    <div class="iqb-about-left col-2">
                        <ul class="iqb-about-list">
                            <li class="translation-block">{!! __('Your FML normal answers are already pre-filled') !!}</li>
                            <li class="translation-block">{!! __('You can easily navigate back and forth between the sections of the FML') !!}</li>
                            <li class="translation-block">{!! __('Did you make a mistake? Just fix it and regenerate the report again') !!}</li>
                            <li class="translation-block">{!! __('Compose an FML, proceed with a single click directly to a fully completed (K)FML, and generate the report') !!}</li>
                            <li class="translation-block">{!! __('Complete a (K)FML in less than 10 minutes and save time for other enjoyable expertise') !!}</li>
                            <li class="translation-block">{!! __('You can request your own colours/style for the login and the FML report') !!}</li>
                        </ul>
                    </div>
                    <div class="iqb-about-right col-2">
                        <figure>
                            <img src="{{ asset('assets/images/iqb-tool-features-nl.svg') }}" alt="iqb-tool-features-nl"
                                class="" loading="lazy">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About IQB Section Ends -->
    <!-- IQB Features Section Starts -->
    <section class="iqb-features animate" data-animate="fade-up">
        <div class="container">
            <div class="iqb-features-wrapper gradient">
                <div class="iqb-section-header iqb-features-head">
                    <label class="iqb-label">{{ __('Our Useful Features') }}</label>
                    <h2>{{ __('Unveiling the core features of our IQB Tool') }}</h2>
                    <p>{{ __('Our Useful Features Description') }}Please reach out to our team to discuss further and explore collaboration opportunities.</p>
                </div>
                <div class="iqb-features-body row">
                    <div class="iqb-features-list col-4">
                        <img src="{{ asset('assets/images/iqb-report.svg') }}" alt="iqb report" class="" loading="lazy">
                        <p>{{ __('Reports should not include unnecessary copy-pasting of content') }}</p>
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
                <a href="https://login.iqb-tool.com/request-access" class="btn btn-primary" target="_blank"
                    aria-label="Get started now">{{ __('Get started now') }}
                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 15" fill="none">
                        <path d="M1 1L7.5 7.5L1 14" stroke="#fff" stroke-width="2"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <!-- IQB Features Section Ends -->
    <!-- IQB Testimonials Section Starts -->
    <section class="iqb-testimonials animate" data-animate="fade-up">
        <div class="container">
            <div class="iqb-testimonials-wrapper">
                <div class="iqb-section-header iqb-testimonials-head">
                    <label class="iqb-label">{{ __('Testimonials') }}</label>
                    <h2>{{ __('Our goal is to help hospitals create their own questionnaire set') }}</h2>
                    <p>{{ __('Testimonials Description') }}</p>
                </div>
                <div class="iqb-testimonials-slider-wrapper">
                    <div class="iqb-testimonials-slider">
                        <div class="iqb-testimonials-body" style="transition: transform 0.5s; transform: translateX(0%);">
                            <div class="iqb-testimonials-item">
                                <div class="iqb-testimonials-item-wrap">
                                    <p>{{ __('We are purchasing multiple licenses to quickly and efficiently generate reports in our corporate style within a busy market') }}</p>
                                    <div class="iqb-testimonials-footer">
                                        <span>{{ __('Insurance Medical Experts') }}</span>
                                        <small>{{ __('Organization of Insurance medical experts') }}</small>
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
    <section class="iqb-faqs animate" data-animate="fade-up">
        <div class="container">
            <div class="iqb-faqs-wrapper gradient">
                <div class="iqb-section-header iqb-faqs-head">
                    <label class="iqb-label">FAQs</label>
                    <h2>{{ __('Unanswered questions that may pique your interest') }}</h2>
                    <p>{{ __("Whether you're looking for more details about the tool's features or need help troubleshooting,
                        you'll find everything you need to get the most out of IQB Tool right here.") }}</p>
                </div>
                <div class="iqb-faqs-body">
                    <div class="iqb-faq-list active">
                        <h3>{{ __('How can I analyze the data I submitted through my questionnaire form') }}
                            <svg
                                xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 15" fill="none">
                                <path d="M1 1L7.5 7.5L1 14" stroke="#0E0B3D" stroke-width="2"></path>
                            </svg>
                        </h3>
                        <div class="iqb-faqs-content" style="max-height: 67px;">
                            <p>{{ __("You can analyze your data using IQB Tool’s analytics dashboard, which provides detailed
                                insights and allows you to export and visualize responses. For deeper analysis, data export
                                options are available.") }}</p>
                        </div>
                    </div>
                    <div class="iqb-faq-list">
                        <h3>{{ __('How do I customize my form') }}
                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="12"
                                viewBox="0 0 9 15" fill="none">
                                <path d="M1 1L7.5 7.5L1 14" stroke="#0E0B3D" stroke-width="2"></path>
                            </svg>
                        </h3>
                        <div class="iqb-faqs-content">
                            <p>{{ __("Easily customize your form with our drag-and-drop editor. Modify design, fields, and settings
                                like conditional logic, or add custom CSS for advanced customization.") }}</p>
                        </div>
                    </div>
                    <div class="iqb-faq-list">
                        <h3>{{ __('Why would someone use a questionnaire form') }}
                            <svg xmlns="http://www.w3.org/2000/svg" width="9"
                                height="12" viewBox="0 0 9 15" fill="none">
                                <path d="M1 1L7.5 7.5L1 14" stroke="#0E0B3D" stroke-width="2"></path>
                            </svg>
                        </h3>
                        <div class="iqb-faqs-content">
                            <p>{{ __('Questionnaire forms are ideal for gathering structured data, such as feedback or
                                registrations. IQB Tool simplifies the process with smart forms that are easy to create and
                                personalize.') }}</p>
                        </div>
                    </div>
                    <div class="iqb-faq-list">
                        <h3>{{ __('What occurs when I surpass the monthly submission threshold') }}
                            <svg
                                xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 15" fill="none">
                                <path d="M1 1L7.5 7.5L1 14" stroke="#0E0B3D" stroke-width="2"></path>
                            </svg>
                        </h3>
                        <div class="iqb-faqs-content">
                            <p>{{ __("Exceeding the submission limit? Don’t worry—extra submissions are securely stored, and you
                                can access them by upgrading your plan.") }}</p>
                        </div>
                    </div>
                    <div class="iqb-faq-list">
                        <h3>{{ __('What is IQB tool') }}
                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="12"
                                viewBox="0 0 9 15" fill="none">
                                <path d="M1 1L7.5 7.5L1 14" stroke="#0E0B3D" stroke-width="2"></path>
                            </svg>
                        </h3>
                        <div class="iqb-faqs-content">
                            <p>{{ __("IQB is a tool designed to simplify and streamline the process of creating professional and
                                smart forms for busy professionals like you. We understand that your time is valuable, which
                                is why we developed IQB as your optimal solution for creating smarter, more efficient forms.
                                An example of an IQB form is the KFML form.") }}</p>
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