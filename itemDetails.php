<?php

session_start();
require_once __DIR__ . '/lib/dbComponents.php';

$title = 'Item Details';
$content = __DIR__ . '/views/itemDetails.php';
$headLineEn = 'Item Details / ';
$headLineJa = 'アイテム詳細';

$productSelect = 'SELECT * FROM products WHERE id = ?';
$product = selectOneRow($productSelect, [$_GET['product_id']]);

include __DIR__ . '/views/layout.php';
