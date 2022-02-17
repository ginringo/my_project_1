<?php

session_start();
require_once __DIR__ . '/dao/WithdrawalDAO.php';

if (!isset($_SESSION['member_id'])) {
    header("Location: myPage.php");
    exit();
}

/*
    TODO: 会員情報のほかに注文履歴や問い合わせ履歴も削除する必要があるかかも
*/
$dao = new WithdrawalDAO();
$rowCount = $dao->deleteMemberInfo();

if ($rowCount) {
    unset($_SESSION['member_id']);
    unset($_SESSION['time']);
    header('Location: login.php?withdrawal');
    exit();
}

echo '退会処理に失敗しました' . PHP_EOL;
header('Location: myPage.php?state=withdrawal-failure');
exit();
