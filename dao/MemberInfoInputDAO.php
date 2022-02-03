<?php

require_once __DIR__ . '/DAO.php';

class MemberInfoInputDAO extends DAO
{
    public function selectMemberInfo()
    {
        $sql = 'SELECT COUNT(*) AS "cnt" FROM member_info WHERE email=?';
        return $this->selectOneRow($sql, [$_POST['email']]);
    }
}
