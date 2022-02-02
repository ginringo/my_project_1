<?php

session_start();
require_once __DIR__ . '/dao/dbComponents.php';

// セッションが切れるかログアウトするまでログインページに遷移させない
if (isset($_SESSION['member_id'])) {
    header("Location: myPage.php");
    exit();
}

if (!empty($_POST) && $_REQUEST['action'] === 'login') {
    $sql = 'SELECT * FROM member_info WHERE email=? AND pass=?';
    $memberInfo = selectOneRow($sql, [$_POST['email'], sha1($_POST['pass'])]);
    if ($memberInfo) {
        // ログインしたユーザーの会員番号をセッションに保存
        $_SESSION['member_id'] = $memberInfo['id'];
        $_SESSION['time'] = time();
        header("Location: myPage.php");
        exit();
    } else {
        $loginError = 'メールアドレスまたはパスワードが間違っています';
    }
} else {
    $_POST = [
        'email' => '',
    ];
}

$title = 'Login';
$content = __DIR__ . '/views/login.php';
$headLineEn = 'Login / ';
$headLineJa = 'ログイン';

include __DIR__ . '/views/layout.php';
