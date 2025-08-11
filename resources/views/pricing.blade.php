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
                        <h4>{{ __('trialPlan_heading') }}</h4>
                        <p>{{ __('trialPlan_description') }}</p>
                        <div class="price-wrap">
                            <span class="price-sign">€<span id="price_trial">{{ __('trialPlan_price') }}</span></span> <span class="duration"> /
                                {{ __('Year') }}</span>
                        </div>
                        <a href="{{ __('trialPlan_button_url') }}" class="btn" target="_self"
                            aria-label="Choose Trial">{{ __('trialPlan_button_text') }}
                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 15" fill="none">
                                <path d="M1 1L7.5 7.5L1 14" stroke="#fff" stroke-width="2"></path>
                            </svg>
                        </a>
                        <div>
                           {!! __('trialPlan_details') !!}
                        </div>
                    </div>
                    <div class="pricing-box most-popular-box">
                        <span class="most-populor-tag">{{ __('most_popular') }}</span>
                        <h4>{{ __('personalPlan_heading') }}</h4>
                        <p>{{ __('personalPlan_description') }}</p>
                        <div class="price-wrap">
                            <span class="price-sign">€<span data-price="15" id="price_personal">{{ __('personalPlan_price') }}</span></span> <span
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
                        <a href="{{ __('personalPlan_button_url') }}" class="btn" target="_self"
                            aria-label="Choose Personal">{{ __('personalPlan_button_text') }}
                            <svg xmlns="http://www.w3.org/2000/svg" width="9" height="12" viewBox="0 0 9 15" fill="none">
                                <path d="M1 1L7.5 7.5L1 14" stroke="#fff" stroke-width="2"></path>
                            </svg>
                        </a>
                        <div>
                           {!! __('personalPlan_details') !!}
                        </div>
                    </div>
                    <div class="pricing-box">
                        <h4>{{ __('businessPlan_heading') }}</h4>
                        <p>{{ __('businessPlan_description') }}</p>
                        <div>
                            {!! __('businessPlan_details') !!}
                        </div>
                    </div>
                    <div class="pricing-box">
                        <h4>{{ __('customPlan_heading') }}</h4>
                        <p>{{ __('customPlan_description') }}</p>
                        <div>
                             {!! __('customPlan_details') !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection