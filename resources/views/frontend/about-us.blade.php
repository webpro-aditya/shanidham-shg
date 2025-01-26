@php $classes = 'single-page about-page'; @endphp
@extends('layouts.user_type.guest')

@section('page_title', __('About Us'))
@section('content')
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>About Us</h1>
            </div>
        </div>
    </div>
</div>
<div class="welcome-wrap">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 order-2 order-lg-1">
                <div class="welcome-content">
                    <header class="entry-header">
                        <h2 class="entry-title">Shanidham Self Help Group</h2>
                    </header>
                    <div class="entry-content mt-5">
                        <p>Shanidham Self Help Group works for the welfare of the jewellery artisans who are a part of it. The artisans work on modern, unique designs which have a huge demand in the market. This enhances their skill level and improves therir lifestyle as well. We help them to provide needed techical support if required, so that they do not lag behind in the current world of competition.</p>
                    </div>
                    {{--<div class="entry-footer mt-5">
                        <a href="#" class="btn gradient-bg mr-2">Read More</a>
                    </div>--}}
                </div>
            </div>
            <div class="col-12 col-lg-6 order-1 order-lg-2">
                <img src="{{ asset('assets/images-x/events/IMG_0784.jpg') }}" alt="welcome">
            </div>
        </div>
    </div>
</div>
<!-- <div class="about-stats">
    <div class="container">
        <div class="row">
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="circular-progress-bar">
                    <div class="circle" id="loader_1">
                        <strong class="d-flex justify-content-center"></strong>
                    </div>
                    <h3 class="entry-title">Hard Work</h3>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="circular-progress-bar">
                    <div class="circle" id="loader_2">
                        <strong class="d-flex justify-content-center"></strong>
                    </div>
                    <h3 class="entry-title">Pure Love</h3>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="circular-progress-bar">
                    <div class="circle" id="loader_3">
                        <strong class="d-flex justify-content-center"></strong>
                    </div>
                    <h3 class="entry-title">Smart Ideas</h3>
                </div>
            </div>
            <div class="col-12 col-sm-6 col-lg-3">
                <div class="circular-progress-bar">
                    <div class="circle" id="loader_4">
                        <strong class="d-flex justify-content-center"></strong>
                    </div>
                    <h3 class="entry-title">Good Decisions</h3>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="about-testimonial">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 col-lg-5">
                <div class="testimonial-cont">
                    <div class="entry-content">
                        <p>We love to help all the children that have problems in the world. After 15 years we have many
                            goals achieved.</p>
                    </div>
                    <div class="entry-footer d-flex flex-wrap align-items-center mt-5">
                        <img src="images/xtestimonial-1.jpg.pagespeed.ic.cFP4cdHn4d.jpg" alt="">
                        <h4>Maria Williams, <span>Volunteer</span></h4>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 offset-lg-2 col-lg-5">
                <div class="testimonial-cont">
                    <div class="entry-content">
                        <p>We love to help all the children that have problems in the world. After 15 years we have many
                            goals achieved.</p>
                    </div>
                    <div class="entry-footer d-flex flex-wrap align-items-center mt-5">
                        <img src="images/xtestimonial-2.jpg.pagespeed.ic.JByOxqmpDp.jpg" alt="">
                        <h4>Cristian James, <span>Volunteer</span></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->

@endsection

@section('front-footer')

@endsection