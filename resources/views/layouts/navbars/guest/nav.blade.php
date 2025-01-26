<header class="site-header">
        <div class="top-header-bar">
            <div class="container">
                <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                    <div
                        class="col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                        <div class="header-bar-email">
                            MAIL: <a href="maito:shanidhamshg818@gmail.com"><span class="__cf_email__"
                                    >shanidhamshg818@gmail.com</span></a>
                        </div>
                        <div class="header-bar-text">
                            <p>ADDRESS: <span>10/173 , FIRST FLOOR, J.J. COLONY, DAKSHINPURI , NEW DELHI - 110062 , INDIA</span></p>
                        </div>
                    </div>
                    <div
                        class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                        <div class="donate-btn">
                            <a href="{{ route('front.e-brochure') }}">Download Brochure</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center p-0">
                            <a class="d-block" href="{{ route('home') }}" rel="home"><img class="d-block logo-img"
                                    src="{{ asset('assets/images-x/logo.png') }}" alt="logo">
                                <span>Shanidham Self Help Group</span></a>
                        </div>
                        <nav class="site-navigation d-flex justify-content-end align-items-center">
                            <ul class="d-flex flex-column flex-lg-row justify-content-lg-end align-content-center">
                                <li class="current-menu-item"><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('front.about') }}">About Us</a></li>
                                <li><a href="{{ route('front.management') }}">Management</a></li>
                                <li><a href="{{ route('front.products') }}">Products</a></li>
                                <li><a href="{{ route('front.events') }}">Events</a></li>
                                <li><a href="{{ route('front.contact') }}">Contact Us</a></li>
                            </ul>
                        </nav>
                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>