<?php

session_start();

unset($_SESSION['member_id']);
unset($_SESSION['time']);

header('Location: login.php');
exit();
