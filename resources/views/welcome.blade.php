@extends('layouts.app')
@section('title', 'Welcome')
@section('content')

<!-- start hero section -->
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>

        <div class="carousel-item active">
            <img class="d-block w-100 banner-images" src="{{ asset('images/banner/banner4.jpg') }}" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>Welcome to the site Welcome to the site</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, assumenda. Culpa, libero.</p>
                <button class="btn custom-border my-2 my-sm-0">Shop</button>
                <button class="btn custom-border my-2 my-sm-0">Contact Us</button>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 banner-images" src="{{ asset('images/banner/banner2.jpg') }}" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>Welcome to the site Welcome to the site</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, assumenda. Culpa, libero.</p>
                <button class="btn custom-border my-2 my-sm-0">Shop</button>
                <button class="btn custom-border my-2 my-sm-0">Contact Us</button>
            </div>
        </div>
        <div class="carousel-item">
            <img class="d-block w-100 banner-images" src="{{ asset('images/banner/banner3.jpg') }}" alt="Third slide">
            <div class="carousel-caption d-none d-md-block">
                <h3>Welcome to the site Welcome to the site</h3>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam, assumenda. Culpa, libero.</p>
                <button class="btn custom-border my-2 my-sm-0">Shop</button>
                <button class="btn custom-border my-2 my-sm-0">Contact Us</button>
            </div>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container site-intro-section">
    <div class="content-head">
        <h2 style="text-align:center; font-weight: bold">Ecommerce</h2>
        <p style="text-align: center">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam accusamus eos quibusdam, esse voluptates voluptatibus id corporis facere neque amet alias molestias itaque ex porro architecto blanditiis distinctio maxime laboriosam.</h2>
    </div>
    <h2 class="header text-center">Featured Products</h2>
    <!-- start products row -->
    <div class="row">
        @foreach ($products as $product)
        <!-- start single product -->
        <div class="col-md-6 col-sm-12 col-lg-4 product">
            <a href="{{ route('shop.show', $product->slug) }}" class="custom-card">
                <div class="card view overlay zoom">
                    <img src="{{ productImage($product->image) }}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}<span class="float-right">$ {{ format($product->price) }}</span></h5>
                        {{-- <div class="product-actions" style="display: flex; align-items: center; justify-content: center">
                                <a class="cart" href="#" style="margin-right: 1em"><i style="color:blue; font-size: 1.3em" class="fas fa-cart-plus"></i></a>
                                <a class="like" href="#" style="margin-right: 1em"><i style="color:blue; font-size: 1.3em" class="fa fa-thumbs-up"></i></a>
                                <a class="heart" href="#"><i style="color:blue; font-size: 1.3em" class="fa fa-heart-o"></i></a>
                            </div> --}}
                    </div>
                </div>
            </a>
        </div>
        <!-- end single product -->
        @endforeach
    </div>
    <!-- end products row -->
    <div class="show-more">
        <a href="{{ route('shop.index') }}">
            <button class="btn custom-border-n">Show more</button>
        </a>
    </div>
    <hr>
    <h2 class="header text-center">Hot Sales</h2>
    <!-- start products row -->
    <div class="row">
        @foreach ($hotProducts as $product)
        <!-- start single product -->
        <div class="col-md-6 col-sm-12 col-lg-4 product">
            <a href="{{ route('shop.show', $product->slug) }}" class="custom-card">
                <div class="card view overlay zoom">
                    <img src="{{ productImage($product->image) }}" class="card-img-top img-fluid" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $product->name }}<span class="float-right">$ {{ format($product->price) }}</span></h5>
                        {{-- <div class="product-actions" style="display: flex; align-items: center; justify-content: center">
                                <a class="cart" href="#" style="margin-right: 1em"><i style="color:blue; font-size: 1.3em" class="fas fa-cart-plus"></i></a>
                                <a class="like" href="#" style="margin-right: 1em"><i style="color:blue; font-size: 1.3em" class="fa fa-thumbs-up"></i></a>
                                <a class="heart" href="#"><i style="color:blue; font-size: 1.3em" class="fa fa-heart-o"></i></a>
                            </div> --}}
                    </div>
                </div>
            </a>
        </div>
        <!-- end single product -->
        @endforeach
    </div>
    <!-- end products row -->
</div>
<!-- end page content -->

@endsection