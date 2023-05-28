
<header>
    <!-- Jumbotron -->
    <div class="p-3 text-center bg-white border-bottom">
        <div class="container">
            <div class="row gy-3">
                <!-- Left elements -->
                <div class="col-lg-2 col-sm-4 col-4">
                    <a href="{{ url('/') }}" class="float-start">
                        <img src="https://mdbootstrap.com/img/logo/mdb-transaprent-noshadows.png" height="35" />
                    </a>
                </div>
                <!-- Left elements -->

                <!-- Center elements -->
                <div class="order-lg-last col-lg-5 col-sm-8 col-8">

                    <div class="d-flex float-end">
                        @guest
                        <a href="{{ route('login') }}" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center">
                            <i class="fas fa-user-alt m-1 me-md-2"></i>
                            <p class="d-none d-md-block mb-0">{{ __('Login') }}</p>
                        </a>
                        @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center">
                            <i class="fas fa-user-alt m-1 me-md-2"></i>
                            <p class="d-none d-md-block mb-0">{{ __('Register') }}</p>
                        </a>
                        @endif
                        @else
                        @if (auth()->user()->can('browse_admin'))
                        <a href="{{ url('/admin') }}" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center">
                            <i class="fas fa-user-alt m-1 me-md-2"></i>
                            <p class="d-none d-md-block mb-0">Dashboard</p>
                        </a>
                        @endif
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                        <!-- <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="me-1 border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank"> <i class="fas fa-heart m-1 me-md-2"></i><p class="d-none d-md-block mb-0">Wishlist</p> </a> -->
                        <!-- <a href="https://github.com/mdbootstrap/bootstrap-material-design" class="border rounded py-1 px-3 nav-link d-flex align-items-center" target="_blank"> <i class="fas fa-shopping-cart m-1 me-md-2"></i><p class="d-none d-md-block mb-0">My cart</p> </a> -->
                    </div>
                </div>
                <!-- Center elements -->

                <!-- Right elements -->
                <div class="col-lg-5 col-md-12 col-12">
                    <div class="input-group float-center">
                        <div class="form-outline">
                            <input id="search" name="search" type="search" class="form-control" />
                            <label class="form-label" for="form1">Search</label>
                        </div>
                        <button type="button" class="btn btn-primary shadow-0">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
                <!-- Right elements -->
            </div>
        </div>
    </div>
    <!-- Jumbotron -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #f5f5f5;">
        <!-- Container wrapper -->
        <div class="container justify-content-center justify-content-md-between">
            <!-- Toggle button -->
            <button class="navbar-toggler border text-dark py-2" type="button" data-mdb-toggle="collapse" data-mdb-target="#navbarLeftAlignExample" aria-controls="navbarLeftAlignExample" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarLeftAlignExample">
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link text-dark" aria-current="page" href="{{ url('/admin') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ url('/shop') }}">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ url('/about') }}">About us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ url('/privacy') }}">Privacy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ url('/contact-us') }}">Contact us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-dark" href="{{ url('/terms-condition') }}">Terms & Conditions</a>
                    </li>
                    
                </ul>
                <!-- Left links -->
            </div>
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->
</header>

<script>
    var searcher = $('#search')
    searcher.on('keypress', function(e) {
        if (e.which == 13) {
            if (searcher.val().length > 2) {
                location.href = '/shop/search/' + searcher.val();
            } else {
                alert('Minimun query length is 3');
            }
        }
    });
</script>