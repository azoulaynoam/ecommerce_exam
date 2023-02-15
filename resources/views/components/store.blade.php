        <style>
            .store {
                display: flex;
                flex-direction: column;
                align-items: center;
                background: #f5f5f5 0% 0% no-repeat padding-box;
                opacity: 1;
            }

            .products {
                display: flex;
                flex-direction: row-reverse;
                flex-wrap: wrap;
                align-content: flex-start;
                width: 1504px;
                height: 918px;
                padding: 10px;
                border: 1px solid #E0E0E0;
                border-radius: 1px;
                overflow-y: hidden;
            }
        </style>

        <div class="store">
            <x-store.title />
            <x-store.header :isFavorite="$isFavorite" />
            <div class="products">
                @foreach ($products as $product)
                    <x-store.product :product="$product" />
                @endforeach
            </div>
        </div>
