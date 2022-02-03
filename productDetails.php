<?php

session_start();
require_once __DIR__ . '/dao/ProductDetailsDAO.php';

$title = 'Product Details';
$content = __DIR__ . '/views/productDetails.php';
$headLineEn = 'Product Details / ';
$headLineJa = '商品詳細';

$dao = new ProductDetailsDAO();
$product = $dao->selectProduct();

include __DIR__ . '/views/layout.php';
