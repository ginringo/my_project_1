<?php

require_once __DIR__ . '/DAO.php';

class LoginDAO extends DAO
{
    public function selectMemberInfo()
    {
        $sql = 'SELECT * FROM member_info WHERE email=? AND pass=?';
        return $this->selectOneRow($sql, [$_POST['email'], sha1($_POST['pass'])]);
    }
}
