<?php

require_once __DIR__ . '/DAO.php';

class MemberInfoDisplayDAO extends DAO
{
    public function insertMemberInfo()
    {
        $sql = 'INSERT INTO member_info VALUES(null, ?, ?, ?, ?, ?, null, null)';
        return $this->update(
            $sql,
            [
                $_SESSION['memberInfo']['name'],
                $_SESSION['memberInfo']['address'],
                $_SESSION['memberInfo']['email'],
                $_SESSION['memberInfo']['tel'],
                sha1($_SESSION['memberInfo']['pass1'])
            ]
        );
    }
}
