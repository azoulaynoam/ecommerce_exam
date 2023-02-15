<style>
    .cart-item {
        width: 400px;
        display: flex;
        flex-direction: row-reverse;
        align-items: center;
        justify-content: space-between;
        border-bottom: 1px solid #E0E0E0;
        padding: 10px;
    }

    .cart-item>.quantity {
        display: flex;
        align-items: center;
        justify-content: center;
        border: 1px solid #E0E0E0;
        height: 40px;
        width: 40px;
        border-radius: 20%;
        background-color: #f5f5f5;
        direction: center;
    }

    .cart-item>.name {
        width: 200px;
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        font-family: 'Rubik', sans-serif;
        direction: rtl;
    }

    .cart-item>.name>.product-name {
        display: flex;
        flex-direction: row;
        font-size: 18px;
    }

    .cart-item>.name>.product-price {
        display: flex;
        flex-direction: row;
        font-family: 'Rubik', sans-serif;
        font-size: 15px;
    }

    .cart-item>.name>.product-price>.price {
        display: flex;
        flex-direction: row;
        font-family: 'Rubik', sans-serif;
        font-size: 15px;
    }

    .cart-item>.name>.product-price>.discount {
        display: flex;
        flex-direction: row;
        font-family: 'Rubik', sans-serif;
        font-size: 15px;
        color: #b6b5b5;
        margin-right: 5px;
    }

    .cart-item>.summary {
        display: flex;
        flex-direction: row-reverse;
        align-items: center;
        justify-content: space-between;
    }

    .cart-item>.summary>.price {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        font-family: 'Rubik', sans-serif;
    }

    .cart-item>.summary>.price>.before-discount {
        display: flex;
        flex-direction: row;
        font-family: 'Rubik', sans-serif;
        font-size: 14px;
        color: #b6b5b5;
        margin-right: 5px;
        text-decoration: line-through;
    }

    .cart-item>.summary>.price>.after-discount {
        font-size: 18px;
    }

    .cart-item>.summary>.price>.no-discount {
        font-size: 18px;
    }

    .cart-item>.summary>.remove-from-cart {
        height: 20px;
        width: 20px;
        cursor: pointer;
        margin-right: 10px;
    }
</style>
<div class="cart-item" id="{{ $product['id'] }}">
    <input class="quantity" title="Quantity" placeholder={{ $product['quantity'] }} value={{ $product['quantity'] }}
        product-id="{{ $product['id'] }}" type="number" onchange="updateCartQuantity(event,this, 1)" />
    <div class="name">
        <div class="product-name">
            {{ $product['name'] }}
        </div>
        <div class="product-price">
            <div class="price">
                ₪{{ $product['price'] }}
            </div>
            @if ((int) $product['discount'] > 0)
                <div class="discount">
                    {{ $product['discount'] }}% הנחה
                </div>
            @endif
        </div>
    </div>
    <div class="summary">
        <div class="price">
            @if ((int) $product['discount'] > 0)
                <div class="after-discount">
                    ₪{{ ((float) $product['price'] - (float) $product['price'] * ((int) $product['discount'] / 100)) * (int) $product['quantity'] }}
                </div>
                <div class="before-discount">
                    ₪{{ (float) $product['price'] * (int) $product['quantity'] }}
                </div>
            @else
                <div class="no-discount">
                    ₪{{ (float) $product['price'] * (int) $product['quantity'] }}
                </div>
            @endif
        </div>
        <div class="remove-from-cart" product-id="{{ $product['id'] }}" onclick="removeItemFromCart(this)">
            <svg fill="#ff0000" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 482.428 482.429" xml:space="preserve"
                stroke="#ff0000">
                <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                <g id="SVGRepo_iconCarrier">
                    <g>
                        <g>
                            <path
                                d="M381.163,57.799h-75.094C302.323,25.316,274.686,0,241.214,0c-33.471,0-61.104,25.315-64.85,57.799h-75.098 c-30.39,0-55.111,24.728-55.111,55.117v2.828c0,23.223,14.46,43.1,34.83,51.199v260.369c0,30.39,24.724,55.117,55.112,55.117 h210.236c30.389,0,55.111-24.729,55.111-55.117V166.944c20.369-8.1,34.83-27.977,34.83-51.199v-2.828 C436.274,82.527,411.551,57.799,381.163,57.799z M241.214,26.139c19.037,0,34.927,13.645,38.443,31.66h-76.879 C206.293,39.783,222.184,26.139,241.214,26.139z M375.305,427.312c0,15.978-13,28.979-28.973,28.979H136.096 c-15.973,0-28.973-13.002-28.973-28.979V170.861h268.182V427.312z M410.135,115.744c0,15.978-13,28.979-28.973,28.979H101.266 c-15.973,0-28.973-13.001-28.973-28.979v-2.828c0-15.978,13-28.979,28.973-28.979h279.897c15.973,0,28.973,13.001,28.973,28.979 V115.744z">
                            </path>
                            <path
                                d="M171.144,422.863c7.218,0,13.069-5.853,13.069-13.068V262.641c0-7.216-5.852-13.07-13.069-13.07 c-7.217,0-13.069,5.854-13.069,13.07v147.154C158.074,417.012,163.926,422.863,171.144,422.863z">
                            </path>
                            <path
                                d="M241.214,422.863c7.218,0,13.07-5.853,13.07-13.068V262.641c0-7.216-5.854-13.07-13.07-13.07 c-7.217,0-13.069,5.854-13.069,13.07v147.154C228.145,417.012,233.996,422.863,241.214,422.863z">
                            </path>
                            <path
                                d="M311.284,422.863c7.217,0,13.068-5.853,13.068-13.068V262.641c0-7.216-5.852-13.07-13.068-13.07 c-7.219,0-13.07,5.854-13.07,13.07v147.154C298.213,417.012,304.067,422.863,311.284,422.863z">
                            </path>
                        </g>
                    </g>
                </g>
            </svg>
        </div>
    </div>
</div>
<script>
    function updateCartQuantity(e, div, pid) {
        var productId = div.getAttribute('product-id');
        var quantity = div.value;
        fetch('/cart/update/' + productId, {
                method: 'POST',
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': "{{ csrf_token() }}"
                },
                body: JSON.stringify({
                    "quantity": quantity
                })
            })
            .then((response) => {
                location.reload()
            })
            .catch((error) => {})
    }

    function removeItemFromCart(div) {
        var productId = div.getAttribute('product-id');
        window.location.href = "/cart/remove/" + productId;
    }
</script>
