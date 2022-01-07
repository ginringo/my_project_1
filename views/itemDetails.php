<div class="row">
    <div class="col-sm-10 offset-sm-1 d-flex flex-wrap">
        <div class="itemImgWrap">
            <img class="itemImg" src="../img/item1.png" alt="">
        </div>
        <div class="sentence mt-3 d-flex align-content-between flex-wrap">
            <div class="sentence">
                <h3 class=""><?= $product['name'] ?></h3>
                <p class="mt-4"><?= $product['description'] ?></p>
                <p class="mt-4 text-right h4">&yen;<?= $product['price'] ?></p>
            </div>

            <?php if ($product['stock'] > 0) : ?>
                <form action="" method="post" class="sentence d-flex justify-content-end flex-wrap">
                    <div class="form-group mr-4">
                        <select id="quantity" name="quantity" class="form-control">
                            <option value="">数量</option>
                            <option value="">1</option>
                            <option value="">2</option>
                            <option value="">3</option>
                        </select>
                    </div>
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
