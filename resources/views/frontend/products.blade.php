@php $classes = 'single-page about-page'; @endphp
@extends('layouts.user_type.guest')

@section('page_title', __('Products'))

@section('content')
<style>
    .container-img {
        padding: 20px 0;
        display: grid;
        grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
        justify-items: center;
        grid-gap: 10px;
    }

    .item {
        width: 100%;
        overflow: hidden;
        background: #000;
    }

    img {
        opacity: 0.6;
        width: 100%;
        height: 100%;
        transform: scale(1.15);
        transition: transform 0.5s, opacity 0.5s;
    }

    img:hover {
        opacity: 1;
        transform: scale(1.03);
    }

    .item {
        position: relative;
    }

    .checkout_btn {
        background: #635BFF;
        color: #fff;
        position: absolute;
        bottom: 5px;
        left: 50%;
        transform: translateX(-50%);
    }

    @media screen and (max-width: 767px) {
        .container-img {
            grid-gap: 0;
        }
    }
</style>
<div class="page-header">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Our Products</h1>
            </div>
        </div>
    </div>
</div>

<div class="container-img container">
    @foreach($products as $p)
    <div class="item">
        <a href="{{ asset('assets/images-x/products/'. $p->image) }}" data-fancybox="gallery">
            <img src="{{ asset('assets/images-x/products/'. $p->image) }}" alt="Mountain reflection on lake">
        </a>
        <a href="{{ route('front.checkout', [encrypt($p->id)]) }}" class="btn checkout_btn">
            <div class="price">Rs {{ $p->price }}
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cart" viewBox="0 0 16 16">
                    <path d="M0 1.5A.5.5 0 0 1 .5 1H2a.5.5 0 0 1 .485.379L2.89 3H14.5a.5.5 0 0 1 .491.592l-1.5 8A.5.5 0 0 1 13 12H4a.5.5 0 0 1-.491-.408L2.01 3.607 1.61 2H.5a.5.5 0 0 1-.5-.5M3.102 4l1.313 7h8.17l1.313-7zM5 12a2 2 0 1 0 0 4 2 2 0 0 0 0-4m7 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4m-7 1a1 1 0 1 1 0 2 1 1 0 0 1 0-2m7 0a1 1 0 1 1 0 2 1 1 0 0 1 0-2" />
                </svg>
            </div>
        </a>
    </div>
    @endforeach
</div>
@endsection

@section('front-footer')

@endsection