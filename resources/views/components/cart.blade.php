        <style>
            .cart {
                display: flex;
                flex-direction: column;
                background: #f5f5f5 0% 0% no-repeat padding-box;
                opacity: 1;
                width: 416px;
            }

            .cart>.cart-products {
                display: flex;
                flex-direction: column;
                align-items: center;
                height: 800px;
                padding: 10px;
                border-left: 1px solid #E0E0E0;
                background-color: #ffffff;
                scroll-behavior: smooth;
                overflow-x: hidden;
                overflow-y: visible;
            }
        </style>

        <div class="cart">
            <x-cart.title />
            <x-cart.header />
            <div class="cart-products">
                @foreach ($cart as $product)
                    <x-cart.product :product="$product" />
                @endforeach
            </div>
            <x-cart.summary :cart="$cart" />
        </div>
