<?php

session_start();
require_once __DIR__ . '/lib/dbComponents.php';

if (!isset($_SESSION['member_id'])) {
    header("Location: login.php");
}
unset($_SESSION['memberInfo']);
var_dump($_SESSION);
$sql = 'SELECT name FROM member_info WHERE id = ?';
$memberInfo = selectOneRow($sql, [$_SESSION['member_id']]);
$title = 'My Account';
$content = __DIR__ . '/views/myAccount.php';
$headLineEn = 'My Account / ';
$headLineJa = 'マイアカウント';

include __DIR__ . '/views/layout.php';
