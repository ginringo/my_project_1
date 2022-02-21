<?php

require_once __DIR__ . '/DAO.php';

class WithdrawalDAO extends DAO
{
    public function deleteMemberInfo()
    {
        // $sql = 'DELETE FROM member_info WHERE id = ?';
        $sql = 'UPDATE member_info SET is_deleted = TRUE WHERE id = ?';
        return $this->update($sql, [$_SESSION['member_id']])['row_count'];
    }
}
