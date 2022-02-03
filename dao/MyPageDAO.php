<?php

require_once __DIR__ . '/DAO.php';

class MyPageDAO extends DAO
{
    public function selectMemberInfo()
    {
        $sql = 'SELECT name FROM member_info WHERE id = ?';
        return $this->selectOneRow($sql, [$_SESSION['member_id']]);
    }
}
