<div class="product product-style-2 equal-elem ">
    <div class="product-thumnail">
        <a href="{{ $product->detailsURL }}" title="{{ $product->image }}">
            <figure>
                <img src="{{ asset($product->image) }}" width="800" height="800" alt="{{ $product->image }}">
            </figure>
        </a>
        <div class="group-flash">
            @if ($product->isNew)
                <span class="flash-item new-label">new</span>
            @endif
            @if ($product->isBestseller)
                <span class="flash-item bestseller-label">Bestseller</span>
            @endif
            @if ($product->isOnSale)
                <span class="flash-item sale-label">sale</span>
            @endif
        </div>
        <div class="wrap-btn">
            <a href="{{ $product->quickViewURL }}" class="function-link">quick view</a>
        </div>
    </div>
    <div class="product-info">
        <a href="{{ $product->detailsURL }}" class="product-name"><span>{{ $product->name }}</span></a>
        <div class="wrap-price"><span class="product-price">{{ $product->price }}</span></div>
    </div>
</div>
