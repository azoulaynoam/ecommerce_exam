<style>
    .cart-header {
        width: 416px;
        height: 90px;
        background-color: #FFFFFF;
        display: flex;
        flex-direction: row-reverse;
        padding: 0 20px;
        border: 1px solid #E0E0E0;
        border-radius: 1px;
    }

    .cart-header-label {
        display: flex;
        height: 90px;
        font-family: Rubik, Regular;
        font-size: 15px;
        font-weight: 500;
        color: #000000;
        margin-top: 50px;
        direction: rtl;
    }

    .cart-header-label.units {
        width: 80px;
    }

    .cart-header-label.name {
        width: 250px;
    }

    .cart-header-label.summary {
        width: 50px;
    }
</style>
<div class="cart-header">
    <div class="cart-header-label units">
        יחידות
    </div>
    <div class="cart-header-label name">
        שם המוצר
    </div>
    <div class="cart-header-label summary">
        סיכום
    </div>
</div>
