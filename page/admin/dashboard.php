<?php
session_start();
unset($_SESSION['flashLogin']);

if (isset($_COOKIE['id'])) {
  $_SESSION['id'] = $_COOKIE['id'];
  $_SESSION['email'] = $_COOKIE['email'];
  $_SESSION['password'] = $_COOKIE['password'];
  $_SESSION['roles'] = $_COOKIE['roles'];
} else {
  session_destroy();
  header('Location: ../login.php');
}

if ($_SESSION['roles'] == 'Sales') {
  header('Location: ../sales/dashboard_sales.php');
}

?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="../../css/style.css">
  <link rel="stylesheet" href="../../css/dashboards.css">
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  <div class="main-container d-flex wg-font-color-white">
    <div class="sidebar d-flex">
      <div class="header wg-font-extrabold">
        <p class="header1">WG </p>
        <p class="header2">OPTICAL</p>
      </div>
      <div class="main">
        <div class="list-item">
          <a href="#">
            <img src="../../Asset/icon/ic_Dashboard.svg" alt="" class="icon">
            <span class="description wg-font-bold">Dashboard</span>
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="../../Asset/icon/ic_Master.svg" alt="" class="icon">
            <span class="description wg-font-bold">Master Data</span>
          </a>
        </div>
        <div class="list-item">
          <a href="#">
            <img src="../../Asset/icon/ic_Invoice.svg" alt="" class="icon">
            <span class="description wg-font-bold">Invoice</span>
          </a>
        </div>
        <div class="item-logout">
          <div class="list-item">
            <a href="../proses.php?logout">
              <img src="../../Asset/icon/ic_Logout.svg" alt="" class="icon">
              <span class="description wg-font-bold">Logout</span>
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="main-content">

    </div>
  </div>
</body>

</html>