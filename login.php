<?php

session_start();
require_once __DIR__ . '/lib/dbComponents.php';

// セッションが切れるかログアウトするまでログインページに遷移させない
if (isset($_SESSION['id'])) {
    header("Location: myAccount.php");
}

if (!empty($_POST) && $_REQUEST['action'] === 'login') {
    $sql = 'SELECT * FROM member_info WHERE email=? AND pass=?';
    $memberInfo = selectOneRow($sql, [$_POST['email'], sha1($_POST['pass'])]);
    if ($memberInfo) {
        // ログインしたユーザーの会員番号をセッションに保存
        $_SESSION['id'] = $memberInfo['id'];
        $_SESSION['time'] = time();
        header("Location: myAccount.php");
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
