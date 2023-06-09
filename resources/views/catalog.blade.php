@extends('master')

@section('title', 'Каталог')

@section('content')
<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Каталог</h1>
                </div>
            </div>
            <div class="col-lg-7">

            </div>
        </div>
    </div>
</div>
<!-- End Hero Section -->

<div class="untree_co-section product-section before-footer-section">
    <div class="container">
        <div class="row">

            @foreach($categories as $category)
                <div class="col-12 col-md-4 col-lg-3 mb-5">
                    <a class="product-item" href="{{ route('category', $category->code) }}">
                        <img src="images/product-3.png" class="img-fluid product-thumbnail">
                        <h3 class="product-title">{{ $category->name }}</h3>
                    </a>
                </div>
            @endforeach

        </div>
    </div>
</div>
@endsection
