<?php

session_start();
require_once __DIR__ . '/dao/MemberInfoDisplayDAO.php';

if (!isset($_SESSION['memberInfo'])) {
    header("Location: login.php");
    exit();
}

if (!empty($_POST)) {

    $dao = new MemberInfoDisplayDAO();
    $lastInsertId = $dao->insertMemberInfo()['lastInsertId'];

    $_SESSION['member_id'] = $lastInsertId;
    $_SESSION['time'] = time();
    header("Location: myPage.php");
    exit();
}

$title = 'Apply Membership';
$content = __DIR__ . '/views/memberInfoDisplay.php';
$headLineEn = 'Apply Membership / ';
$headLineJa = '会員登録（確認画面）';

include __DIR__ . '/views/layout.php';
