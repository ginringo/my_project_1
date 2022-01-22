<hr>
<div class="container d-flex flex-wrap justify-content-between">

    <div class="d-flex flex-wrap">
        <div class="mr-2">
            <button class="shadow-sm btn btn-sm <?= highlight($category_id, 'all') ?>" onclick="location.href='products.php?category_id=all'">ALL</button>
        </div>
        <?php foreach ($categories as $category) : ?>
            <div class="mr-2">
                <button class="shadow-sm btn btn-sm <?= highlight($category_id, $category['id']) ?>" onclick="location.href='products.php?category_id=<?= $category['id'] ?>'"><?= $category['name'] ?></button>
            </div>
        <?php endforeach; ?>
    </div>

    <form action="#" method="get" class="d-flex flex-wrap align-items-center">
        <p class="cnt mr-4"><?= $cnt ?> 件の商品</p>
        <div class="shadow-sm form-group mr-2">
            <select id="order" name="order" class="form-control form-control-sm">
                <option value="created_at desc" <?= selected($order, 'created_at desc') ?>>新着順</option>
                <option value="created_at asc" <?= selected($order, 'created_at asc') ?>>投稿順</option>
                <option value="price asc" <?= selected($order, 'price asc') ?>>価格の低い順</option>
                <option value="price desc" <?= selected($order, 'price desc') ?>>価格の高い順</option>
            </select>
        </div>
        <input type="hidden" name="category_id" value="<?php echo $category_id ?>">
        <div>
            <button type="submit" class="shadow-sm btn btn-sm btn-outline-secondary mb-3">並べ替え</button>
        </div>
    </form>
</div>
<hr class="mt-0">

<div class="grid mt-5 mb-5">
    <?php foreach ($products as $product) : ?>
        <div class="product link link-line">
            <a href="productDetails.php?product_id=<?= $product['id'] ?>">
                <img src="<?= $product['path'] ?>">
                <p class="py-3 mb-0 text-center">
                    <?= $product['name'] ?>&nbsp;/&nbsp;&yen;
                    <?= $product['price'] ?>
                </p>
            </a>
            <hr class="my-0">
        </div>
    <?php endforeach; ?>

    <!-- 1ページ4件以下の場合に空のdiv要素で埋める -->
    <?php if ($shortage < 4) : ?>
        <?php for ($i = 0; $i < 4 - $shortage; $i++) : ?>
            <div></div>
        <?php endfor; ?>
    <?php endif; ?>
</div>

<div class="link text-center">
    <?php if ($page >= 2) : ?>
        <a href="products.php?category_id=<?= $category_id ?>&order=<?= $order ?>&page=<?= $page - 1; ?>">
            <?= $page - 1; ?>
        </a>&nbsp;
    <?php endif; ?>
    <span class="border-bottom border-dark"><?= $page; ?></span>&nbsp;&nbsp;
    <?php if ($page < $maxPage) : ?>
        <a href="products.php?category_id=<?= $category_id ?>&order=<?= $order ?>&page=<?= $page + 1; ?>">
            <?= $page + 1; ?>
        </a>
    <?php endif; ?>
</div>
