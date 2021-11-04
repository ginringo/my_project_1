<form action="" method="post" class="row">
    <div class="col-sm-8 offset-sm-2">
        <!-- 氏名 -->
        <div class="form-group">
            <label for="name">お名前<?= $req ?></label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <!-- メアド -->
        <div class="form-group">
            <label for="email">メールアドレス<?= $req ?></label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <!-- 電話番号 -->
        <div class="form-group">
            <label for="tel">電話番号</label>
            <input type="tel" class="form-control" id="tel" name="tel">
        </div>
        <!-- テキストエリア -->
        <div class="form-group">
            <label for="message">お問い合わせ内容<?= $req ?></label>
            <textarea name="message" id="message" rows="7" class="form-control" required></textarea>
        </div>
        <!-- 送信ボタン -->
        <div class="mt-4">
            <button type="submit" class="btn btn-dark">送信する</button>
        </div>
    </div>
</form>
