<?php

require_once __DIR__ . '/dao/ProductsDAO.php';

$title = 'Products';
$content = __DIR__ . '/views/products.php';
$headLineEn = 'Products / ';
$headLineJa = '商品一覧';

$order = isset($_GET['order']) ? $_GET['order'] : '';
$category_id = isset($_GET['category_id']) ? $_GET['category_id'] : 'all';
$page = isset($_GET['page']) && is_numeric($_GET['page']) ? $_GET['page'] : 1;
$start = 8 * ($page - 1);

$dao = new ProductsDAO();
$categories = $dao->selectCategories();
$products = $dao->selectProducts($category_id, $start, $order);
$countRow = $dao->selectProductsCount($category_id);

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
