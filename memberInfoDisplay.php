<?php

session_start();
require_once __DIR__ . '/dao/dbComponents.php';

// 入力画面を介さずにこのページに遷移した場合入力画面に飛ばす
if (!isset($_SESSION['memberInfo'])) {
    header("Location: login.php");
    exit();
}

if (!empty($_POST)) {

    $insert = 'INSERT INTO member_info VALUES(null, ?, ?, ?, ?, ?, null)';
    update(
        $insert,
        [
            $_SESSION['memberInfo']['name'],
            $_SESSION['memberInfo']['address'],
            $_SESSION['memberInfo']['email'],
            $_SESSION['memberInfo']['tel'],
            sha1($_SESSION['memberInfo']['pass1'])
        ]
    );

    $select = 'SELECT id FROM member_info WHERE email=? AND pass=?';
    $memberInfo = selectOneRow(
        $select,
        [$_SESSION['memberInfo']['email'], sha1($_SESSION['memberInfo']['pass1'])]
    );

    $_SESSION['member_id'] = $memberInfo['id'];
    $_SESSION['time'] = time();
    /*
        NOTE: myPageに移動
        unset($_SESSION['memberInfo']);
    */
    header("Location: myPage.php");
}

$title = 'Apply Membership';
$content = __DIR__ . '/views/memberInfoDisplay.php';
$headLineEn = 'Apply Membership / ';
$headLineJa = '会員登録（確認画面）';

include __DIR__ . '/views/layout.php';
