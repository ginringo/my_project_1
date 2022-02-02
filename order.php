<?php

session_start();
require_once __DIR__ . '/dao/dbComponents.php';

if (!isset($_SESSION['member_id'])) {
    header("Location: login.php");
    exit();
}

if (empty($_SESSION['items'])) {
    header("Location: cart.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // 注文を確定ボタンを押した際の処理

    $insert1 = 'INSERT INTO orders VALUES(null, ?, null, null, ?)';
    $lastInsertId = update(
        $insert1,
        [
            $_POST['payment'],
            $_SESSION['member_id'],
        ]
    )['lastInsertId'];

    $insert2 = 'INSERT INTO order_details VALUES(?, ?, ?, null, null)';
    foreach ($_SESSION['items'] as $item) {
        update(
            $insert2,
            [
                $lastInsertId,
                $item['id'],
                $item['quantity'],
            ]
        );
    }

    unset($_SESSION['items']);
    unset($_SESSION['amount']);
    header("Location: myPage.php?state=order-comp");
    exit();
} else {

    // カートから注文画面へ進むを押した際の処理
    $sql = 'SELECT name, address, email FROM member_info WHERE id = ?';
    $memberInfo = selectOneRow($sql, [$_SESSION['member_id']]);
}

$title = 'Order';
$content = __DIR__ . '/views/order.php';
$headLineEn = 'Order / ';
$headLineJa = '注文';

include __DIR__ . '/views/layout.php';
