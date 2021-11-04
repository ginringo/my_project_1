<form action="myAccount.php" method="post" class="row">
    <div class="col-sm-8 offset-sm-2">
        <p>アカウント情報変更</p>
        <hr>
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
        <p class="mt-4">パスワード変更 ※変更しない場合は空欄</p>
        <hr>
        <div class="form-group">
            <label for="old-pass">現在のパスワード</label>
            <input type="password" class="form-control" id="old-pass" name="old-pass" required>
        </div>
        <div class="form-group">
            <label for="new-pass1">新しいパスワード</label>
            <input type="password" class="form-control" id="new-pass1" name="new-pass1" required>
        </div>
        <div class="form-group">
            <label for="new-pass2">新しいパスワード（確認）</label>
            <input type="password" class="form-control" id="new-pass2" name="new-pass2" required>
        </div>
        <!-- 送信ボタン -->
        <div class="mt-4">
            <button type="submit" class="btn btn-dark">変更を保存する</button>
        </div>
    </div>
</form>
