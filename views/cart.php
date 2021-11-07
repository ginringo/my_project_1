<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <?php for ($i = 0; $i < 3; $i++) : ?>
            <div class="d-flex flex-wrap align-items-center justify-content-between">
                <img class="cartItemImg" src="../img/item1.png" alt="">
                <div class="cartItemName mt-2">
                    <p>hogehogehogehogehogehoge</p>
                </div>
                <div class="mt-2">
                    <p>&yen;hoge</p>
                </div>
                <div class="d-flex flex-wrap mt-2">
                    <form action="cart.php" method="post" class="d-flex flex-wrap">
                        <div class="form-group">
                            <select id="quantity" name="quantity" class="form-control form-control-sm">
                                <option value="">変数</option>
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                            </select>
                        </div>
                        <div class="ml-2">
                            <button type="submit" class="btn btn-outline-secondary btn-sm">更新</button>
                        </div>
                    </form>
                    <form action="cart.php" method="post">
                        <div class="ml-2">
                            <button type="submit" class="btn btn-outline-danger btn-sm">削除</button>
                        </div>
                    </form>
                </div>
            </div>
            <hr>
        <?php endfor; ?>

        <div class="mt-5">
            <div class="d-flex justify-content-end flex-wrap">
                <p class="mt-2 border-bottom">合計金額&nbsp;&nbsp;&yen;hogehoge</p>
                <button class="btn btn-dark btn-sm ml-4" onclick="location.href='cart.php'">支払いへ進む</button>
            </div>
        </div>
    </div>
</div>

<!-- カートが空の場合 -->
<!-- <div class="row">
    <div class="col-sm-6 offset-sm-3 mt-5 mb-5">
        <div>
            <p class="mb-0">カートにアイテムが入っていません</p>
        </div>
        <hr>
        <div class="text-right mt-5">
            <button class="btn btn-dark" onclick="location.href='items.php'">商品一覧に戻る</button>
        </div>
    </div>
</div> -->
