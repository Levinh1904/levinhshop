@extends('welcome')
@section('content')
<!-- Begin Slider Area -->
<div class="slider-area">

    <!-- Main Slider -->
    <div class="swiper-container main-slider-2 swiper-arrow with-bg_white">
        <div class="swiper-wrapper">
            <div class="swiper-slide animation-style-01">
                <div class="slide-inner bg-height" data-bg-image="public/frontend/images/slider/bg/2-1.jpg">
                    <div class="container">
                        <div class="slide-content">
                            <h2 class="title font-weight-bold mb-4">Fresh Organic <br> Products</h2>
                            <p class="short-desc different-width mb-9">Best Offer Products 100% Naturan Healthy Food For Your Life</p>
                            <div class="button-wrap">
                                <a class="btn btn-custom-size lg-size btn-primary btn-white-hover rounded-0" href="shop.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide animation-style-01">
                <div class="slide-inner bg-height" data-bg-image="public/frontend/images/slider/bg/2-2.jpg">
                    <div class="container">
                        <div class="slide-content">
                            <h2 class="title font-weight-bold mb-4">Fresh Organic <br> Products</h2>
                            <p class="short-desc different-width mb-9">Best Offer Products 100% Naturan Healthy Food For Your Life</p>
                            <div class="button-wrap">
                                <a class="btn btn-custom-size lg-size btn-primary btn-white-hover rounded-0" href="shop.html">Shop Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination with-bg d-md-none"></div>

        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

</div>
<!-- Slider Area End Here -->

<!-- Begin Banner With Category -->
<div class="banner-with-category">
    <div class="banner-area section-space-top-95">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="banner-item">
                        <div class="banner-img img-zoom-effect">
                            <img class="img-full" src="public/frontend/images/banner/1-1-370x250.jpg" alt="Banner Image">
                            <div class="inner-content">
                                <h5 class="offer">-10% Off</h5>
                                <h4 class="title mb-5">Bell Pepper<br>Orange</h4>
                                <div class="button-wrap">
                                    <a class="btn btn-primary btn-white-hover rounded-0" href="shop.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-6 pt-md-0">
                    <div class="banner-item">
                        <div class="banner-img img-zoom-effect">
                            <img class="img-full" src="public/frontend/images/banner/1-2-370x250.jpg" alt="Banner Image">
                            <div class="inner-content">
                                <h5 class="offer">-20% Off</h5>
                                <h4 class="title mb-5">Fruit Juice<br>Package</h4>
                                <div class="button-wrap">
                                    <a class="btn btn-custom-size btn-primary btn-white-hover rounded-0" href="shop.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 pt-6 pt-lg-0">
                    <div class="banner-item">
                        <div class="banner-img img-zoom-effect">
                            <img class="img-full" src="public/frontend/images/banner/1-3-370x250.jpg" alt="Banner Image">
                            <div class="inner-content">
                                <h5 class="offer">-30% Off</h5>
                                <h4 class="title mb-5">Full Fresh<br>Vegetable</h4>
                                <div class="button-wrap">
                                    <a class="btn btn-custom-size btn-primary btn-white-hover rounded-0" href="shop.html">Shop Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner With Category End Here -->

<!-- Begin Product Area -->
<div class="product-area product-style-2 section-space-y-axis-100">
    <div class="container">
        <div class="section-title text-center pb-55">
            <h2 class="title mb-0">Sản Phẩm</h2>
        </div>
        <div class="row">
            <div class="col-xl-3 col-lg-4 col-sm-6">
                <div class="product-item">
                    <div style="margin-right:5px ;">

                    </div>
                    <div class="product-img img-zoom-effect">

                        <a href="single-product.html">

                            <img class="img-full" src="public/frontend/images/product/medium-size/1-1-270x300.jpg" alt="Product Images">
                        </a>
                        <div class="product-add-action">
                            <ul>
                                <li>
                                    <a href="cart.html">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i class="pe-7s-shuffle"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <a class="product-name" href="single-product.html">Lemon Juice</a>
                        <div class="price-box pb-1">
                            <span class="new-price">$80.00</span>
                        </div>
                        <div class="rating-box">
                            <ul>
                                <li><i class="pe-7s-star"></i></li>
                                <li><i class="pe-7s-star"></i></li>
                                <li><i class="pe-7s-star"></i></li>
                                <li><i class="pe-7s-star"></i></li>
                                <li><i class="pe-7s-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-sm-0">
                <div class="product-item">
                    <div class="product-img img-zoom-effect">
                        <a href="single-product.html">
                            <img class="img-full" src="public/frontend/images/product/medium-size/1-2-270x300.jpg" alt="Product Images">
                        </a>
                        <div class="product-add-action">
                            <ul>
                                <li>
                                    <a href="cart.html">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i class="pe-7s-shuffle"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <a class="product-name" href="single-product.html">Cow Milk & Meat</a>
                        <div class="price-box pb-1">
                            <span class="new-price">$80.00</span>
                        </div>
                        <div class="rating-box">
                            <ul>
                                <li><i class="pe-7s-star"></i></li>
                                <li><i class="pe-7s-star"></i></li>
                                <li><i class="pe-7s-star"></i></li>
                                <li><i class="pe-7s-star"></i></li>
                                <li><i class="pe-7s-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-lg-0">
                <div class="product-item">
                    <div class="product-img img-zoom-effect">
                        <a href="single-product.html">
                            <img class="img-full" src="public/frontend/images/product/medium-size/1-3-270x300.jpg" alt="Product Images">
                        </a>
                        <div class="product-add-action">
                            <ul>
                                <li>
                                    <a href="cart.html">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i class="pe-7s-shuffle"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <a class="product-name" href="single-product.html">Black Pepper Grains</a>
                        <div class="price-box pb-1">
                            <span class="new-price">$80.00</span>
                        </div>
                        <div class="rating-box">
                            <ul>
                                <li><i class="pe-7s-star"></i></li>
                                <li><i class="pe-7s-star"></i></li>
                                <li><i class="pe-7s-star"></i></li>
                                <li><i class="pe-7s-star"></i></li>
                                <li><i class="pe-7s-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6 pt-xl-0">
                <div class="product-item">
                    <div class="product-img img-zoom-effect">
                        <a href="single-product.html">
                            <img class="img-full" src="public/frontend/images/product/medium-size/1-4-270x300.jpg" alt="Product Images">
                        </a>
                        <div class="product-add-action">
                            <ul>
                                <li>
                                    <a href="cart.html">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i class="pe-7s-shuffle"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <a class="product-name" href="single-product.html">Peanut Big Bean</a>
                        <div class="price-box pb-1">
                            <span class="new-price">$80.00</span>
                        </div>
                        <div class="rating-box">
                            <ul>
                                <li><i class="pe-7s-star"></i></li>
                                <li><i class="pe-7s-star"></i></li>
                                <li><i class="pe-7s-star"></i></li>
                                <li><i class="pe-7s-star"></i></li>
                                <li><i class="pe-7s-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                <div class="product-item">
                    <div class="product-img img-zoom-effect">
                        <a href="single-product.html">
                            <img class="img-full" src="public/frontend/images/product/medium-size/1-5-270x300.jpg" alt="Product Images">
                        </a>
                        <div class="product-add-action">
                            <ul>
                                <li>
                                    <a href="cart.html">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i class="pe-7s-shuffle"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <a class="product-name" href="single-product.html">Dried Lemon Green</a>
                        <div class="price-box pb-1">
                            <span class="new-price">$80.00</span>
                        </div>
                        <div class="rating-box">
                            <ul>
                                <li><i class="pe-7s-star"></i></li>
                                <li><i class="pe-7s-star"></i></li>
                                <li><i class="pe-7s-star"></i></li>
                                <li><i class="pe-7s-star"></i></li>
                                <li><i class="pe-7s-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                <div class="product-item">
                    <div class="product-img img-zoom-effect">
                        <a href="single-product.html">
                            <img class="img-full" src="public/frontend/images/product/medium-size/1-6-270x300.jpg" alt="Product Images">
                        </a>
                        <div class="product-add-action">
                            <ul>
                                <li>
                                    <a href="cart.html">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i class="pe-7s-shuffle"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <a class="product-name" href="single-product.html">Natural Coconut</a>
                        <div class="price-box pb-1">
                            <span class="new-price">$80.00</span>
                        </div>
                        <div class="rating-box">
                            <ul>
                                <li><i class="pe-7s-star"></i></li>
                                <li><i class="pe-7s-star"></i></li>
                                <li><i class="pe-7s-star"></i></li>
                                <li><i class="pe-7s-star"></i></li>
                                <li><i class="pe-7s-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                <div class="product-item">
                    <div class="product-img img-zoom-effect">
                        <a href="single-product.html">
                            <img class="img-full" src="public/frontend/images/product/medium-size/1-7-270x300.jpg" alt="Product Images">
                        </a>
                        <div class="product-add-action">
                            <ul>
                                <li>
                                    <a href="cart.html">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i class="pe-7s-shuffle"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <a class="product-name" href="single-product.html">Black Peppepr Read</a>
                        <div class="price-box pb-1">
                            <span class="new-price">$80.00</span>
                        </div>
                        <div class="rating-box">
                            <ul>
                                <li><i class="pe-7s-star"></i></li>
                                <li><i class="pe-7s-star"></i></li>
                                <li><i class="pe-7s-star"></i></li>
                                <li><i class="pe-7s-star"></i></li>
                                <li><i class="pe-7s-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-4 col-sm-6 pt-6">
                <div class="product-item">
                    <div class="product-img img-zoom-effect">
                        <a href="single-product.html">
                            <img class="img-full" src="public/frontend/images/product/medium-size/1-8-270x300.jpg" alt="Product Images">
                        </a>
                        <div class="product-add-action">
                            <ul>
                                <li>
                                    <a href="cart.html">
                                        <i class="pe-7s-cart"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="compare.html">
                                        <i class="pe-7s-shuffle"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="wishlist.html">
                                        <i class="pe-7s-like"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-content">
                        <a class="product-name" href="single-product.html">Black Peppepr Read</a>
                        <div class="price-box pb-1">
                            <span class="new-price">$80.00</span>
                        </div>
                        <div class="rating-box">
                            <ul>
                                <li><i class="pe-7s-star"></i></li>
                                <li><i class="pe-7s-star"></i></li>
                                <li><i class="pe-7s-star"></i></li>
                                <li><i class="pe-7s-star"></i></li>
                                <li><i class="pe-7s-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End Here -->

<!-- Begin Shipping Area -->
<div class="shipping-area section-space-top-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="shipping-item">
                    <div class="shipping-img">
                        <img src="public/frontend/images/shipping/icon/plane.png" alt="Shipping Icon">
                    </div>
                    <div class="shipping-content">
                        <h5 class="title">Free Shipping</h5>
                        <p class="short-desc mb-0">Free Home Delivery Offer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pt-6 pt-md-0">
                <div class="shipping-item">
                    <div class="shipping-img">
                        <img src="public/frontend/images/shipping/icon/earphones.png" alt="Shipping Icon">
                    </div>
                    <div class="shipping-content">
                        <h5 class="title">Online Support</h5>
                        <p class="short-desc mb-0">24/7 Online Support Provide</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 pt-6 pt-lg-0">
                <div class="shipping-item">
                    <div class="shipping-img">
                        <img src="public/frontend/images/shipping/icon/shield.png" alt="Shipping Icon">
                    </div>
                    <div class="shipping-content">
                        <h5 class="title">Secure Payment</h5>
                        <p class="short-desc mb-0">Fully Secure Payment System</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Shipping Area End Here -->

<!-- Begin Product Area -->
<div class="product-area section-space-y-axis-100 product-style-2">
    <div class="container">
        <div class="section-title text-center pb-55">
            <span class="sub-title text-primary">See Our Latest</span>
            <h2 class="title mb-0">Arrival Products</h2>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="swiper-container product-slider swiper-arrow with-radius border-issue">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="product-item">
                                <div class="product-img img-zoom-effect">
                                    <a href="single-product.html">
                                        <img class="img-full" src="public/frontend/images/product/medium-size/1-9-270x300.jpg" alt="Product Images">
                                    </a>
                                    <div class="product-add-action">
                                        <ul>
                                            <li>
                                                <a href="cart.html">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i class="pe-7s-shuffle"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <a class="product-name" href="single-product.html">Black Pepper Grains</a>
                                    <div class="price-box pb-1">
                                        <span class="new-price">$80.00</span>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-item">
                                <div class="product-img img-zoom-effect">
                                    <a href="single-product.html">
                                        <img class="img-full" src="public/frontend/images/product/medium-size/1-10-270x300.jpg" alt="Product Images">
                                    </a>
                                    <div class="product-add-action">
                                        <ul>
                                            <li>
                                                <a href="cart.html">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i class="pe-7s-shuffle"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <a class="product-name" href="single-product.html">Peanut Big Bean</a>
                                    <div class="price-box pb-1">
                                        <span class="new-price">$80.00</span>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-item">
                                <div class="product-img img-zoom-effect">
                                    <a href="single-product.html">
                                        <img class="img-full" src="public/frontend/images/product/medium-size/1-11-270x300.jpg" alt="Product Images">
                                    </a>
                                    <div class="product-add-action">
                                        <ul>
                                            <li>
                                                <a href="cart.html">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i class="pe-7s-shuffle"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <a class="product-name" href="single-product.html">Dried Lemon Green</a>
                                    <div class="price-box pb-1">
                                        <span class="new-price">$80.00</span>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="product-item">
                                <div class="product-img img-zoom-effect">
                                    <a href="single-product.html">
                                        <img class="img-full" src="public/frontend/images/product/medium-size/1-12-270x300.jpg" alt="Product Images">
                                    </a>
                                    <div class="product-add-action">
                                        <ul>
                                            <li>
                                                <a href="cart.html">
                                                    <i class="pe-7s-cart"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="compare.html">
                                                    <i class="pe-7s-shuffle"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="wishlist.html">
                                                    <i class="pe-7s-like"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <a class="product-name" href="single-product.html">Natural Coconut</a>
                                    <div class="price-box pb-1">
                                        <span class="new-price">$80.00</span>
                                    </div>
                                    <div class="rating-box">
                                        <ul>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                            <li><i class="pe-7s-star"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-nav-wrap">
                        <div class="swiper-button-next"></div>
                    </div>
                    <div class="swiper-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product Area End Here -->

<!-- Begin Banner Area -->
<div class="banner-with-testimonial py-10" data-bg-image="public/frontend/images/banner/2-1-1920x523.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="parallax-img-wrap">
                    <div class="papaya">
                        <div class="scene fill">
                            <div class="expand-width" data-depth="0.2">
                                <img src="public/frontend/images/banner/inner-img/2-1-503x430.png" alt="Banner Images">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 align-self-center">
                <div class="swiper-container testimonial-slider text-white">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="testimonial-content section-title">
                                    <span class="sub-title">What People Say</span>
                                    <h2 class="title mb-6">Client Feedback</h2>
                                    <p class="short-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiu tempor incididj ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                    <div class="user-info">
                                        <div class="user-img">
                                            <img src="public/frontend/images/testimonial/user/1.png" alt="User Image">
                                        </div>
                                        <div class="user-content">
                                            <span class="user-name">Oscar Thomsen</span>
                                            <span class="user-occupation">Customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-item">
                                <div class="testimonial-content section-title">
                                    <span class="sub-title">What People Say</span>
                                    <h2 class="title mb-6">Client Feedback</h2>
                                    <p class="short-desc">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiu tempor incididj ut labore et dolore magna aliqua. Ut enim ad minim veniam quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
                                    <div class="user-info">
                                        <div class="user-img">
                                            <img src="public/frontend/images/testimonial/user/1.png" alt="User Image">
                                        </div>
                                        <div class="user-content">
                                            <span class="user-name">Oscar Thomsen</span>
                                            <span class="user-occupation">Customer</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Add Arrows -->
                    <div class="testimonial-button-next"></div>
                    <div class="testimonial-button-prev"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner Area End Here -->

<!-- Begin Brand Area -->
<div class="brand-area section-space-y-axis-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="swiper-container brand-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <a class="brand-item" href="javascript:void(0)">
                                <img src="public/frontend/images/brand/1-1.png" alt="Brand Image">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="brand-item" href="javascript:void(0)">
                                <img src="public/frontend/images/brand/1-2.png" alt="Brand Image">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="brand-item" href="javascript:void(0)">
                                <img src="public/frontend/images/brand/1-3.png" alt="Brand Image">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="brand-item" href="javascript:void(0)">
                                <img src="public/frontend/images/brand/1-4.png" alt="Brand Image">
                            </a>
                        </div>
                        <div class="swiper-slide">
                            <a class="brand-item" href="javascript:void(0)">
                                <img src="public/frontend/images/brand/1-5.png" alt="Brand Image">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Brand Area End Here -->
@endsection
