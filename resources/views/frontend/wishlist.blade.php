@extends('layouts.base')
@section('title')
    {{ __('wishlist') }}
@endsection
@section('content')
        <!-- Begin Main Content Area -->
        <main class="main-content">
            <div class="breadcrumb-area breadcrumb-height" data-bg-image="assets/images/breadcrumb/bg/1-1-1920x400.jpg">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-lg-12">
                            <div class="breadcrumb-item text-night-rider">
                                <h2 class="breadcrumb-heading">Wishlist Page</h2>
                                <ul>
                                    <li>
                                        <a href="index.html">Home/</a>
                                    </li>
                                    <li>Wishlist</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="wishlist-area section-space-y-axis-100">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <form action="javascript:void(0)">
                                <div class="table-content table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th class="product_remove">remove</th>
                                                <th class="product-thumbnail">images</th>
                                                <th class="cart-product-name">Product</th>
                                                <th class="product-price">Unit Price</th>
                                                <th class="product-stock-status">Stock Status</th>
                                                <th class="cart_btn">add to cart</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="product_remove">
                                                    <a href="#">
                                                        <i class="pe-7s-trash" data-tippy="Remove" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder"></i>
                                                    </a>
                                                </td>
                                                <td class="product-thumbnail">
                                                    <a href="#">
                                                        <img src="assets/images/product/small-size/2-1-112x112.png" alt="Wishlist Thumbnail">
                                                    </a>
                                                </td>
                                                <td class="product-name"><a href="#">Tail Light</a></td>
                                                <td class="product-price"><span class="amount">$80.00</span></td>
                                                <td class="product-stock-status"><span class="in-stock">in stock</span></td>
                                                <td class="cart_btn"><a href="#">add to cart</a></td>
                                            </tr>
                                            <tr>
                                                <td class="product_remove">
                                                    <a href="#">
                                                        <i class="pe-7s-trash" data-tippy="Remove" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder"></i>
                                                    </a>
                                                </td>
                                                <td class="product-thumbnail">
                                                    <a href="#">
                                                        <img src="assets/images/product/small-size/2-2-112x112.png" alt="Wishlist Thumbnail">
                                                    </a>
                                                </td>
                                                <td class="product-name"><a href="#">Wiper Blades</a></td>
                                                <td class="product-price"><span class="amount">$80.00</span></td>
                                                <td class="product-stock-status"><span class="in-stock text-danger">out stock</span></td>
                                                <td class="cart_btn"><a href="#">add to cart</a></td>
                                            </tr>
                                            <tr>
                                                <td class="product_remove">
                                                    <a href="#">
                                                        <i class="pe-7s-trash" data-tippy="Remove" data-tippy-inertia="true" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder"></i>
                                                    </a>
                                                </td>
                                                <td class="product-thumbnail">
                                                    <a href="#">
                                                        <img src="assets/images/product/small-size/2-3-112x112.png" alt="Wishlist Thumbnail">
                                                    </a>
                                                </td>
                                                <td class="product-name"><a href="#">Suspension</a></td>
                                                <td class="product-price"><span class="amount">$80.00</span></td>
                                                <td class="product-stock-status"><span class="in-stock">in stock</span></td>
                                                <td class="cart_btn"><a href="#">add to cart</a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        <!-- Main Content Area End Here -->
@endsection