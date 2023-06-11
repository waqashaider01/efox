<link rel="stylesheet" href="{{ asset('frontend/css/header.css') }}">
<nav class="top-nav">
    <div class="logo">
        <img src="{{ asset('frontend/images/logo.png') }}" alt="">
    </div>
    <div class="right-nav">
        <div class="social-links">
            <a href=""><img src="{{ asset('frontend/images/header/facebook.png') }}" alt=""></a>
            <a href=""><img src="{{ asset('frontend/images/header/twitter.png') }}" alt=""></a>
            <a href=""><img src="{{ asset('frontend/images/header/pinterest.png') }}" alt=""></a>
            <a href=""><img src="{{ asset('frontend/images/header/instagram.png') }}" alt=""></a>
            <a href=""><img src="{{ asset('frontend/images/header/bell.png') }}" alt=""></a>
            <a href=""><img src="{{ asset('frontend/images/header/comment.png') }}" alt=""></a>
            <a href=""><img src="{{ asset('frontend/images/header/user.png') }}" alt=""></a>
        </div>
        <div class="auth-links">
            @if(auth()->user())
                <p><a href="#" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();

                ">Logout</a></p>
                <form method="POST" action="{{ route('logout') }}" id="logout-form">
                            @csrf
                        </form>
            @else
            <p>Welcome, Guest ( <a href="{{ url('signup') }}">Register</a> | <a href="{{ url('login') }}">Login</a> )</p>
            @endif
        </div>
    </div>
</nav>
<header class="d-flex align-items-center justify-content-between">
    <div class="mx-1">
        <a href="{{ '/' }}"><i class="fas fa-home"></i></a>
    </div>
    <div class="input-group mx-1 quick-search">
        <span class="input-group-text" id="basic-addon1"><i class="fas fa-search"></i></span>
        <input type="text" class="form-control" placeholder="Quick Search" aria-label="Username"
            aria-describedby="basic-addon1">
    </div>
    <div class="mx-1">
        <select class="form-select" aria-label="Default select example">
            <option selected>All Categories</option>
            @foreach(\App\Models\Category::all() as $category)
            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mx-1">
        <select class="form-select" aria-label="Default select example">
            <option selected>On Auction</option>
            <option value="1">Buy Now</option>
        </select>
    </div>
    <div class="mx-1">
        <select class="form-select" aria-label="Default select example">
            <option selected>Gauteng</option>
            @foreach(\App\Models\City::all() as $city)
            <option value="{{ $city->id }}">{{ $city->city_name }}</option>
            @endforeach
        </select>
    </div>
    <div class="mx-1">
        <input type="text" class="form-control header-input" placeholder="Keyword">
    </div>
    <div class="mx-1">
        <button type="submit" class="go-btn">GO</button>
    </div>
    <div class="mx-1">
        <select class="form-select" aria-label="Default select example">
            <option selected>Latests Listings</option>
            @foreach(\App\Models\Listing::all() as $latest_listing)
            <option value="{{ $latest_listing->id }}">{{ $latest_listing->title }}</option>
            @endforeach
        </select>
    </div>
    <div class="mx-1">
        <button type="button" class="btn btn-outline-primary border border-primary text-dark">Auctions Ending soon</button>
    </div>
    <div class="mx-1">
        @if(auth()->user())
        <a href="{{ url('seller-product-listing') }}" class="sell-btn"><i class="fas fa-plus"></i> Sell</a>
        @else
        <a href="{{ url('signup') }}" class="sell-btn"><i class="fas fa-plus"></i> Sell</a>
        @endif
    </div>
</header>{{-- header-end --}}
