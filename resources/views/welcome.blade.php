@extends('layouts.app')
@section('title', 'Welcome')

@section('content')

<!-- start hero section -->
<!-- <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
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
</div> -->

<!-- intro -->
<section class="pt-3">
  <div class="container">
    <div class="row gx-3">
      <main class="col-lg-9">
        <div class="card-banner p-5 bg-primary rounded-5" style="height: 350px;">
          <div style="max-width: 500px;">
            <h2 class="text-white">
              Great products with <br />
              best deals
            </h2>
            <p class="text-white">No matter how far along you are in your sophistication as an amateur astronomer, there is always one.</p>
            <a href="#" class="btn btn-light shadow-0 text-primary"> View more </a>
          </div>
        </div>
      </main>
      <aside class="col-lg-3">
        <div class="card-banner h-100 rounded-5" style="background-color: #f87217;">
          <div class="card-body text-center pb-5">
            <h5 class="pt-5 text-white">Amazing Gifts</h5>
            <p class="text-white">No matter how far along you are in your sophistication</p>
            <a href="#" class="btn btn-outline-light"> View more </a>
          </div>
        </div>
      </aside>
    </div>
    <!-- row //end -->
  </div>
  <!-- container end.// -->
</section>
<!-- intro -->

<!-- Products -->
<section>
  <div class="container my-5">
    <header class="mb-4">
      <h3>New products</h3>
    </header>    
     <div class="row">        
        @foreach ($products as $product)      
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card my-2 shadow-2-strong">
                <a href="{{ route('shop.show', $product->slug) }}" class="custom-card">
                    <img src="{{ productImage($product->image) }}" class="card-img-top rounded-2" style="aspect-ratio: 1 / 1" />
                </a>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Rs. {{ format($product->price) }}</h5>
                    <p class="card-text">{{ $product->name }}</p>
                    <p class="card-text">{{ $product->details }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="show-more">
        <a href="{{ route('shop.index') }}">
            <button class="btn custom-border-n">Show more</button>
        </a>
    </div>
  </div>
</section>

<!-- Features -->
<section>
  <div class="container">
    <div class="card p-4 bg-primary">
      <div class="row align-items-center">
        <div class="col">
          <h4 class="mb-0 text-white">Best products and brands in store</h4>
          <p class="mb-0 text-white-50">Trendy products and gadgets for your daily needs</p>
        </div>
        <div class="col-auto"><a class="btn btn-white text-primary shadow-0" href="#">Discover</a></div>
      </div>
    </div>
  </div>
</section>
<!-- Features -->

<!-- Recommended -->
<section>
  <div class="container my-5">
    <header class="mb-4">
      <h3>Recommended</h3>
    </header>
    <div class="row">
        @foreach ($hotProducts as $product)
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card my-2 shadow-2-strong">
                <a href="{{ route('shop.show', $product->slug) }}" class="custom-card">
                    <img src="{{ productImage($product->image) }}" class="card-img-top rounded-2" style="aspect-ratio: 1 / 1" />
                </a>
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Rs. {{ format($product->price) }}</h5>
                    <p class="card-text">{{ $product->name }}</p>
                    <p class="card-text">{{ $product->details }}</p>
                </div>
            </div>
        </div>       
        @endforeach
    </div>
  </div>
</section>


@endsection