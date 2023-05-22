{{-- <!DOCTYPE html>
<html>
<head>
    <title>Laravel 10 Shopping Cart Example - LaravelTuts.com</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <script src="https://kit.fontawesome.com/71b7145720.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
</head>
<body>
  
<div class="container mt-5">
    <h2 class="mb-3">Laravel 10 Add To Shopping Cart Example - LaravelTuts.com</h2>
    <div class="col-12">
        <div class="dropdown" >
            <a class="btn btn-outline-dark" href="{{ route('shopping.cart') }}">
                <i class="fa-solid fa-cart-shopping"></i> Cart <span class="badge text-bg-danger">{{ count((array) session('cart')) }}</span>
            </a>
        </div>
    </div>
</div>

<div class="container mt-4">
    @if(session('success'))
        <div class="alert alert-success">
          {{ session('success') }}
        </div> 
    @endif
    @yield('content')
</div>
  
@yield('scripts')
</body>
</html> --}}


@extends('layouts.guest')
@section('content')
    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-option">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb__text">
                        <h4>Shop</h4>
                        <div class="breadcrumb__links">
                            <a href="/">Home</a>
                            <span>Shop</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__search">
                            <form id="search-form">
                                <input type="text" id="search-input" placeholder="Search">
                                <button type="button"><span class="icon_search"></span></button>
                            </form>
                            <div id="suggestions-container"></div>
                        </div>

                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div class="card-heading">
                                        <a data-toggle="collapse" data-target="#collapseOne">Categories</a>
                                    </div>
                                    <div id="collapseOne" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__categories">
                                                <ul class="nice-scroll">
                                                    <li><a class="category-button" data-category="All">All
                                                            ({{ count($products) }})</a></li>
                                                    @foreach ($categories as $category)
                                                        <li><a class="category-button"
                                                                data-category="{{ $category->name }}">{{ $category->name . ' (' . count($category->products) . ')' }}</a>
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <div class="shop__product__option__right">
                                    <p>Sort by Price:</p>
                                    <select id="sort-select">
                                        <option value="low-to-high">Low To High</option>
                                        <option value="high-to-low">High To Low</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-evenly product-container">
                        @if (count($products) == 0)
                            <h1>No product for now</h1>
                        @else
                            @foreach ($products as $product)
                                <x-product-card :product="$product" />
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->
@endsection
