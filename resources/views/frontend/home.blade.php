@php $classes = ''; @endphp
@extends('layouts.user_type.guest')

@section('page_title', __('Shanidham Self Help Group'))
@section('front-header')

@endsection
@section('content')
<div class="swiper-container hero-slider">
  <div class="swiper-wrapper">
    <div class="swiper-slide hero-content-wrap">
      <img src="{{ asset('assets/images-x/banner/IMG_9802-min.jpg' ) }}" alt="">
      <div class="hero-content-overlay position-absolute w-100 h-100">
        <div class="container h-100">
          <div class="row h-100">
            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
              <header class="entry-header">
                <h1>We Help</h1>
                <h4>Artisans to enhance skills</h4>
              </header>
              <!-- <div class="entry-content mt-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis
                  aliquam. Integer accumsan sodales odio, id tempus ullamcorper</p> 
              </div> -->
              <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                <a href="{{ route('front.contact') }}" class="btn gradient-bg mr-2">Contact Now</a>
                <a href="{{ route('front.products') }}" class="btn orange-border">Our Products</a>
              </footer>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-slide hero-content-wrap">
      <img src="{{ asset('assets/images-x/banner/IMG_9823-min.jpg' ) }}" alt="">
      <div class="hero-content-overlay position-absolute w-100 h-100">
        <div class="container h-100">
          <div class="row h-100">
            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
              <header class="entry-header">
                <h1>We Nurture</h1>
                <h4>the marketing skills</h4>
              </header>
              <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                <a href="{{ route('front.contact') }}" class="btn gradient-bg mr-2">Contact Now</a>
                <a href="{{ route('front.products') }}" class="btn orange-border">Our Products</a>
              </footer>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="swiper-slide hero-content-wrap">
      <img src="{{ asset('assets/images-x/banner/IMG_9944-min.jpg' ) }}" alt="">
      <div class="hero-content-overlay position-absolute w-100 h-100">
        <div class="container h-100">
          <div class="row h-100">
            <div class="col-12 col-lg-8 d-flex flex-column justify-content-center align-items-start">
              <header class="entry-header">
                <h1>We Create</h1>
                <h4>Handcrafted Masterpieces</h4>
              </header>
              <!-- <div class="entry-content mt-4">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris tempus vestibulum mauris quis
                  aliquam. Integer accumsan sodales odio, id tempus ullamcorper</p>
              </div> -->
              <footer class="entry-footer d-flex flex-wrap align-items-center mt-5">
                <a href="{{ route('front.contact') }}" class="btn gradient-bg mr-2">Contact Now</a>
                <a href="{{ route('front.products') }}" class="btn orange-border">Our Products</a>
              </footer>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="pagination-wrap position-absolute w-100">
    <div class="container">
      <div class="swiper-pagination"></div>
    </div>
  </div>

  <div class="swiper-button-next flex justify-content-center align-items-center">
    <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M1171 960q0 13-10 23l-466 466q-10 10-23 10t-23-10l-50-50q-10-10-10-23t10-23l393-393-393-393q-10-10-10-23t10-23l50-50q10-10 23-10t23 10l466 466q10 10 10 23z" />
      </svg></span>
  </div>
  <div class="swiper-button-prev flex justify-content-center align-items-center">
    <span><svg viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
        <path
          d="M1203 544q0 13-10 23l-393 393 393 393q10 10 10 23t-10 23l-50 50q-10 10-23 10t-23-10l-466-466q-10-10-10-23t10-23l466-466q10-10 23-10t23 10l50 50q10 10 10 23z" />
      </svg></span>
  </div>
</div>
<div class="home-page-icon-boxes">
  <div class="container">
    <div class="row">
      <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
        <div class="icon-box active">
          <figure class="d-flex justify-content-center">
            <img src="images/xhands-gray.png.pagespeed.ic.CJmVS_foel.png" alt="">
            <img src="images/xhands-white.png.pagespeed.ic.aPk17Mmcpm.png" alt="">
          </figure>
          <header class="entry-header">
            <h3 class="entry-title">Become a Volunteer</h3>
          </header>
          <div class="entry-content">
            <p>Help us to fulfill the dreams of many. You can work with our teams to perform various tasks.
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
        <div class="icon-box">
          <figure class="d-flex justify-content-center">
            <img src="images/xdonation-gray.png.pagespeed.ic._ztxhkA2lb.png" alt="">
            <img src="images/xdonation-white.png.pagespeed.ic.rRfoAu8P20.png" alt="">
          </figure>
          <header class="entry-header">
            <h3 class="entry-title">Support Financially</h3>
          </header>
          <div class="entry-content">
            <p>You can also suppport our artisans Financially. Also, you can support in many other ways.
            </p>
          </div>
        </div>
      </div>
      <div class="col-12 col-md-6 col-lg-4 mt-4 mt-lg-0">
        <div class="icon-box">
          <figure class="d-flex justify-content-center">
            <img src="images/xcharity-gray.png.pagespeed.ic.lKA39nCGzh.png" alt="">
            <img src="images/xcharity-white.png.pagespeed.ic.S8SBVt0HRp.png" alt="">
          </figure>
          <header class="entry-header">
            <h3 class="entry-title">Promote Us</h3>
          </header>
          <div class="entry-content">
            <p>Promote our events which take place regularly. Tell us and we will reach out to you.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="home-page-welcome">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-6 order-2 order-lg-1">
        <div class="welcome-content">
          <header class="entry-header">
            <h2 class="entry-title">What we Do? </h2>
          </header>
          <div class="entry-content mt-5">
            <p>Shanidham Self Help Group works for the welfare of the jewellery artisans who are a part of it. The artisans work on modern, unique designs which have a huge demand in the market. This enhances their skill level and improves therir lifestyle as well. We help them to provide needed techical support if required, so that they do not lag behind in the current world of competition. </p>
          </div>
          <div class="entry-footer mt-5">
            <a href="{{ route('front.about') }}" class="btn gradient-bg mr-2">Read More</a>
          </div>
        </div>
      </div>
      <div class="col-12 col-lg-6 mt-4 order-1 order-lg-2">
        <img src="{{ asset('assets/images-x/events/IMG_0784.jpg' ) }}" alt="welcome">
      </div>
    </div>
  </div>
</div>

<div class="container padd-y">



  <!--Item slider text-->
  <h1 class="text-center"> Product Slider</h1>

  <!-- Item slider-->
  <div class="container-fluid">

    <div class="row">
      <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="carousel carousel-showmanymoveone slide" id="itemslider">
          <div class="carousel-inner">

            <div class="item active">
              <div class="col-xs-12 col-sm-6 col-md-2">
                <a href="#"><img src="{{ asset('assets/images-x/products/DSC_6998.jpg' ) }}" class="img-responsive center-block"></a>
                <h4 class="text-center">Necklace and Earings</h4>
                <h5 class="text-center">Rs 500</h5>
              </div>
            </div>

            <div class="item">
              <div class="col-xs-12 col-sm-6 col-md-2">
                <a href="#"><img src="{{ asset('assets/images-x/products/DSC_7003.jpg' ) }}" class="img-responsive center-block"></a>
                <h4 class="text-center">Necklace</h4>
                <h5 class="text-center">Rs 350</h5>
              </div>
            </div>

            <div class="item">
              <div class="col-xs-12 col-sm-6 col-md-2">
                <a href="#"><img src="{{ asset('assets/images-x/products/DSC_7007.jpg' ) }}" class="img-responsive center-block"></a>
                <span class="badge">10%</span>
                <h4 class="text-center">Necklace</h4>
                <h5 class="text-center">Rs 400</h5>
              </div>
            </div>

            <div class="item">
              <div class="col-xs-12 col-sm-6 col-md-2">
                <a href="#"><img src="{{ asset('assets/images-x/products/DSC_7027.jpg' ) }}" class="img-responsive center-block"></a>
                <h4 class="text-center">Earings</h4>
                <h5 class="text-center">Rs 200</h5>
              </div>
            </div>

            <div class="item">
              <div class="col-xs-12 col-sm-6 col-md-2">
                <a href="#"><img src="{{ asset('assets/images-x/products/DSC_7029.jpg' ) }}" class="img-responsive center-block"></a>
                <h4 class="text-center">Necklace and Earings</h4>
                <h5 class="text-center">Rs 600</h5>
              </div>
            </div>

            <div class="item">
              <div class="col-xs-12 col-sm-6 col-md-2">
                <a href="#"><img src="{{ asset('assets/images-x/products/DSC_7015.jpg' ) }}" class="img-responsive center-block"></a>
                <h4 class="text-center">Necklace and Earings</h4>
                <h5 class="text-center">Rs 350</h5>
              </div>
            </div>

          </div>

          <div id="slider-control">
            <a class="left carousel-control" href="#itemslider" data-slide="prev"><img src="https://cdn0.iconfinder.com/data/icons/website-kit-2/512/icon_402-512.png" alt="Left" class="img-responsive"></a>
            <a class="right carousel-control" href="#itemslider" data-slide="next"><img src="http://pixsector.com/cache/81183b13/avcc910c4ee5888b858fe.png" alt="Right" class="img-responsive"></a>
          </div>
        </div>
        <a style="float: right" href="{{ route('front.products') }}" class="btn gradient-bg mr-2 mt-4">More Products</a>
      </div>
    </div>
  </div>
</div>
@endsection

@section('front-footer')

<script>
  $(document).ready(function() {

    $('#itemslider').carousel({
      interval: 3000
    });

    $('.carousel-showmanymoveone .item').each(function() {
      var itemToClone = $(this);

      for (var i = 1; i < 6; i++) {
        itemToClone = itemToClone.next();

        if (!itemToClone.length) {
          itemToClone = $(this).siblings(':first');
        }

        itemToClone.children(':first-child').clone()
          .addClass("cloneditem-" + (i))
          .appendTo($(this));
      }
    });
  });
</script>
@endsection