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

    $borderColor = 'border-success';
    $textColor = 'text-success';

    switch ($_GET['state']) {
        case 'order-comp':
            $state = '○注文が完了しました';
            break;
        case 'contact-comp':
            $state = '○お問い合わせが完了しました';
            break;
        case 'withdrawal-failure':
            $state = '×退会処理に失敗しました';
            $borderColor = 'border-danger';
            $textColor = 'text-danger';
    }
}

$title = 'My Page';
$content = __DIR__ . '/views/myPage.php';
$headLineEn = 'My Page / ';
$headLineJa = 'マイページ';

include __DIR__ . '/views/layout.php';
