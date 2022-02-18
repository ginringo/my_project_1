<?php

session_start();
require_once __DIR__ . '/dao/ProductDetailsDAO.php';

$title = 'Product Details';
$content = __DIR__ . '/views/productDetails.php';
$headline_eng = 'Product Details / ';
$headline_jp = '商品詳細';

$dao = new ProductDetailsDAO();
$product = $dao->selectProduct();

include __DIR__ . '/views/layout.php';
