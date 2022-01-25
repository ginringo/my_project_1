<div class="row">
    <div class="col-sm-8 offset-sm-2 mt-4 mb-4">
        <p class="shadow-sm p-2 mb-4 bg-white rounded">
            <img src="css/img/check.png">&nbsp;お問い合わせが完了しました
            <!-- <img src="css/img/note.png">&nbsp;ダッシュボード -->
        </p>
        <div class="d-flex justify-content-between align-items-center flex-wrap">
            <h5 class="ml-2"><?php echo $memberInfo['name'] ?>さん、こんにちは</h5>
            <div class="link">
                <table style="width: 250px;" class="table table-bordered">
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
                            <div><img src="css/img/cross.png"></div>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
        <hr class="mt-2">
    </div>
</div>
