<style>
    .cart-summary {
        width: 416px;
        height: 118px;
        display: flex;
        flex-direction: column;
        align-items: center;
        direction: rtl;
        font-family: 'Rubik', sans-serif;
        font-size: 18px;
        background-color: #ffffff;
        border-left: 1px solid #e0e0e0;
        border-bottom: 1px solid #e0e0e0;
    }

    .cart-summary>.taxes {
        width: 400px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        height: 40px;
        padding: 0 30px;
        border-top: 1px solid #e0e0e0;
    }

    .cart-summary>.summary {
        width: 400px;
        display: flex;
        flex-direction: row;
        justify-content: space-between;
        align-items: center;
        height: 40px;
        padding: 0 30px;
        border-top: 1px solid #e0e0e0;
    }
</style>
<div class="cart-summary">
    <div class="taxes">
        <div class="taxes-label">
            17% מע"מ
        </div>
        <div class="taxes-value">
            @php $taxes = 0 @endphp
            @foreach ($cart as $item)
                @php
                    $discount = 0;
                    if ((int) $item['discount'] > 0) {
                        $discount = (float) $item['price'] * (float) ((int) $item['discount'] / 100);
                    }
                    $taxes += ((float) $item['price'] - $discount) * (int) $item['quantity'];
                @endphp
            @endforeach
            @php
                $taxes = (float) $taxes * 0.17;
            @endphp
            ₪{{ $taxes }}
        </div>
    </div>
    <div class="summary">
        <div class="summary-label">
            סה"כ
        </div>
        <div class="summary-value">
            @php $total = 0 @endphp
            @foreach ($cart as $item)
                @php
                    $discount = 0;
                    if ((int) $item['discount'] > 0) {
                        $discount = (float) $item['price'] * (float) ((int) $item['discount'] / 100);
                    }
                    $total += ((float) $item['price'] - $discount) * (int) $item['quantity'];
                @endphp
            @endforeach
            @php
                $total = (float) $total + $taxes;
            @endphp
            ₪{{ $total }}
        </div>
    </div>
</div>
