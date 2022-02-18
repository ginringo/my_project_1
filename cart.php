<?php

session_start();

$title = 'Cart';
$content = __DIR__ . '/views/cart.php';
$headline_eng = 'Cart / ';
$headline_jp = 'カート';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    processingPost();
    $_SESSION['amount'] = amountCalc();
}

if (!isset($_SESSION['items']) || empty($_SESSION['items'])) {
    $content = __DIR__ . '/views/emptyCart.php';
}

include __DIR__ . '/views/layout.php';


function processingPost()
{
    if (isset($_SESSION['items'])) {
        if (isset($_POST['update_id'])) {
            $_SESSION['items'][$_POST['update_id']]['quantity'] = $_POST['quantity'];
            return;
        }
        if (isset($_POST['delete_id'])) {
            unset($_SESSION['items'][$_POST['delete_id']]);
            return;
        }
        if (array_key_exists($_POST['id'], $_SESSION['items'])) {
            $quantity = $_SESSION['items'][$_POST['id']]['quantity'] + $_POST['quantity'];
            $stock = $_SESSION['items'][$_POST['id']]['stock'];
            $_SESSION['items'][$_POST['id']]['quantity'] = $stock < $quantity ? $stock : $quantity;
            return;
        }
    }
    $_SESSION['items'][$_POST['id']] = $_POST;
}

function amountCalc()
{
    $sub_total = 0;
    foreach ($_SESSION['items'] as $item) {
        $sub_total += $item['price'] * $item['quantity'];
    }
    $tax = floor($sub_total * 0.1);
    $total = $sub_total + $tax;

    return [
        'sub_total' => $sub_total,
        'tax' => $tax,
        'total' => $total,
    ];
}
