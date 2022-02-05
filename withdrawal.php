<?php

session_start();
require_once __DIR__ . '/dao/WithdrawalDAO.php';

if (!isset($_SESSION['member_id'])) {
    header("Location: myPage.php");
    exit();
}

$dao = new WithdrawalDAO();
$rowCount = $dao->deleteMemberInfo();

unset($_SESSION['member_id']);
unset($_SESSION['time']);

var_dump($rowCount);

if ($rowCount) {
    header('Location: login.php?action=withdrawal');
    exit();
} else {
    echo '退会処理に失敗しました' . PHP_EOL;
}
