<?php

session_start();
include($_SERVER['DOCUMENT_ROOT'].'/lib/bj-vars.php');
include($_SERVER['DOCUMENT_ROOT'].'/lib/bj-notifications.php');
unset($_SESSION['id']);
unset($_SESSION['email']);
header('Location: '. $domain.'/login/');

session_destroy();

?>