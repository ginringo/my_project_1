<?php

session_start();
require_once __DIR__ . '/lib/pdo.php';

// 入力画面を介さずにこのページに遷移した場合入力画面に飛ばす
if (!isset($_SESSION['memberInfo'])) {
    header("Location: memberInfoInput.php");
    exit();
}

if (!empty($_POST)) {
    $dbh = dbConnect();
    createMember($dbh);
    header("Location: myAccount.php");
}

$title = 'Apply Membership';
$content = __DIR__ . '/views/memberInfoDisplay.php';
$headLineEn = 'Apply Membership / ';
$headLineJa = '会員登録（確認画面）';

include __DIR__ . '/views/layout.php';
