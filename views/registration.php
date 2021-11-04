<form action="myAccount.php" method="post" class="row">
    <div class="col-sm-8 offset-sm-2">
        <!-- 氏名 -->
        <div class="form-group">
            <label for="name">お名前<?= $req ?></label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <!-- 住所 -->
        <div class="form-group">
            <label for="address">住所<?= $req ?></label>
            <input type="text" class="form-control" id="address" name="address" required>
        </div>
        <!-- メアド -->
        <div class="form-group">
            <label for="email">メールアドレス<?= $req ?></label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <!-- 電話番号 -->
        <div class="form-group">
            <label for="tel">電話番号<?= $req ?></label>
            <input type="tel" class="form-control" id="tel" name="tel" required>
        </div>
        <!-- パスワード -->
        <div class="form-group">
            <label for="pass1">パスワード<?= $req ?></label>
            <input type="password" class="form-control" id="pass1" name="pass1" required>
        </div>
        <div class="form-group">
            <label for="pass2">パスワード（確認）<?= $req ?></label>
            <input type="password" class="form-control" id="pass2" name="pass2" required>
        </div>
        <!-- 送信ボタン -->
        <div class="mt-4">
            <button type="submit" class="btn btn-dark">確認画面へ</button>
        </div>
    </div>
</form>
