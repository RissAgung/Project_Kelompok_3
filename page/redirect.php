<?php

session_start();

if ($_GET['loading'] == md5('Admin')) {
    header('Location: admin/dashboard.php');
} else {
    header('Location: sales/dashboard_sales.php');
}

?>