<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/style.css">
  <title>Tracking</title>
</head>

<body class="wg-color-1">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  <!-- navbar -->
  <div class="container-fluid wg-navbar wg-color-1 position-fixed" style="z-index: 999999;">
    <div class="container">
      <div class="row wg-font-color-white">
        <div class="col-2 wg-navbar-title">
          <p class="wg-font-medium">WG</p>
          <P class="wg-font-extrabold">OPTICAL</P>
        </div>
        <div class="col-1 offset-7 wg-navbar-lcl">
          <a href="login.php" class="wg-font-medium wg-decoration-link-none">Login</a>
        </div>
        <div class="col-1 wg-navbar-lcl">
        <a href="tracking.php" class="wg-font-medium wg-decoration-link-none">Cari</a>
        </div>
        <div class="col-1 wg-navbar-lcl">
        <a href="../index.php" class="wg-font-medium wg-decoration-link-none">Home</a>
        </div>
      </div>
    </div>
  </div>
  <!-- end navbar -->

  <div class="container-fluid wg-font-color-white">
    <div class="container">
      <div class="row">
        <div class="col-12 text-center wg-font-bold" style="margin-top: 158px; font-size: 40px;">
          <p>Track</p><br>
          <p>Your Order Item</p>
        </div>
      </div>
      <div class="row">
        <div class="col-12 text-center wg-font-semibold" style="margin-top: 15px; font-size: 15px;">
          <p>Masukkan nomor faktur</p><br>
          <p>Untuk melacak pesanan anda</p>
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-4 offset-4 d-flex justify-content-center">
          <input type="text" class="input-tracking">
        </div>
      </div>
    </div>
  </div>

</body>

</html>