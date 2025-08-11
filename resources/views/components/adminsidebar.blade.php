     <aside class="sidebar">
            <div class="sidebar-wrap">
                <div class="sidebar-body">
                    <div class="sidebar-nav-title">Pages</div>
                    @php
                        $currentPage = request()->query('page', 'home');
                    @endphp
                    <ul class="nav-list">
                        {{-- header  --}}
                          <li class="{{ $currentPage == 'header' ? 'active' : '' }}">
                            <a href="{{ route('home') }}/admin/edit?page=header">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2.25 6.75V17.25C2.25 17.8467 2.48705 18.419 2.90901 18.841C3.33097 19.2629 3.90326 19.5 4.5 19.5H19.5C20.0967 19.5 20.669 19.2629 21.091 18.841C21.5129 18.419 21.75 17.8467 21.75 17.25V6.75M2.25 6.75H12H21.75M2.25 6.75C2.25 6.30176 2.38375 5.8673 2.62916 5.5M21.75 6.75C21.75 6.15326 21.5129 5.58097 21.091 5.15901C20.669 4.73705 20.0967 4.5 19.5 4.5H4.5C3.90326 4.5 3.33097 4.73705 2.90901 5.15901C2.80401 5.26401 2.71046 5.37832 2.62916 5.5M2.62916 5.5H21.3708" stroke="#0E0B3D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5 13H19" stroke="#0E0B3D" stroke-width="1.5" stroke-linecap="round"/>
<path d="M5 16H17" stroke="#0E0B3D" stroke-width="1.5" stroke-linecap="round"/>
<path d="M5 10H13" stroke="#0E0B3D" stroke-width="1.5" stroke-linecap="round"/>
</svg>    
                            <span>{{__('Header')}}</span>
                            </a>
                        </li>
                        {{-- footer  --}}
                          <li class="{{ $currentPage == 'footer' ? 'active' : '' }}">
                            <a href="{{ route('home') }}/admin/edit?page=footer">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2.25 17.5C2.25 17.9482 2.38375 18.1327 2.62916 18.5M2.25 17.5H7H12H21.75M2.25 17.5V14.5V6.75C2.25 6.15326 2.48705 5.58097 2.90901 5.15901C3.33097 4.73705 3.90326 4.5 4.5 4.5H19.5C20.0967 4.5 20.669 4.73705 21.091 5.15901C21.5129 5.58097 21.75 6.15326 21.75 6.75V14.5V17.5M21.75 17.5C21.75 17.9288 21.6276 18.2158 21.4022 18.5M2.25 16H21.75M2.62916 18.5C2.71046 18.6217 2.80401 18.736 2.90901 18.841C3.33097 19.2629 3.90326 19.5 4.5 19.5H19.5C20.0967 19.5 20.669 19.2629 21.091 18.841C21.2098 18.7222 21.3139 18.6113 21.4022 18.5M2.62916 18.5H21.4022" stroke="#0E0B3D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M5 12H17" stroke="#0E0B3D" stroke-width="1.5" stroke-linecap="round"/>
<path d="M5 9H13" stroke="#0E0B3D" stroke-width="1.5" stroke-linecap="round"/>
</svg>    
                            <span>{{__('Footer')}}</span>
                            </a>
                        </li>

                        <!-- Home -->
                        <li class="{{ $currentPage == 'home' ? 'active' : '' }}">
                            <a href="{{ route('home') }}/admin/edit?page=home">
                                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M2.25 12.0001L11.204 3.04507C11.644 2.60607 12.356 2.60607 12.795 3.04507L21.75 12.0001M4.5 9.75007V19.8751C4.5 20.4961 5.004 21.0001 5.625 21.0001H9.75V16.1251C9.75 15.5041 10.254 15.0001 10.875 15.0001H13.125C13.746 15.0001 14.25 15.5041 14.25 16.1251V21.0001H18.375C18.996 21.0001 19.5 20.4961 19.5 19.8751V9.75007M8.25 21.0001H16.5" stroke="#0E0B3D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>
                                <span>{{ __('Home') }}</span>
                            </a>
                        </li>
                        <!-- Forms Group -->
                        <li class="{{ $currentPage == 'fml-kfml' ? 'active' : '' }}">
                            <a href="{{ route('home') }}/admin/edit?page=fml-kfml">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M8.25 7.5V6.108C8.25 4.973 9.095 4.01 10.226 3.916C10.599 3.886 10.974 3.859 11.349 3.836M15.75 18H18C18.5967 18 19.169 17.7629 19.591 17.341C20.0129 16.919 20.25 16.3467 20.25 15.75V6.108C20.25 4.973 19.405 4.01 18.274 3.916C17.9 3.88498 17.5256 3.85831 17.151 3.836M17.151 3.836C17.009 3.3767 16.7226 2.97493 16.3357 2.68954C15.9489 2.40414 15.4808 2.25011 15 2.25H13.5C13.0192 2.25011 12.5511 2.40414 12.1643 2.68954C11.7774 2.97493 11.492 3.3767 11.35 3.836C11.285 4.046 11.25 4.269 11.25 4.5V5.25H17.25V4.5C17.25 4.269 17.216 4.046 17.151 3.836ZM15.75 18.75V16.875C15.75 15.9799 15.3944 15.1215 14.7615 14.4885C14.1285 13.8556 13.2701 13.5 12.375 13.5H10.875C10.5766 13.5 10.2905 13.3815 10.0795 13.1705C9.86853 12.9595 9.75 12.6734 9.75 12.375V10.875C9.75 9.97989 9.39442 9.12145 8.76149 8.48851C8.12855 7.85558 7.27011 7.5 6.375 7.5H5.25M7 19H12M7 16H12M6.75 7.5H4.875C4.254 7.5 3.75 8.004 3.75 8.625V20.625C3.75 21.246 4.254 21.75 4.875 21.75H14.625C15.246 21.75 15.75 21.246 15.75 20.625V16.5C15.75 14.1131 14.8018 11.8239 13.114 10.136C11.4261 8.44821 9.13695 7.5 6.75 7.5Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>    
                            <span>FML/KFML</span>
                            </a>
                        </li>
                        <li class="{{ $currentPage == 'custom-form' ? 'active' : '' }}">
                            <a href="{{ route('home') }}/admin/edit?page=custom-form">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M14 2H6C5.46957 2 4.96086 2.21071 4.58579 2.58579C4.21071 2.96086 4 3.46957 4 4V20C4 20.5304 4.21071 21.0391 4.58579 21.4142C4.96086 21.7893 5.46957 22 6 22H18C18.5304 22 19.0391 21.7893 19.4142 21.4142C19.7893 21.0391 20 20.5304 20 20V8L14 2Z" stroke="#0E0B3D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M14 2V8H20" stroke="#0E0B3D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M16 13H8" stroke="#0E0B3D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M16 17H8" stroke="#0E0B3D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
<path d="M10 9H9H8" stroke="#0E0B3D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>    
                            <span>{{ __('Custom Form') }}</span>
                            </a>
                        </li>
                        <!-- Pricing -->
                        <li class="{{ $currentPage == 'pricing' ? 'active' : '' }}">
                            <a href="{{ route('home') }}/admin/edit?page=pricing">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M12 6V18M9 15.182L9.879 15.841C11.05 16.72 12.949 16.72 14.121 15.841C15.293 14.962 15.293 13.538 14.121 12.659C13.536 12.219 12.768 12 12 12C11.275 12 10.55 11.78 9.997 11.341C8.891 10.462 8.891 9.038 9.997 8.159C11.103 7.28 12.897 7.28 14.003 8.159L14.418 8.489M21 12C21 13.1819 20.7672 14.3522 20.3149 15.4442C19.8626 16.5361 19.1997 17.5282 18.364 18.364C17.5282 19.1997 16.5361 19.8626 15.4442 20.3149C14.3522 20.7672 13.1819 21 12 21C10.8181 21 9.64778 20.7672 8.55585 20.3149C7.46392 19.8626 6.47177 19.1997 5.63604 18.364C4.80031 17.5282 4.13738 16.5361 3.68508 15.4442C3.23279 14.3522 3 13.1819 3 12C3 9.61305 3.94821 7.32387 5.63604 5.63604C7.32387 3.94821 9.61305 3 12 3C14.3869 3 16.6761 3.94821 18.364 5.63604C20.0518 7.32387 21 9.61305 21 12Z" stroke="#0E0B3D" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>    
                            <span>{{ __('Pricing') }}</span>
                            </a>
                        </li>
                        <!-- Contact -->
                        <li class="{{ $currentPage == 'contact-us' ? 'active' : '' }}">
                            <a href="{{ route('home') }}/admin/edit?page=contact">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M10.875 7.55556H16.5M10.875 12H16.5M10.875 16.4444H16.5M9.75 2H5.6875C4.756 2 4 2.74667 4 3.66667V20.3333C4 21.2533 4.756 22 5.6875 22H18.3125C19.244 22 20 21.2533 20 20.3333V3.66667C20 2.74667 19.244 2 18.3125 2H9.75ZM7.5 7.55556H7.512V7.56741H7.5V7.55556ZM7.5 12H7.512V12.0119H7.5V12ZM7.5 16.4444H7.512V16.4563H7.5V16.4444Z" stroke="black" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
</svg>    
                            <span>{{ __('Contact') }}</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </aside>