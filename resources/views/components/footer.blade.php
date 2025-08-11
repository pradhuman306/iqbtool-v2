<footer class="site-footer iqb-footer" data-animate="fade-up">
    <div class="container">
        <div class="iqb-footer-up-wrapper">
            <div class="iqb-section-header iqb-footer-head">
                <label class="iqb-label">{{ __('Get in touch') }}</label>
                <h2>{{ __("Let's start something great") }}</h2>
                <p>{{ __('Use over 1000+ customers already with IQB') }}</p>
                <a href="{{__('CTA_URL') }}" class="btn btn-primary" target="_blank">
                    {{ __('Get started') }}
                    <svg xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 15" fill="none">
                        <path d="M1 1L7.5 7.5L1 14" stroke="#fff" stroke-width="2"></path>
                    </svg>
                </a>
            </div>
        </div>
    </div>
    <div class="iqb-footer-down-wrapper gradient">
        <div class="container">
            <div class="iqb-footer-body row">
                <div class="iqb-footer-logo">
                    <a href="{{ route('home') }}" class="custom-logo-link" rel="home" aria-current="page">
                        <img src="{{ asset(__('main_logo')) }}" class="custom-logo" alt="IQB Logo">
                    </a>
                    <p>{{ __('IQB Tool – More with Less | Quick and easy') }}</p>
                </div>
                <div class="iqb-footer-logo-menu">
                    <h4>{{ __('Menus') }}</h4>
                    <div class="menu-primary-menu-container">
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="{{ route('home') }}">{{ __('Home') }}</a>
                            </li>
                            <li class="footer-none menu-item menu-item-has-children">
                                <a>{{ __('Forms') }}</a>
                                <ul class="sub-menu">
                                    <li class="icon-fml menu-item">
                                        <a href="{{ route('fml-kfml') }}">FML/KFML</a>
                                    </li>
                                    <li class="icon-custom-form menu-item">
                                        <a href="{{ route('custom-form') }}">{{ __('Custom Form') }}</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('pricing') }}">{{ __('Pricing') }}</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('contact-us') }}">{{ __('Contact') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="iqb-footer-extra-menu">
                    <h4>{{ __('Links') }}</h4>
                    <div class="menu-footer-menu-container">
                        <ul class="menu">
                            <li class="menu-item">
                                <a href="{{ route('terms-and-conditions') }}">{{ __('Terms and Conditions') }}</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('privacy-policy') }}">{{ __('Privacy Policy') }}</a>
                            </li>
                            <li class="menu-item">
                                <a href="{{ route('cookie-policy') }}">{{ __('Cookie Policy') }}</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="iqb-footer-contact">
                    <h4>{{ __("Let's Connect") }}</h4>
                    <a class="iqb-footer-email" href="mailto:{{__('footer_email')}}">{{__('footer_email')}}</a>
                    <p class="iqb-footer-icons">
                        <a href="https://www.linkedin.com/company/minebytes" target="_blank">
                            <img src="https://iqb-tool.com/wp-content/uploads/2024/09/linkedin.svg" alt="linkedin">
                        </a>
                    </p>
                </div>
            </div>
            <div class="iqb-footer-foot row">
                <div class="iqb-footer-foot-left">
                    © 2025 <a href="{{ route('home') }}">IQB Tool</a>
                    {{ __("All rights reserved") }}
                </div>
                <div class="iqb-footer-foot-right">
                    {{ __("Built with") }} ❤ {{ __("by") }} <a href="https://www.minebytes.com/">Minebytes</a>
                </div>
            </div>
        </div>
    </div>
</footer>