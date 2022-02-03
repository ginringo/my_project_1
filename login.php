<?php

session_start();
require_once __DIR__ . '/dao/LoginDAO.php';

if (isset($_SESSION['member_id'])) {
    header("Location: myPage.php");
    exit();
}

if (!empty($_POST) && $_REQUEST['action'] === 'login') {
    $dao = new LoginDAO();
    $memberInfo = $dao->selectMemberInfo();
    if ($memberInfo) {
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
