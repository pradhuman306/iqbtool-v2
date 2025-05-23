@extends('layouts.app')
@section('title', 'Contact')
@section('content')
    <div class="gradient-inner">
        <div class="container">
            <div class="iqb-section-header iqb-page-head animate" data-animate="fade-up">
                <label class="iqb-label">{{ __('Contact') }}</label>
                <h1 id="page-title">{{ __('Get in touch with us') }}</h1>
                <p>{{ __('Get in touch Description') }}</p>
            </div>
            <!-- Contact Us Section Starts -->
            <div class="iqb-contact animate" data-animate="fade-up">
                <div class="iqb-contact-wrapper">
                    <div class="iqb-contact-body">
                        <div class="iqb-contact-content row align-center justify-between">
                            <div class="iqb-contact-left col-2">
                                <ul class="iqb-contact-list-wrapper">
                                    <li class="iqb-contact-list">
                                        <span><img src="https://iqb-tool.com/wp-content/uploads/2024/09/icon-call.svg"
                                                alt="Icon Call"></span>
                                        <label><a href="tel:+31619606728" target="">+316 19 606 728</a></label>
                                    </li>
                                    <li class="iqb-contact-list">
                                        <span><img src="https://iqb-tool.com/wp-content/uploads/2024/09/icon-email.svg"
                                                alt="Icon Email"></span>
                                        <label><a href="mailto:office@minebytes.com"
                                                target="">office@minebytes.com</a></label>
                                    </li>
                                    <li class="iqb-contact-list">
                                        <span><img src="https://iqb-tool.com/wp-content/uploads/2024/09/icon-address.svg"
                                                alt="Icon Address"></span>
                                        <label><a href="https://maps.app.goo.gl/vkjG6y69kdZ54K5G6"
                                                target="_blank">Amsterdam, NL</a></label>
                                    </li>
                                </ul>
                            </div>
                            <div class="iqb-contact-right col-2">
                                <div class="iqb-contact-inner-wrapper">
                                    <div class="wpcf7 no-js" id="wpcf7-f257-o1" lang="en-US" dir="ltr" data-wpcf7-id="257">
                                       @include('components.Emailform')

                                        <div class="screen-reader-response">
                                                @if(session('success'))
                                                    <p style="color:green;">{{ session('success') }}</p>
                                                @endif

                                                @if(session('error'))
                                                    <p style="color:red;">{{ session('error') }}</p>
                                                @endif

                                                @if ($errors->any())
                                                 <ul style="color:red;">
                                                    @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                                @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Us Section Ends -->
        </div>
    </div>
@endsection