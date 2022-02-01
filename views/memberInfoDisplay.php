<div class="row">
    <div class="col-sm-8 offset-sm-2">

        <table id="table" class="table text-center mb-4">
            <tr>
                <td class="align-middle">お名前</td>
                <td></td>
                <td class="align-middle"><?= $_SESSION['memberInfo']['name'] ?></td>
            </tr>
            <tr>
                <td class="align-middle">住所</td>
                <td></td>
                <td class="align-middle"><?= $_SESSION['memberInfo']['address'] ?></td>
            </tr>
            <tr>
                <td class="align-middle">メールアドレス</td>
                <td></td>
                <td class="align-middle"><?= $_SESSION['memberInfo']['email'] ?></td>
            </tr>
            <tr>
                <td class="align-middle">電話番号</td>
                <td></td>
                <td class="align-middle"><?= $_SESSION['memberInfo']['tel'] ?></td>
            </tr>
            <tr class="border-bottom">
                <td class="align-middle">パスワード</td>
                <td></td>
                <td class="align-middle"><?= preg_replace('/./', '●', $_SESSION['memberInfo']['pass1']) ?></td>
            </tr>
        </table>

        <div class="d-flex mt-5 justify-content-center">
            <div class="w-100 mr-5 ml-4">
                <button class="btn btn-lg btn-dark btn-block" onclick="location.href='memberInfoInput.php?action=rewrite'">修正する</button>
            </div>
            <form class="w-100 mr-4" action="#" method="post">
                <input type="hidden" name="action" value="submit">
                <button type="submit" class="btn btn-lg btn-success btn-block">登録する</button>
            </form>
        </div>

    </div>
</div>
