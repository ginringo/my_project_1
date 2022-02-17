<div class="row">
    <div class="col-sm-10 offset-sm-1 d-flex flex-wrap">
        <div class="product-img-wrapper">
            <img class="product-img" src="<?= '../' . $product['path'] ?>" alt="">
        </div>
        <div class="sentence mt-3 d-flex align-content-between flex-wrap">
            <div class="sentence">
                <p class="h3"><?= $product['name'] ?>&nbsp;/&nbsp;&yen;<?= $product['price'] ?></p>
                <p class="h5 font-weight-normal mt-4"><?= $product['description'] ?></p>
            </div>

            <?php if ($product['stock'] === 0) : ?>
                <p class="text-danger h4 mb-3">※在庫切れ</p>
            <?php else : ?>
                <div class="sentence d-flex justify-content-between align-items-center flex-wrap">
                    <?php if ($product['stock'] < 10) : ?>
                        <p class="text-danger h4 mb-3">※残り<?= $product['stock'] ?>点</p>
                    <?php else : ?>
                        <p class="h4 mb-3">※在庫あり</p>
                    <?php endif; ?>
                    <form action="cart.php" method="post" class="d-flex flex-wrap">
                        <div class="form-group mr-3">
                            <input type="number" name="quantity" class="form-control" value="1" min="1" max="<?= $product['stock'] ?>" style="width: 65px;">
                        </div>
                        <input type="hidden" name="id" value="<?= $product['id'] ?>">
                        <input type="hidden" name="name" value="<?= $product['name'] ?>">
                        <input type="hidden" name="price" value="<?= $product['price'] ?>">
                        <input type="hidden" name="stock" value="<?= $product['stock'] ?>">
                        <input type="hidden" name="path" value="<?= $product['path'] ?>">
                        <div>
                            <button type="submit" class="btn btn-dark">カートに追加</button>
                        </div>
                    </form>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
