<?php

session_start();

if (!isset($_SESSION['id'])) {
    //echo($_COOKIE['id']);
    header('Location: login.php');
} else {
    //echo($_COOKIE['id']);
    if ($_SESSION['roles'] == 'Admin') {
        header('Location: admin/dashboard.php');
    } else {
        header('Location: sales/dashboard_sales.php');
    }
}
