<div class="row">
    <div class="col-sm-10 offset-sm-1 d-flex flex-wrap">
        <div class="productImgWrap">
            <img class="productImg" src="<?= '../' . $product['path'] ?>" alt="">
        </div>
        <div class="sentence mt-3 d-flex align-content-between flex-wrap">
            <div class="sentence">
                <p class="h3"><?= $product['name'] ?>&nbsp;/&nbsp;&yen;<?= $product['price'] ?></p>
                <p class="h5 font-weight-normal mt-4"><?= $product['description'] ?></p>
            </div>

            <?php if ($product['stock'] > 0) : ?>
                <form action="cart.php" method="post" class="sentence d-flex justify-content-end flex-wrap">
                    <div class="form-group mr-3">
                        <input type="number" name="quantity" class="form-control" value="1" min="1" max="10" style="width: 65px;">
                    </div>
                    <input type="hidden" name="id" value="<?= $product['id'] ?>">
                    <input type="hidden" name="name" value="<?= $product['name'] ?>">
                    <input type="hidden" name="price" value="<?= $product['price'] ?>">
                    <input type="hidden" name="path" value="<?= $product['path'] ?>">
                    <div>
                        <button type="submit" class="btn btn-dark">カートに追加</button>
                    </div>
                </form>
            <?php else : ?>
                <p class="sentence text-danger h5 text-right mb-3">※在庫が不足しています</p>
            <?php endif; ?>
        </div>
    </div>
</div>
