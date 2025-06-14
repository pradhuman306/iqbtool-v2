@extends("layouts.app")
@section('title', 'Pricing')
@section('content')
    <div class="gradient-inner">
        <div class="container">
            <div class="iqb-section-header iqb-page-head" data-animate="fade-up">
                <label class="iqb-label">{{ __('pricing_subheading') }}</label>
                <h1 id="page-title">{{ __('pricing_heading') }}</h1>
                <p>{{ __('pricing_description') }}</p>
            </div>
            <div data-animate="fade-up">
                <div class="pricing-toggle-wrap">
                    <div class="toggle-container">
                        <input type="radio" data-duration="month" id="monthly" name="plans" value="Maandelijks">
                        <label for="monthly" class="toggle-label">{{ __('Monthly') }}</label>
                        <input type="radio" data-duration="year" id="yearly" name="plans" value="Jaarlijks" checked="">
                        <label for="yearly" class="toggle-label">{{ __('Yearly') }}</label>
                    </div>
                    <span id="yearly_discount" class="info-text">{{ __('Get 1 month extra') }}</span>
                    <span id="monthly_text" style="display:none">{{ __('Month') }}</span>
                    <span id="yearly_text" style="display:none">{{ __('Year') }}</span>
                </div>
                <div class="pricing-wrap">
                    <div class="pricing-box">
                        <h4>{{ __('Trial') }}</h4>
                        <p>{{ __('Enjoy the ease of creating your
                            own (K)FML') }}</p>
                        <div class="price-wrap">
                            <span class="price-sign">€<span id="price_trial">0</span></span> <span class="duration"> /
                                {{ __('Year') }}</span>
                        </div>
                        <a href="https://login.iqb-tool.com/request-access" class="btn" target="_self"
                            aria-label="Choose Trial">{{ __('Choose Trial') }}
                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 15" fill="none">
                                <path d="M1 1L7.5 7.5L1 14" stroke="#fff" stroke-width="2"></path>
                            </svg>
                        </a>
                        <div>
                            <ul class="description-list">
                                <li>{{ __('1 User') }}</li>
                                <li>{{ __('Access basic form & limited
                                    questionnaire features') }}</li>
                                <li>{{ __('Email support for essential
                                    queries') }}</li>
                                <li>{{ __('Fair use policy applies') }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="pricing-box most-popular-box">
                        <span class="most-populor-tag">{{ __('Most Popular') }}</span>
                        <h4>{{ __('SP/Personal') }}</h4>
                        <p>{{ __('Ideal for those who frequently create (K)FMLs') }}</p>
                        <div class="price-wrap">
                            <span class="price-sign">€<span data-price="15" id="price_personal">180</span></span> <span
                                class="duration"> / {{ __('Year') }}</span>
                            <span id="regular-dis-wrap">
                                <span class="regular-dis">
                                    <span id="personal_discount"
                                        data-default="regelmatig">{{ __('Get 1 month extra') }}</span>
                                    <span id="reg_price" style="display:none" class="regular-price">€21</span>
                                </span>
                            </span>
                            <span id="personal_discount_text" style="display:none">{{ __('regularly') }}</span>
                        </div>
                        <a href="https://login.iqb-tool.com/request-access" class="btn" target="_self"
                            aria-label="Choose Personal">{{ __('Choose Personal') }}
                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 15" fill="none">
                                <path d="M1 1L7.5 7.5L1 14" stroke="#fff" stroke-width="2"></path>
                            </svg>
                        </a>
                        <div>
                            <ul class="description-list">
                                <li>{{ __('1 User') }}</li>
                                <li>{{ __('Includes 1 (K)FML per month') }}</li>
                                <li>{{ __('Access advanced form and pro questionnaire features') }}</li>
                                <li>{{ __('Email support for essential queries') }}</li>
                                <li>{{ __('Fair use policy applies') }}</li>
                                <li>{{ __('Email support for essential queries') }}</li>
                                <li>{{ __('Generate PDFs reports with your brand identify') }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="pricing-box">
                        <h4>{{ __('Business') }}</h4>
                        <p>{{ __('For more than 2 users, contact us to explore your options') }}</p>
                        <div>
                            <ul class="description-list">
                                <li>{{ __('At least 2 users') }}</li>
                                <li>{{ __('Unlimited (K)FML creation per month') }}</li>
                                <li>{{ __('Access advanced form and pro questionnaire features') }}</li>
                                <li>{{ __('Priority email for essential queries') }}</li>
                                <li>{{ __('Fair use policy applies') }}</li>
                                <li>{{ __('Email support for essential queries') }}</li>
                                <li>{{ __('Generate PDFs reports with your brand identify') }}</li>
                                <li>{{ __('Advanced reporting and analytics') }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="pricing-box">
                        <h4>{{ __('Custom') }}</h4>
                        <p>{{ __('Only create a few (K)FMLs per quarter or year? Contact us for a custom quote') }}</p>
                        <div>
                            <ul class="description-list">
                                <li>{{ __('One or multiple users') }}</li>
                                <li>{{ __('Custom-built (K)FML solutions to match your requirements') }}</li>
                                <li>{{ __('Flexible access based on your usage') }}</li>
                                <li>{{ __('Advanced form automation and integration options') }}</li>
                                <li>{{ __('Fair use policy applies') }}</li>
                                <li>{{ __('24/7 premium-ondersteuning') }}</li>
                                <li>{{ __('Many more') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection