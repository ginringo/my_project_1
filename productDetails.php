<?php

session_start();
require_once __DIR__ . '/lib/dbComponents.php';

$title = 'Product Details';
$content = __DIR__ . '/views/productDetails.php';
$headLineEn = 'Product Details / ';
$headLineJa = '商品詳細';

$productSelect = 'SELECT * FROM products WHERE id = ?';
$product = selectOneRow($productSelect, [$_GET['product_id']]);

include __DIR__ . '/views/layout.php';
