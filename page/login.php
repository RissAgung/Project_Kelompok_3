<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="../css/stylel.css">
</head>

<body class="wg-color-1 wg-font-color-white">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>

  <!-- navbar -->
  <div class="container-fluid wg-navbar wg-color-1 position-fixed">
    <div class="container">
      <div class="row wg-font-color-white">
        <div class="col-lg-2 wg-navbar-title">
          <p class="wg-font-medium">WG</p>
          <P class="wg-font-extrabold">OPTICAL</P>
        </div>
        <div class="col-lg-1 offset-7 wg-navbar-lcl">
          <a href="login.php" class="wg-font-medium wg-decoration-link-none">Login</a>
        </div>
        <div class="col-lg-1 wg-navbar-lcl">
        <a href="tracking.php" class="wg-font-medium wg-decoration-link-none">Cari</a>
        </div>
        <div class="col-lg-1 wg-navbar-lcl">
        <a href="../index.php" class="wg-font-medium wg-decoration-link-none">Home</a>
        </div>
      </div>
    </div>
  </div>
  <!-- end navbar -->

  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-6 offset-1" style="margin-top: 200px; font-size: 40px;">
          <div class="row">
            <div class="col-12 wg-font-bold" style="font-size: 40px;">
              <p>Welcome To</p><br>
              <p>Waluyo Group Optical</p>
            </div>
          </div>
          <div class="row" style="margin-top: 29px;">
            <div class="col-12 wg-font-semibold" style="font-size: 15px;">
              <p>Masukkan username</p><br>
              <p>dan password anda untuk login</p>
            </div>
          </div>
        </div>
        <div class="col-3 offset-1">
          <div class="row">
            <div class="col-12">
              <input type="text" class="input-login" style="margin-top: 200px;" placeholder="Username">
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <input type="password" class="input-login" style="margin-top: 44px;" placeholder="Password">
            </div>
          </div>
          <div class="row" style="margin-top: 29px;">
            <div class="col-6 wg-font-semibold" style="font-size: 15px;">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                  Keep Login
                </label>
              </div>
            </div>
            <div class="col-6 wg-font-semibold text-end" style="font-size: 15px;">
              <a href="">Forget password</a>
            </div>
          </div>
          <div class="row">
            <div class="container">
              <div class="row">
                <div class="col-12" style="margin-top: 20px;">
                  <hr class="wg-color-3">
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <button type="button" class="btn btn-primary wg-font-bold btn-login-login">Login</button>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</body>