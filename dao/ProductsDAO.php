<?php

require_once __DIR__ . '/DAO.php';

class ProductsDAO extends DAO
{
    public function selectCategories()
    {
        $sql = 'SELECT * FROM categories';
        return $this->selectAllRow($sql, []);
    }

    public function selectProducts($category_id, $start, $order)
    {
        $sql = 'SELECT * FROM products';

        if (!empty($order)) {
            $sql = $sql . ' ORDER BY ' . $order;
        } else {
            $sql = $sql . ' ORDER BY created_at DESC';
        }
        $sql .= ' LIMIT ?, 8';

        $bindParams = [$start];
        if ($category_id !== 'all') {
            $sql = preg_replace('/ORDER/', 'WHERE category_id = ? ORDER', $sql);
            $bindParams = [$category_id, $start];
        }
        return $this->selectAllRow($sql, $bindParams);
    }

    public function selectProductsCount($category_id)
    {
        $sql = 'SELECT COUNT(*) AS cnt FROM products';

        $bindParams_2 = [];
        if ($category_id !== 'all') {
            $sql .= ' WHERE category_id = ?';
            $bindParams_2 = [$category_id];
        }
        return $this->selectOneRow($sql, $bindParams_2);
    }
}
