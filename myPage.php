<?php

session_start();
require_once __DIR__ . '/dao/MyPageDAO.php';

if (!isset($_SESSION['member_id'])) {
    header("Location: login.php");
    exit();
}

unset($_SESSION['memberInfo']);

$dao = new MyPageDAO();
$memberInfo = $dao->selectMemberInfo();

if (isset($_GET['state'])) {
    if ($_GET['state'] === 'order-comp') {
        $state = '注文が完了しました';
    }
    if ($_GET['state'] === 'contact-comp') {
        $state = 'お問い合わせが完了しました';
    }
}

$title = 'My Page';
$content = __DIR__ . '/views/myPage.php';
$headLineEn = 'My Page / ';
$headLineJa = 'マイページ';

include __DIR__ . '/views/layout.php';
