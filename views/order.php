<form class="col-sm-8 offset-sm-2" action="#" method="post">
    <p class="mb-4">※&nbsp;内容を確認後、お支払方法を選択して「注文を確定する」ボタンを押してください</p>

    <table id="table" class="table text-center mb-5">
        <tr>
            <td class="align-middle">お名前</td>
            <td></td>
            <td class="align-middle"><?= $member_info['name'] ?>&nbsp;様</td>
        </tr>
        <tr>
            <td class="align-middle">ご連絡先</td>
            <td></td>
            <td class="align-middle"><?= $member_info['email'] ?></td>
        </tr>
        <tr>
            <td class="align-middle">お届け先住所</td>
            <td></td>
            <td class="align-middle"><?= $member_info['address'] ?></td>
        </tr>
        <tr>
            <td class="align-middle">ご請求金額</td>
            <td></td>
            <td class="align-middle">&yen;<?= $_SESSION['amount']['total'] ?> +送料/代引手数料</td>
        </tr>
        <tr class="border-bottom">
            <td class="align-middle">お支払方法<?= $req ?></td>
            <td></td>
            <td class="align-middle">
                <div class="form-group m-0 d-flex justify-content-around flex-wrap">
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="payment" id="credit" value="クレジットカード" required>
                        <label class="custom-control-label" for="credit">クレジットカード</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="payment" id="convenience" value="コンビニ決済" required>
                        <label class="custom-control-label" for="convenience">コンビニ決済</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" class="custom-control-input" name="payment" id="cash" value="代金引換" required>
                        <label class="custom-control-label" for="cash">代金引換</label>
                    </div>
                </div>
            </td>
        </tr>
    </table>

    <div class="d-flex mt-5 justify-content-center">
        <div class="w-100 mr-5 ml-4">
            <button class="btn btn-lg btn-dark btn-block" onclick="location.href='cart.php'">カートに戻る</button>
        </div>
        <form class="w-100 mr-4" action="#" method="post">
            <button type="submit" class="btn btn-lg btn-success btn-block">注文を確定する</button>
        </form>
    </div>

</form>
