<?php

require_once __DIR__ . '/DAO.php';

class ContactDAO extends DAO
{
    public function insertContact()
    {
        $sql = 'INSERT INTO contact VALUES(?, NULL, ?)';
        return $this->update(
            $sql,
            [
                $_SESSION['member_id'],
                $_POST['sentence'],
            ]
        );
    }
}
