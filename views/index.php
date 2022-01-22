<style>
    .index-section-1 {
        margin-top: 100px;
    }

    .delimiter {
        margin: 60px 0;
    }

    .index-section-2 {
        margin-bottom: 100px;
    }

    .pickup-img {
        height: 13.7rem;
        width: 13.7rem;
    }
</style>

<section class="index-section-1 text-center">
    <h4 class="mb-4">Hoge</h4>
    <p>
        TextTextTextTextTextTextTextTextTextTextTextTextTextText<br>
        TextTextTextTextTextTextTextTextTextTextTextTextTextText<br>
        TextTextTextTextTextTextTextTextTextTextTextTextTextText<br>
        TextTextTextTextTextTextTextTextTextTextTextTextTextText
    </p>
</section>

<section class="index-section-2 text-center col-sm-8 offset-sm-2">
    <hr class="delimiter">
    <h4 class="mb-4">Pickup</h4>
    <div class="d-flex flex-wrap justify-content-between mb-4">
        <a href="productDetails.php?product_id=1">
            <img class="pickup-img" src="img/items/item1.png">
        </a>
        <a href="productDetails.php?product_id=2">
            <img class="pickup-img" src="img/items/item2.png">
        </a>
        <a href="productDetails.php?product_id=3">
            <img class="pickup-img" src="img/items/item3.png">
        </a>
    </div>
    <div>
        <button class="btn btn-outline-dark btn-block" onclick="location.href='products.php'">Products</button>
    </div>
</section>
