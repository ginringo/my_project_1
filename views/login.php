<form action="login.php?action=login" method="post" class="row">
    <div class="col-sm-8 offset-sm-2">

        <div class="link ml-2"><a href="memberInfoInput.php">会員登録がまだの方はこちらから</a></div>
        <hr>
        <?php if (isset($loginError)) : ?>
            <p class="shadow-sm p-2 bg-white rounded text-danger">
                <span class="font-weight-bold">×&nbsp;</span><?php echo $loginError ?>
            </p>
        <?php endif; ?>
        <!-- <div class="link mb-3"><a href="#">※&nbsp;パスワードを忘れた方はこちら</a></div> -->

        <!-- メアド -->
        <div class="form-group">
            <label for="email">メールアドレス<?= $req ?></label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $_POST['email'] ?>" required>
        </div>
        <!-- パスワード -->
        <div class="form-group">
            <label for="pass">パスワード<?= $req ?></label>
            <input type="password" class="form-control" id="pass" name="pass" required>
        </div>
        <!-- 送信ボタン -->
        <div class="mt-4">
            <button type="submit" class="btn btn-dark">ログイン</button>
        </div>
    </div>
</form>
