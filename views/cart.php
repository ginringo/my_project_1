<?php
$subTotal = 0;
foreach ($_SESSION['items'] as $item) {
    $subTotal += $item['price'] * $item['quantity'];
}
$tax = floor($subTotal * 0.1);
$total = $subTotal + $tax;
?>

<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <hr>
        <?php foreach ($_SESSION['items'] as $item) : ?>
            <div class="d-flex flex-wrap align-items-center justify-content-between">
                <img class="cartItemImg" src="<?= '../' . $item['path'] ?>" alt="">
                <div class="cartItemName mt-2">
                    <p><?= $item['name'] ?></p>
                </div>
                <div class="mt-2">
                    <p>&yen;<?= $item['price'] ?></p>
                </div>
                <div class="d-flex flex-wrap mt-2">
                    <form action="cart.php" method="post" class="d-flex flex-wrap">
                        <div class="form-group">
                            <input type="number" name="quantity" class="form-control form-control-sm" value="<?= $item['quantity'] ?>" min="1" max="10" style="width: 50px">
                        </div>
                        <input type="hidden" name="update_id" value="<?= $item['id'] ?>">
                        <div class="ml-3">
                            <button type="submit" class="btn btn-outline-secondary btn-sm">更新</button>
                        </div>
                    </form>
                    <form action="cart.php" method="post">
                        <input type="hidden" name="delete_id" value="<?= $item['id'] ?>">
                        <div class="ml-3">
                            <button type="submit" class="btn btn-outline-danger btn-sm">削除</button>
                        </div>
                    </form>
                </div>
            </div>
            <hr>
        <?php endforeach; ?>
        <div class="mt-5 d-flex justify-content-between align-items-center flex-wrap shadow px-4 py-2 bg-light">
            <p class="m-0 text-body pl-4 h5">金額内訳</p>
            <table class="table table-borderless table-sm my-0" style="width: 200px;">
                <tr>
                    <td class="d-flex justify-content-between border-bottom">
                        <div>小計</div>
                        <div>&yen;<?= $subTotal ?></div>
                    </td>
                </tr>
                <tr>
                    <td class="d-flex justify-content-between border-bottom">
                        <div>消費税</div>
                        <div>&yen;<?= $tax ?></div>
                    </td>
                </tr>
                <tr>
                    <td class="d-flex justify-content-between">
                        <div>合計</div>
                        <div>&yen;<?= $total ?></div>
                    </td>
                </tr>
            </table>
        </div>
        <div class="mt-5 text-center">
            <button class="btn btn-dark btn-lg" onclick="location.href='payment.php'">お支払いへ進む</button>
        </div>
    </div>
</div>
