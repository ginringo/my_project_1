<div class="container link d-flex flex-wrap align-items-center">
    <!-- <div>Category</div>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; -->
    <div>
        <a href="items.php?category_id=all" class="category-list <?= highlight($category_id, 'all') ?>">All</a>
    </div>
    <?php foreach ($categories as $category) : ?>
        <span class="mr-2 ml-2">/</span>
        <div>
            <a class="category-list <?= highlight($category_id, $category['id']) ?>" href="items.php?category_id=<?= $category['id'] ?>"><?= $category['name'] ?></a>
        </div>
    <?php endforeach; ?>
</div>
<hr>
<div class="container d-flex flex-wrap align-items-center justify-content-between">
    <p class="mt-1"><?= $cnt ?>件の商品</p>
    <form action="#" method="get" class="d-flex flex-wrap mb-0">
        <div class="form-group mr-2">
            <select id="order" name="order" class="form-control form-control-sm">
                <option value="created_at desc" <?= selected($order, 'created_at desc') ?>>新着順</option>
                <option value="created_at asc" <?= selected($order, 'created_at asc') ?>>投稿順</option>
                <option value="price asc" <?= selected($order, 'price asc') ?>>価格の低い順</option>
                <option value="price desc" <?= selected($order, 'price desc') ?>>価格の高い順</option>
            </select>
        </div>
        <input type="hidden" name="category_id" value="<?php echo $category_id ?>">
        <!-- <div class="form-group mr-1">
            <input type="search" class="form-control form-control-sm" id="keyword" name="keyword" placeholder="キーワード">
        </div> -->
        <div>
            <button type="submit" class="btn btn-sm btn-outline-secondary">並べ替え</button>
        </div>
    </form>
</div>
<hr class="mt-0">

<div class="grid mt-5 mb-5">
    <?php foreach ($products as $product) : ?>
        <div class="item">
            <a href="itemDetails.php?product_id=<?= $product['id'] ?>">
                <img src="<?= $product['path'] ?>">
            </a>
            <div class="mt-2">
                <p><?= $product['name'] ?></p>
                <p>&yen;<?= $product['price'] ?></p>
            </div>
            <hr class="mb-0">
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
        <a href="items.php?category_id=<?= $category_id ?>&order=<?= $order ?>&page=<?= $page - 1; ?>">
            <?= $page - 1; ?>
        </a>&nbsp;
    <?php endif; ?>
    <span class="border-bottom border-dark text-dark"><?= $page; ?></span>&nbsp;&nbsp;
    <?php if ($page < $maxPage) : ?>
        <a href="items.php?category_id=<?= $category_id ?>&order=<?= $order ?>&page=<?= $page + 1; ?>">
            <?= $page + 1; ?>
        </a>
    <?php endif; ?>
</div>
