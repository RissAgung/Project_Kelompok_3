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

if ($_SESSION['roles'] == 'Admin') {
  header('Location: ../admin/dashboard.php');
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
  <link rel="stylesheet" href="../../css/dashboard.css">
</head>

<body>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  <div class="main-container d-flex wg-font-color-white">
    <!-- <div class="sidebar d-flex">
      <div class="header wg-font-extrabold">
        <p class="header1">WG </p>
        <p class="header2">OPTICAL</p>
      </div>
      <div class="main">
        <div class="list-item">
          <a href="#">
            <img src="../../Asset/icon/ic_Catalog.svg" alt="" class="icon">
            <span class="description wg-font-bold">Catalog</span>
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
        <div class="list-item">
          <a href="../proses.php?logout">
            <img src="../../Asset/icon/ic_Invoice.svg" alt="" class="icon">
            <span class="description wg-font-bold">Logout</span>
          </a>
        </div>
      </div>
    </div> -->
    

    <div class="main-content d-flex">
      <div class="header wg-font-extrabold wg-font-color-2">
        <p> Catalog Product</p>
      </div>
      <div class="navbar d-flex">
        <div class="tab-bar d-flex wg-font-bold wg-font-color-2">
          <div>
            <input type="radio" name="grade" id="grade-a" checked>
            <label class="grade grade-a" for="grade-a">Grade A</label>
          </div>
          <div>
            <input type="radio" name="grade" id="grade-b">
            <label class="grade grade-b" for="grade-b">Grade B</label>
          </div>
          <div>
            <input type="radio" name="grade" id="spesial">
            <label class="grade spesial" for="spesial">Spesial</label>
          </div>
        </div>
        <div class="search-bar d-flex">
          <img src="../../Asset/icon/ic_search.svg" alt="">
          <input class="search wg-font-medium" type="text" placeholder="Cari Produk">
        </div>
        <div class="card-notif d-flex">
          <div class="notif">
            <div class="btn btn-lonceng d-flex">
              <img src="../../Asset/icon/ic_notif.svg" alt="">
            </div>
          </div>
          <div class="keranjang">
            <div class="btn btn-keranjang d-flex">
              <img src="../../Asset/icon/ic_card.svg" alt="">
            </div>
          </div>
        </div>
      </div>
      <div class="catalog d-flex">
        <?php for($i=0; $i<30; $i++) : ?>
          <div class="item"></div>
        <?php endfor ?>
      </div>
    </div>
  </div>
</body>

</html>