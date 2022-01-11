<?php

session_start();

$title = 'Cart';
$content = __DIR__ . '/views/cart.php';
$headLineEn = 'Cart / ';
$headLineJa = 'カート';

//var_dump($_POST);
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    processingPost();
}

if (!isset($_SESSION['products']) || empty($_SESSION['products'])) {
    $content = __DIR__ . '/views/emptyCart.php';
}

var_dump($_SESSION);
//unset($_SESSION['products']);

include __DIR__ . '/views/layout.php';



function processingPost()
{
    if (isset($_SESSION['products'])) {
        if (isset($_POST['update_id'])) {
            $_SESSION['products'][$_POST['update_id']]['quantity'] = $_POST['quantity'];
            return;
        }
        if (isset($_POST['delete_id'])) {
            unset($_SESSION['products'][$_POST['delete_id']]);
            return;
        }
        if (array_key_exists($_POST['id'], $_SESSION['products'])) {
            $quantity = $_SESSION['products'][$_POST['id']]['quantity'] + $_POST['quantity'];
            $_SESSION['products'][$_POST['id']]['quantity'] = $quantity <= 10 ? $quantity : 10;
            return;
        }
    }
    $_SESSION['products'][$_POST['id']] = $_POST;
}
