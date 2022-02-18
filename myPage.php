<?php

session_start();
require_once __DIR__ . '/dao/MyPageDAO.php';

if (!isset($_SESSION['member_id'])) {
    header("Location: login.php");
    exit();
}

unset($_SESSION['member_info']);

$dao = new MyPageDAO();
$member_info = $dao->selectMemberInfo();

if (isset($_GET['state'])) {

    $border_color = 'border-success';
    $text_color = 'text-success';

    switch ($_GET['state']) {
        case 'order-comp':
            $state = '○注文が完了しました';
            break;
        case 'contact-comp':
            $state = '○お問い合わせが完了しました';
            break;
        case 'withdrawal-failure':
            $state = '×退会処理に失敗しました';
            $border_color = 'border-danger';
            $text_color = 'text-danger';
    }
}

$title = 'My Page';
$content = __DIR__ . '/views/myPage.php';
$headline_eng = 'My Page / ';
$headline_jp = 'マイページ';

include __DIR__ . '/views/layout.php';
