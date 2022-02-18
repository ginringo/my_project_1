<?php

session_start();
require_once __DIR__ . '/dao/MemberInfoDisplayDAO.php';

if (!isset($_SESSION['member_info'])) {
    header("Location: login.php");
    exit();
}

if (!empty($_POST)) {

    $dao = new MemberInfoDisplayDAO();
    $last_insert_id = $dao->insertMemberInfo()['last_insert_id'];

    $_SESSION['member_id'] = $last_insert_id;
    $_SESSION['time'] = time();
    header("Location: myPage.php");
    exit();
}

$title = 'Apply Membership';
$content = __DIR__ . '/views/memberInfoDisplay.php';
$headline_eng = 'Apply Membership / ';
$headline_jp = '会員登録（確認画面）';

include __DIR__ . '/views/layout.php';
