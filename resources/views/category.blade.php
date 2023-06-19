@extends('master')

@section('title', $category->name)

@section('content')
<!-- Start Hero Section -->
<div class="hero">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-lg-5">
                <div class="intro-excerpt">
                    <h1>Shop</h1>
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

            <div class="col-12">
                <h1>{{ $category->name }}</h1>
                <span>
                    {{ $category->description }}
                </span>
            </div>

            @foreach($category->products as $product)
                @include('card', compact('product'))
            @endforeach

        </div>
    </div>
</div>
@endsection
