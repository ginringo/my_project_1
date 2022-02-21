<form action="#" method="post" class="row">
    <div class="col-sm-8 offset-sm-2">
        <div class="form-group">
            <label for="sentence">お問い合わせ内容<?= $req ?></label>
            <textarea name="sentence" id="sentence" rows="7" class="form-control" required></textarea>
        </div>
        <div class="mt-4">
            <button type="submit" class="btn btn-dark btn-block">送信する</button>
        </div>
    </div>
</form>
