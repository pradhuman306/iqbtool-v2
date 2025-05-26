<div class="overlay"></div>
<header id="masthead" class="site-header">
    <div class="container">
        <div class="header-wrapper">
            <div class="header-items-left">
                <div class="site-branding">
                    <a href="{{ route('home') }}" class="custom-logo-link" rel="home" aria-current="page">
                        <img src="{{ asset('assets/images/logo.svg') }}" class="custom-logo" alt="IQB Logo">
                    </a>
                </div><!-- .site-branding -->
                <ul class="iqb-lang-switcher">
                    <li>
                        <a href="{{ route('lang.switch', ['locale' => session('locale', 'nl')]) }}"
                            class="trp-ls-shortcode-disabled-language trp-ls-disabled-language"
                            title="{{ session('locale') === 'en' ? 'English' : 'Dutch' }}">
                                {{ session('locale', 'nl') }}
                        </a>
                    </li>
                    <li>
                        @php
                            $switchTo = session('locale') === 'en' ? 'nl' : 'en';
                        @endphp
                        <a href="{{ route('lang.switch', $switchTo) }}" title="{{ $switchTo === 'en' ? 'English' : 'Dutch' }}">
                            {{ $switchTo }}
                        </a>
                    </li>
                </ul>
            </div>
            <div class="header-items-middle">
                <nav class="main-navigation">
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
                </nav>
            </div>
            <div class="header-items-right">
                <ul class="auth-btns">
                    <li>
                        <a class="btn-login" target="_blank" href="https://login.iqb-tool.com/">{{ __('Login') }}</a>
                    </li>
                    <li>
                        <a class="btn btn-small btn-primary btn-register" target="_blank"
                            href="https://login.iqb-tool.com/request-access">{{ __('Try for access') }}</a>
                    </li>
                </ul>
                <div class="sideToggle">
                    <div id="nav-icon" class="open">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 15 15" fill="none">
                            <path d="M1.875 4.75H13.125" stroke="#232323" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M1.875 10.75H13.125" stroke="#232323" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                        </svg><svg class="open-icon" xmlns="http://www.w3.org/2000/svg" width="15" height="15"
                            viewBox="0 0 15 15" fill="none">
                            <path filerule="evenodd" clip-rule="evenodd"
                                d="M4.28033 2.21967C3.98744 1.92678 3.51256 1.92678 3.21967 2.21967C2.92678 2.51256 2.92678 2.98744 3.21967 3.28033L6.68934 6.75L3.21967 10.2197C2.92678 10.5126 2.92678 10.9874 3.21967 11.2803C3.51256 11.5732 3.98744 11.5732 4.28033 11.2803L7.75 7.81066L11.1746 11.2353C11.4675 11.5282 11.9424 11.5282 12.2353 11.2353C12.5282 10.9424 12.5282 10.4675 12.2353 10.1746L8.81066 6.75L12.2353 3.32538C12.5282 3.03249 12.5282 2.55761 12.2353 2.26472C11.9424 1.97183 11.4675 1.97183 11.1746 2.26472L7.75 5.68934L4.28033 2.21967Z"
                                fill="#232323"></path>
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header><!-- #masthead -->
<div class="header-items-middle header-menu-responsive">
    <div class="container">
        <div class="res-navigation-inr">
            <div class="res-nav-wrap">
                <nav class="main-navigation">
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
                </nav>
                <div class="language-wrap">
                    <a class="btn-login" target="_blank" href="https://login.iqb-tool.com/">{{ __('Login') }}</a>
                    <ul class="iqb-lang-switcher">
                         <li>
                        <a href="{{ route('lang.switch', ['locale' => session('locale', 'nl')]) }}"
                            class="trp-ls-shortcode-disabled-language trp-ls-disabled-language"
                            title="{{ session('locale') === 'en' ? 'English' : 'Dutch' }}">
                            {{ session('locale', 'nl') }}
                        </a>
                    </li>
                    <li>
                        @php
                            $switchTo = session('locale') === 'en' ? 'nl' : 'en';
                        @endphp
                        <a href="{{ route('lang.switch', $switchTo) }}" title="{{ $switchTo === 'en' ? 'English' : 'Dutch' }}">
                            {{ $switchTo }}
                        </a>
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>