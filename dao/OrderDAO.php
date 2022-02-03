<?php

require_once __DIR__ . '/DAO.php';

class OrderDAO extends DAO
{
    public function insertOrders()
    {
        $sql = 'INSERT INTO orders VALUES(null, ?, null, null, ?)';
        return $this->update(
            $sql,
            [
                $_POST['payment'],
                $_SESSION['member_id'],
            ]
        );
    }

    public function insertOrderDetails($lastInsertId, $item)
    {
        $sql = 'INSERT INTO order_details VALUES(?, ?, ?, null, null)';
        return $this->update(
            $sql,
            [
                $lastInsertId,
                $item['id'],
                $item['quantity'],
            ]
        );
    }

    public function updateProduct($item)
    {
        $sql = 'UPDATE products SET stock = stock - ? WHERE id = ?';
        return $this->update(
            $sql,
            [
                $item['quantity'],
                $item['id'],
            ]
        );
    }

    public function selectMemberInfo()
    {
        $sql = 'SELECT name, address, email FROM member_info WHERE id = ?';
        return $this->selectOneRow($sql, [$_SESSION['member_id']]);
    }
}
