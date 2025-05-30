@extends("layouts.app")
@section('title', 'FML/KFML')
@section('content')
    <div class="gradient-inner">
        <div class="container">
            <div class="iqb-section-header iqb-page-head" data-animate="fade-up">
                <label class="iqb-label">FML/KFML</label>
                <h1 id="page-title">{{ __('Smart forms tailored to your needs') }}</h1>
                <p>{{ __('FMLKFML Description') }}</p>
            </div>
            <div class="iqb-solutions-body">
                <div class="iqb-solutions-content row align-center justify-between">
                    <div class="iqb-solutions-left col-2" data-animate="fade-up">
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
                    <div class="iqb-solutions-right col-2" data-animate="fade-up">
                        <figure>
                              <img src="{{ asset('assets/images/fml5-nl.svg') }}" alt="fml5-nl" class="">
                        </figure>
                    </div>
                </div>
                <div class="iqb-solutions-content row align-center justify-between">
                    <div class="iqb-solutions-left col-2" data-animate="fade-up">
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
                    <div class="iqb-solutions-right col-2" data-animate="fade-up">
                        <figure>
                                  <img src="{{ asset('assets/images/fml4-nl.svg') }}" alt="fml4-nl" class="">
                        </figure>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection