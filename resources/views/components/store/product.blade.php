<style>
    .store-item {
        width: 226px;
        height: 223px;
        /* UI Properties */
        box-shadow: 0px 3px 20px #00000029;
        border-radius: 8px;
        opacity: 1;
        margin: 10px;
        direction: rtl;
        background-color: #FFFFFF;
        cursor: pointer;
    }

    .store-item:hover {
        border: 1px solid #E0E0E0;
        border-radius: 8px;
    }

    .star-light {
        margin-top: 16px;
        margin-left: 16px;
        cursor: pointer;
    }

    .star-light-favorite-path {
        fill: #FFD02F;
        color: #FFD02F;
    }

    .product-info {
        margin-top: 25px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
    }

    .product-name {
        text-align: center;
        font-family: 'Rubik', sans-serif;
        font-size: 22px;
    }

    .product-price {
        text-align: center;
        font-family: 'Rubik', sans-serif;
        font-size: 22px;
    }

    .product-discount {
        text-align: center;
        font-family: 'Rubik', sans-serif;
        font-size: 16px;
    }
</style>
<div class="store-item" product-id="{{ $product->id }}" onClick="addToCart(this)">
    <div data-product-id="{{ $product->id }}" class="favorite" onclick="favoriteProduct(this)">
        @if ($product->favorite)
            <svg class="star-light" xmlns="http://www.w3.org/2000/svg" width="22.52" height="21.555"
                viewBox="0 0 22.52 21.555">
                <path class="star-light-favorite-path"
                    d="M41.866,7.207l-6.15-.9L32.968.737a1.348,1.348,0,0,0-2.416,0L27.8,6.31l-6.15.9a1.348,1.348,0,0,0-.745,2.3l4.449,4.336L24.3,19.966a1.346,1.346,0,0,0,1.953,1.419l5.5-2.892,5.5,2.892a1.347,1.347,0,0,0,1.953-1.419l-1.052-6.125,4.449-4.336a1.348,1.348,0,0,0-.745-2.3Zm-5.148,6.163,1.17,6.819L31.76,16.973l-6.125,3.22,1.17-6.819L21.847,8.537,28.7,7.544,31.76,1.335l3.064,6.209,6.849.993-4.954,4.832Z"
                    transform="translate(-20.5 0.013)" fill="#a5a5a5" />
            </svg>
        @else
            <svg class="star-light" xmlns="http://www.w3.org/2000/svg" width="22.52" height="21.555"
                viewBox="0 0 22.52 21.555">
                <path class="star-light-path"
                    d="M41.866,7.207l-6.15-.9L32.968.737a1.348,1.348,0,0,0-2.416,0L27.8,6.31l-6.15.9a1.348,1.348,0,0,0-.745,2.3l4.449,4.336L24.3,19.966a1.346,1.346,0,0,0,1.953,1.419l5.5-2.892,5.5,2.892a1.347,1.347,0,0,0,1.953-1.419l-1.052-6.125,4.449-4.336a1.348,1.348,0,0,0-.745-2.3Zm-5.148,6.163,1.17,6.819L31.76,16.973l-6.125,3.22,1.17-6.819L21.847,8.537,28.7,7.544,31.76,1.335l3.064,6.209,6.849.993-4.954,4.832Z"
                    transform="translate(-20.5 0.013)" fill="#a5a5a5" />
            </svg>
        @endif
    </div>
    <div class="product-info">
        <div class="product-name">
            {{ $product->name }}
        </div>
        @if ($product->discount > 0)
            <div class="product-price">
                ₪{{ $product->price }}
            </div>
            <div class="product-discount">
                %{{ $product->discount }} הנחה
            </div>
        @else
            <div class="product-price">
                ₪{{ $product->price }}
            </div>
        @endif
    </div>
</div>
<script>
    function favoriteProduct(div) {
        var productId = div.getAttribute('data-product-id');
        window.location.href = "/product/favorite/" + productId;
    }

    function addToCart(div) {
        var productId = div.getAttribute('product-id');
        window.location.href = "/cart/add/" + productId;
    }
</script>
