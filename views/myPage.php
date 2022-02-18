<div class="row">
    <div class="col-sm-8 offset-sm-2 mt-4 mb-4">

        <?php if (!empty($state)) : ?>
            <p class="pb-1 pl-2 border-bottom <?= $border_color ?>">
                <span class="h5 <?= $text_color ?>"><?= $state ?></span>
            </p>
        <?php else : ?>
            <hr>
        <?php endif ?>

        <div class="mt-4 d-flex justify-content-between align-items-center flex-wrap">
            <h5 class="ml-2"><?php echo $member_info['name'] ?>さん、こんにちは</h5>
            <div class="link">
                <table style="width: 250px;" class="table table-bordered">
                    <tr>
                        <td class="d-flex justify-content-between">
                            <div class="font-weight-bold">
                                <a href="myPage.php">ダッシュボード</a>
                            </div>
                            <div><img src="css/img/note.png"></div>
                        </td>
                    </tr>
                    <tr>
                        <td class="d-flex justify-content-between">
                            <div><a href="contact.php">お問い合わせ</a></div>
                            <div><img src="css/img/mail.png"></div>
                        </td>
                    </tr>
                    <tr>
                        <td class="d-flex justify-content-between">
                            <div><a href="changeInfo.php">登録情報を変更する</a></div>
                            <div><img src="css/img/person.png"></div>
                        </td>
                    </tr>
                    <tr>
                        <td class="d-flex justify-content-between">
                            <div><a href="logout.php">ログアウト</a></div>
                            <div><img src="css/img/logout.png"></div>
                        </td>
                    </tr>
                    <tr>
                        <td class="d-flex justify-content-between">
                            <div><a href="withdrawal.php">退会する</a></div>
                            <div><img src="css/img/cross.png"></div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>

        <hr class="mt-2">

    </div>
</div>
