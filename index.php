<?php
session_start();
include 'functions.php';

$page = isset($_GET['page']) && file_exists($_GET['page'] . '.php') ? $_GET['page'] : 'home';
include $page . '.php';
?>