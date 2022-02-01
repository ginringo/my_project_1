<form action="login.php?action=login" method="post" class="row">
    <div class="col-sm-8 offset-sm-2">

        <div class="link ml-1"><a href="memberInfoInput.php" class="link-line">会員登録がまだの方はこちらから</a></div>
        <hr>

        <?php if (isset($loginError)) : ?>
            <p class="pb-1 border-bottom border-danger text-danger">
                <span class="font-weight-bold">×&nbsp;</span><?php echo $loginError ?>
            </p>
        <?php endif; ?>

        <div class="form-group">
            <label for="email">メールアドレス<?= $req ?></label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $_POST['email'] ?>" required>
        </div>

        <div class="form-group">
            <label for="pass">パスワード<?= $req ?></label>
            <input type="password" class="form-control" id="pass" name="pass" required>
        </div>

        <div class="mt-5">
            <button type="submit" class="btn btn-dark btn-block">ログイン</button>
        </div>
    </div>
</form>
