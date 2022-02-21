<?php

session_start();
require_once __DIR__ . '/dao/WithdrawalDAO.php';

if (!isset($_SESSION['member_id'])) {
    header("Location: myPage.php");
    exit();
}

$dao = new WithdrawalDAO();
$row_count = $dao->deleteMemberInfo();

if ($row_count) {
    unset($_SESSION['member_id']);
    unset($_SESSION['time']);
    header('Location: login.php?withdrawal');
    exit();
}

header('Location: myPage.php?state=failure');
exit();
