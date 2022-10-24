<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
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
          <a href="page/login.php" class="wg-font-medium wg-decoration-link-none">Login</a>
        </div>
        <div class="col-1 wg-navbar-lcl">
          <a href="page/tracking.php" class="wg-font-medium wg-decoration-link-none">Cari</a>
        </div>
        <div class="col-1 wg-navbar-lcl">
          <a href="index.php" class="wg-font-medium wg-decoration-link-none">Home</a>
        </div>
      </div>
    </div>
  </div>
  <!-- end navbar -->

  <div class="container-fluid wg-color-1">
    <div class="container">
      <div class="row">
        <div class="col-5 wg-font-color-white" style="margin-top: 178px; margin-bottom: 190px;">
          <div class="wg-font-bold" style="font-size: 60px;">
            Waluyo Group
          </div>
          <div class="wg-font-bold" style="font-size: 60px;">
            Optical
          </div>
          <div class="wg-font-semibold" style="font-size: 20px; margin-top: 35px;">
            <p>Cinta mungkin buta, tapi kadang,</p><br>
            <p>untuk bisa melihatnya dengan lebih jelas,</p><br>
            <p>kita hanya butuh kacamata yang pas.</p>
          </div>
          <a class="btn btn-light me-4 wg-font-semibold wg-font-color-1" href="page/login.php" style="width: 113px; font-size: 16px; margin-top: 35px;">Masuk</a>
          <!-- <div class="btn btn-light me-4" style="width: 113px; font-size: 16px; margin-top: 35px;"><a href="page/login.php" class="wg-font-semibold wg-font-color-1">Masuk</a></div> -->

          <a class="btn  btn-lacak wg-font-semibold wg-font-color-white" href="page/tracking.php" style="width: 113px; font-size: 16px; margin-top: 35px; border-width: 2px; border-color: white;">Lacak</a>
          <!-- <div class="btn  wg-font-semibold wg-font-color-white" style="width: 113px; font-size: 16px; margin-top: 35px; border-width: 2px; border-color: white;"><a href="page/tracking.php">Lacak</a></div> -->
        </div>
        <div id="carouselExampleControls" class="col-5 offset-2 carousel slide" data-bs-ride="carousel" style="margin-top: 178px; height: 305px;">
          <div class="carousel-inner" style="border-radius: 8px;">
            <div class="carousel-item active">
              <img src="Asset/icon/heroimg.png" class="img-fluid d-block w-100" style="border-radius: 8px;">
            </div>
            <div class="carousel-item">
              <img src="Asset/icon/heroimg2.png" class="img-fluid d-block w-100" style="border-radius: 8px;">
            </div>
            <div class="carousel-item">
              <img src="Asset/icon/heroimg3.png" class="img-fluid d-block w-100" style="border-radius: 8px;">
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid wg-color-2">
    <div class="container">
      <div class="row">
        <div class="col-3 wg-font-color-1 wg-font-bold" style="font-size: 40px; margin-top: 54px;">
          Our Product
        </div>
      </div>
      <div class="row" style="margin-top: 41px;">

        <div class="col-4" style="margin-bottom: 101px;">
          <div class="container-fluid">
            <div class="row">
              <div class="col-6 offset-3">
                <img src="Asset/img/catalog.png" class="img-fluid">
              </div>
            </div>
            <div class="row">
              <div class="col-12 wg-font-bold wg-font-color-1 mt-3 text-center" style="font-size: 24px;">
                <p>Product Name</p>
              </div>
            </div>
            <div class="row">
              <div class="col-8 offset-2 mt-3 text-center wg-font-semibold wg-font-color-1" style="font-size: 17px;">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              </div>
            </div>
            <div class="row">
              <div class="col-4 offset-4 mt-3 btn wg-color-1 wg-font-bold wg-font-color-white" style="font-size: 16px;">Detail</div>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="container-fluid">
            <div class="row">
              <div class="col-6 offset-3">
                <img src="Asset/img/catalog.png" class="img-fluid">
              </div>
            </div>
            <div class="row">
              <div class="col-12 wg-font-bold wg-font-color-1 mt-3 text-center" style="font-size: 24px;">
                <p>Product Name</p>
              </div>
            </div>
            <div class="row">
              <div class="col-8 offset-2 mt-3 text-center wg-font-semibold wg-font-color-1" style="font-size: 17px;">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              </div>
            </div>
            <div class="row">
              <div class="col-4 offset-4 mt-3 btn wg-color-1 wg-font-bold wg-font-color-white" style="font-size: 16px;">Detail</div>
            </div>
          </div>
        </div>
        <div class="col-4">
          <div class="container-fluid">
            <div class="row">
              <div class="col-6 offset-3">
                <img src="Asset/img/catalog.png" class="img-fluid">
              </div>
            </div>
            <div class="row">
              <div class="col-12 wg-font-bold wg-font-color-1 mt-3 text-center" style="font-size: 24px;">
                <p>Product Name</p>
              </div>
            </div>
            <div class="row">
              <div class="col-8 offset-2 mt-3 text-center wg-font-semibold wg-font-color-1" style="font-size: 17px;">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
              </div>
            </div>
            <div class="row">
              <div class="col-4 offset-4 mt-3 btn wg-color-1 wg-font-bold wg-font-color-white" style="font-size: 16px;">Detail</div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
  <div class="container-fluid wg-color-1 wg-font-color-white">
    <div class="container">
      <div class="row">
        <div class="col-12 wg-font-extrabold text-center mt-5">
          WALUYO GROUP
        </div>
      </div>
      <div class="row mt-3"></div>
      <div class="row mt-4">
        <div class="col-4 offset-4 mb-3">
          <div class="container-fluid">
            <div class="row">
              <div class="col-2 offset-3">
                <img src="Asset/icon/foter_ig.png" class="img-fluid">
              </div>
              <div class="col-2">
                <img src="Asset/icon/foter_fb.png" class="img-fluid">
              </div>
              <div class="col-2">
                <img src="Asset/icon/foter_wa.png" class="img-fluid">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <hr class="mt-4 mb-4">
    <div class="container">
      <div class="row mt-2 mb-2">
        <div class="col-12 text-center wg-font-medium" style="font-size: 15px;">
          Copyright @2022<p class="wg-font-extrabold"> Waluyo Group IT Team</p>. All Right Reserved
        </div>
      </div>
      <div class="row mt-4"></div>
    </div>
  </div>
</body>

</html>