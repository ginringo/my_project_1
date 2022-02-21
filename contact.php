<?php

session_start();
require_once __DIR__ . '/dao/ContactDAO.php';

if (!isset($_SESSION['member_id'])) {
    header("Location: login.php");
    exit();
}

if (!empty($_POST)) {

    $dao = new ContactDAO();
    $row_count = $dao->insertContact()['row_count'];

    header('Location: myPage.php?state=contact-comp');
    exit();
}

$title = 'Contact Us';
$content = __DIR__ . '/views/contact.php';
$headline_eng = 'Contact Us / ';
$headline_jp = 'お問い合わせ';

include __DIR__ . '/views/layout.php';
