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

        $bind_params = [$start];
        if ($category_id !== 'all') {
            $sql = preg_replace('/ORDER/', 'WHERE category_id = ? ORDER', $sql);
            $bind_params = [$category_id, $start];
        }
        return $this->selectAllRow($sql, $bind_params);
    }

    public function selectProductsCount($category_id)
    {
        $sql = 'SELECT COUNT(*) AS cnt FROM products';

        $bind_params = [];
        if ($category_id !== 'all') {
            $sql .= ' WHERE category_id = ?';
            $bind_params = [$category_id];
        }
        return $this->selectOneRow($sql, $bind_params);
    }
}
