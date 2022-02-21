<?php

require_once __DIR__ . '/DAO.php';

class MemberInfoDisplayDAO extends DAO
{
    public function insertMemberInfo()
    {
        $sql = 'INSERT INTO member_info VALUES(NULL, ?, ?, ?, ?, ?, NULL, NULL, FALSE)';
        return $this->update(
            $sql,
            [
                $_SESSION['member_info']['name'],
                $_SESSION['member_info']['address'],
                $_SESSION['member_info']['email'],
                $_SESSION['member_info']['tel'],
                sha1($_SESSION['member_info']['pass1'])
            ]
        );
    }
}
