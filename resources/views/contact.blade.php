@extends('layouts.app')
@section('title', 'Contact')
@section('content')
    <div class="gradient-inner">
        <div class="container">
            <div class="iqb-section-header iqb-page-head" data-animate="fade-up">
                <label class="iqb-label">{{ __('contact_subheading') }}</label>
                <h1 id="page-title">{{ __('contact_heading') }}</h1>
                <p>{{ __('contact_description') }}</p>
            </div>
            <!-- Contact Us Section Starts -->
            <section class="iqb-contact" data-animate="fade-up">
                <div class="iqb-contact-wrapper">
                    <div class="iqb-contact-body">
                        <div class="iqb-contact-content row align-center justify-between">
                            <div class="iqb-contact-left col-2">
                                <ul class="iqb-contact-list-wrapper">
                                    <?php
    $contact_list = __('contact_list');
    foreach ($contact_list as $key => $value) { ?>
                                    <li class="iqb-contact-list">
                                        <span>
                                            <img src="<?= $value['image']; ?>" alt="Icon Call">
                                        </span>
                                        <label><a target="_blank" href="<?= $value['contact_list_item_url']; ?>"
                                                target=""><?= $value['contact_list_item']; ?></a></label>
                                    </li>
                                    <?php }    ?>
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
            </section>
            <!-- Contact Us Section Ends -->
        </div>
    </div>
@endsection