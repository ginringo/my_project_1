<?php

session_start();
require_once __DIR__ . '/dao/OrderDAO.php';

if (!isset($_SESSION['member_id'])) {
    header("Location: login.php");
    exit();
}

if (empty($_SESSION['items'])) {
    header("Location: cart.php");
    exit();
}

$dao = new OrderDAO();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // 注文を確定ボタンを押した際の処理
    $lastInsertId = $dao->insertOrders()['lastInsertId'];

    foreach ($_SESSION['items'] as $item) {
        $dao->insertOrderDetails($lastInsertId, $item);
        $dao->updateProduct($item);
    }
    unset($_SESSION['items']);
    unset($_SESSION['amount']);
    header("Location: myPage.php?state=order-comp");
    exit();
} else {
    // カートから注文画面へ進むを押した際の処理
    $memberInfo = $dao->selectMemberInfo();
}

$title = 'Order';
$content = __DIR__ . '/views/order.php';
$headLineEn = 'Order / ';
$headLineJa = '注文';

include __DIR__ . '/views/layout.php';
