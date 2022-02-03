<?php

require_once __DIR__ . '/DAO.php';

class ProductDetailsDAO extends DAO
{
    public function selectProduct()
    {
        $sql = 'SELECT * FROM products WHERE id = ?';
        return $this->selectOneRow($sql, [$_GET['product_id']]);
    }
}
