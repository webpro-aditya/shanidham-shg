@php $classes = 'single-page contact-page'; @endphp
@extends('layouts.user_type.guest')

@section('page_title', __('Contact'))

@section('content')
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Contact</h1>
            </div>
        </div>
    </div>
</div>
<div class="contact-page-wrap">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-5">
                <div class="entry-content">
                    <h2>Get In touch with us</h2>
                    <p>Shanidham Self Help Group works for the welfare of the jewellery artisans who are a part of it. Feel free to contact us anytime.</p>
                    <ul class="contact-social d-flex flex-wrap align-items-center">
                        <!-- <li><a href="#"><i class="fa fa-pinterest-p"></i></a></li> -->
                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                        <!-- <li><a href="#"><i class="fa fa-dribbble"></i></a></li> -->
                        <!-- <li><a href="#"><i class="fa fa-behance"></i></a></li> -->
                        <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                    <ul class="contact-info p-0">
                        <li><i class="fa fa-phone"></i><a href="tel:+918368813338">+91 8368813338</a></li>
                        <li><i class="fa fa-envelope"></i><span><a
                                    href="mailto:shanidhamshg818@gmail.com" class="__cf_email__">shanidhamshg818@gmail.com</a></span>
                        </li>
                        <li><i class="fa fa-map-marker"></i><span>10/173 , First Floor, J.J., Colony, Dakshinpuri <br> New Delhi - 110062 , India</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-12 col-lg-7">
                <form class="contact-form">
                    <input type="text" placeholder="Name">
                    <input type="email" placeholder="Email">
                    <textarea rows="15" cols="6" placeholder="Messages"></textarea>
                    <span>
                        <input class="btn gradient-bg" type="submit" value="Contact us">
                    </span>
                </form>
            </div>
            <div class="col-12">
                <div class="contact-gmap">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14022.567303444299!2d77.23027302223657!3d28.52042207321339!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce19d14ab8055%3A0x37b514fa1ef75c7!2sDakshinpuri%2C%20New%20Delhi%2C%20Delhi%20110062!5e0!3m2!1sen!2sin!4v1658259065908!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('front-footer')

@endsection