<form action="#" method="post">
    <div class="container d-flex flex-wrap justify-content-between align-items-center">
        <p>hoge</p>
        <div class="d-flex flex-wrap">
            <div class="form-group mr-3">
                <select id="category" name="category" class="form-control form-control-sm">
                    <option value="">カテゴリー</option>
                    <option value="">hoge</option>
                    <option value="">hoge</option>
                    <option value="">hoge</option>
                </select>
            </div>
            <div class="form-group mr-3">
                <input type="search" class="form-control form-control-sm" id="keyword" name="keyword" placeholder="キーワード">
            </div>
            <div>
                <button type="submit" class="btn btn-sm btn-outline-secondary">検索</button>
            </div>
        </div>
    </div>
</form>
<hr class="mt-0">


<div class="grid mt-5 mb-5">
    <?php for ($i = 0; $i < 10; $i++) : ?>
        <div class="item">
            <a href="itemDetails.php">
                <img src="../img/item1.png">
            </a>
            <div class="mt-2">
                <p>hoge</p>
                <p>hoge</p>
            </div>
            <hr class="mb-0">
        </div>
    <?php endfor; ?>
</div>
<p class="text-center">ページ</p>
