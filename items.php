<?php

require_once __DIR__ . '/lib/dbComponents.php';

$title = 'Items';
$content = __DIR__ . '/views/items.php';
$headLineEn = 'Items / ';
$headLineJa = 'アイテム';

$order = isset($_GET['order']) ? $_GET['order'] : '';
$category_id = isset($_GET['category_id']) ? $_GET['category_id'] : 'all';
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
$start = 8 * ($page - 1);

$productsSelect = 'SELECT * FROM products';
$productsSelect_2 = 'SELECT COUNT(*) AS cnt FROM products';
$categoriesSelect = 'SELECT * FROM categories';
$categories = selectAllRow($categoriesSelect, []);

if (!empty($order)) {
    $productsSelect = $productsSelect . ' ORDER BY ' . $order;
} else {
    $productsSelect = $productsSelect . ' ORDER BY created_at DESC';
}

$productsSelect .= ' LIMIT ?, 8';

if ($category_id !== 'all') {
    $productsSelect = preg_replace('/ORDER/', 'WHERE category_id = ? ORDER', $productsSelect);
    $productsSelect_2 .= ' WHERE category_id = ?';
    $bindParams = [$category_id, $start];
    $bindParams_2 = [$category_id];
} else {
    $bindParams = [$start];
    $bindParams_2 = [];
}

$products = selectAllRow($productsSelect, $bindParams);
$countRow = selectOneRow($productsSelect_2, $bindParams_2);
$cnt = $countRow['cnt'];
$maxPage = ceil($cnt / 8);
$shortage = 8 - (8 * $maxPage - $cnt);

include __DIR__ . '/views/layout.php';

function selected($get, $value)
{
    if ($get == $value) {
        return 'selected';
    }
}

function highlight($category_id, $value)
{
    if ($category_id == $value) {
        return ' btn-dark';
    } else {
        return ' btn-outline-secondary';
    }
}
