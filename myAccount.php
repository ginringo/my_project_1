<?php

session_start();
require_once __DIR__ . '/lib/dbComponents.php';

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
}
$sql = 'SELECT name FROM member_info WHERE id = ?';
$memberInfo = executeQuery($sql, [$_SESSION['id']]);
$title = 'My Account';
$content = __DIR__ . '/views/myAccount.php';
$headLineEn = 'My Account / ';
$headLineJa = 'マイアカウント';

include __DIR__ . '/views/layout.php';
