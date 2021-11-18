<?php

session_start();
require_once __DIR__ . '/lib/pdo.php';

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
}
$dbh = dbConnect();
$sql = 'SELECT name FROM member_info WHERE id = ?';
$memberInfo = getMemberInfo($dbh, $sql, [$_SESSION['id']]);

$title = 'My Account';
$content = __DIR__ . '/views/myAccount.php';
$headLineEn = 'My Account / ';
$headLineJa = 'マイアカウント';

include __DIR__ . '/views/layout.php';
