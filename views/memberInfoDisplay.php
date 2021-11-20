<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <p class="mb-4">※&nbsp;確認後「登録する」ボタンを押してください</p>
        <hr>
        <p>お名前</p>
        <p><?php echo $_SESSION['memberInfo']['name'] ?></p>
        <hr>
        <p>住所</p>
        <p><?php echo $_SESSION['memberInfo']['address'] ?></p>
        <hr>
        <p>メールアドレス</p>
        <p><?php echo $_SESSION['memberInfo']['email'] ?></p>
        <hr>
        <p>電話番号</p>
        <p><?php echo $_SESSION['memberInfo']['tel'] ?></p>
        <hr>
        <p>パスワード</p>
        <p><?php echo preg_replace('/./', '●', $_SESSION['memberInfo']['pass1']) ?></p>
        <hr>
        <div class="d-flex mt-4">
            <div class="mr-4">
                <button　type="submit" class="btn btn-dark" onclick="location.href='memberInfoInput.php?action=rewrite'">修正する</button>
            </div>
            <form action="" method="post">
                <input type="hidden" name="action" value="submit">
                <button type="submit" class="btn btn-success">登録する</button>
            </form>
        </div>
    </div>
</div>
