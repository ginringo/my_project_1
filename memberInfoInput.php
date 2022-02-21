<?php

session_start();
require_once __DIR__ . '/dao/MemberInfoInputDAO.php';

if (!isset($_REQUEST['action'])) {
    $_REQUEST['action'] = '';
}

function validate($cnt)
{
    $errors = [];
    if ($_POST['pass1'] !== $_POST['pass2']) {
        $errors['pass'] = 'パスワードが一致しません';
    } elseif (mb_strlen($_POST['pass1']) === 0) {
        $errors['pass'] = 'パスワードを入力してください';
    } elseif (mb_strlen($_POST['pass1']) < 8) {
        $errors['pass'] = 'パスワードは8文字以上で設定してください';
    }
    if ($cnt) {
        $errors['email'] = 'すでに登録されているメールアドレスです';
    }
    return $errors;
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dao = new MemberInfoInputDAO();
    $member_info = $dao->selectMemberInfo();
    $errors = validate($member_info['cnt']);

    if (count($errors) === 0) {
        $_SESSION['member_info'] = $_POST;
        header("Location: memberInfoDisplay.php");
        exit();
    }
} else {
    $errors = [];
    if ($_REQUEST['action'] === 'rewrite' && isset($_SESSION['member_info'])) {
        $_POST = $_SESSION['member_info'];
    } else {
        $_POST = [
            'name' => '',
            'address' => '',
            'email' => '',
            'tel' => '',
            'pass1' => '',
            'pass2' => '',
        ];
    }
}

$title = 'Apply Membership';
$content = __DIR__ . '/views/memberInfoInput.php';
$headline_eng = 'Apply Membership / ';
$headline_jp = '会員登録';

include __DIR__ . '/views/layout.php';
