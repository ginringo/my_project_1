<?php

session_start();
require_once __DIR__ . '/dao/LoginDAO.php';

if (isset($_SESSION['member_id'])) {
    header("Location: myPage.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dao = new LoginDAO();
    $memberInfo = $dao->selectMemberInfo();

    if ($memberInfo) {
        $_SESSION['member_id'] = $memberInfo['id'];
        $_SESSION['time'] = time();
        header("Location: myPage.php");
        exit();
    } else {
        $message = '×メールアドレスまたはパスワードが間違っています';
        $color = "text-danger";
        $border = "border-danger";
    }
} else {
    if (isset($_GET['withdrawal'])) {
        $message = '○退会処理が完了しました' . PHP_EOL;
        $color = "text-success";
        $border = "border-success";
    }
    $_POST = [
        'email' => '',
    ];
}

$title = 'Login';
$content = __DIR__ . '/views/login.php';
$headline_eng = 'Login / ';
$headline_jp = 'ログイン';

include __DIR__ . '/views/layout.php';
