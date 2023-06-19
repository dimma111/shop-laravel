<div class="col-12 col-md-4 col-lg-3 mb-5">
    <div class="product-item" >
        <a href="{{ route('product', [$product->category->code, $product->code]) }}">
            <img src="/images/product-3.png" class="img-fluid product-thumbnail">
            <h3 class="product-title">{{ $product->name }}</h3>
            <strong class="product-price">{{ $product->price }} ₽</strong><br>
            <span>{{ $product->category->name }}</span>
        </a>

        <a href="{{ route('basket') }}"  class="icon-cross">
            <img src="/images/cross.svg" class="img-fluid">
        </a>

    </div>
</div>
