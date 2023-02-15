<style>
    .store-header {
        width: 1504px;
        height: 90px;
        background-color: #FFFFFF;
        display: flex;
        flex-direction: row-reverse;
        align-items: center;
        justify-content: space-between;
        padding: 0 20px;
        border: 1px solid #E0E0E0;
        border-radius: 1px;
    }

    .titles {
        display: flex;
        flex-direction: row-reverse;
        align-items: center;
    }

    .page-title {
        display: flex;
        align-items: center;
        justify-content: center;
        height: 90px;
        font-family: Rubik, Regular;
        font-size: 20px;
        font-weight: 500;
        color: #aaa8a8;
        margin: 10px;
    }

    .page-title:hover {
        border-bottom: 4px solid transparent;
        border-color: #000000;
        cursor: pointer;
    }

    .selected-title {
        color: #000000;
        border-bottom: 4px solid transparent;
        border-color: #000000;
    }
</style>
<div class="store-header">
    <div class="titles">
        @if ($isFavorite)
            <div class="page-title" onclick="location.href='/'">
                מוצרים
            </div>
            <div class="page-title selected-title" onclick="location.href='/favorites'">
                מועדפים
            </div>
        @else
            <div class="page-title selected-title" onclick="location.href='/'">
                מוצרים
            </div>
            <div class="page-title" onclick="location.href='/favorites'">
                מועדפים
            </div>
        @endif
    </div>
</div>
