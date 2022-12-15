<?php  
session_start();

include 'config2.php';
// error_reporting(0);

if (isset($_SESSION['username'])) {
    header("Location: home.php");
}
 
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $umur = $_POST['umur
    '];
 
    $sql = "SELECT * FROM register WHERE email='$email' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        $_SESSION['umur'] = $row['umur'];
        $_SESSION['gender'] = $row['gender'];
        header("Location: home.php");
    } else {
        echo "<script>alert('Email atau password Anda salah. Silahkan coba lagi!')</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>BeeStore</title>

	<!-- CSS only -->
<link rel="stylesheet" type="text/css" href="style.css">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>

<body class="warna">
<!--NAVBAR2-->
<nav class="navbar navbar-dark navbar-expand-lg bg-dark text-light sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="#">BeeStore</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item dropdown">
          <a class="nav-link text-light" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Login
          </a>
          <ul class="dropdown-menu menu-body">
            <li><a class="dropdown-item text-center" href="#">Login Here</a>
               <form method="post">
 				        <input type="text" name="email" placeholder="email" />
                <input type="password" name="password" placeholder="password" />
                <input type="submit" name="submit" value="Login">
            	</form>
            </li>
            
          </ul>
        </li>

        <li class="nav-item">
          <a class="nav-link text-light" href="register.php">Join Member</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Data Produk
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Produk pakaian</a></li>
            <li><a class="dropdown-item" href="#">Produk aksesoris</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Spesial untukmu
            </a></li>
          </ul>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Cari Sesuatu" aria-label="Search">
        <button class="btn  btn-dark btn-outline-warning" type="submit">Cari</button>
      </form>
    </div>
  </div>
</nav>

<!--slide gambar-->
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="asset/sepeda1.jpg" class="d-block w-100" alt="..." style="height: 500px">
      <div class="carousel-caption">
        <h4>SEPEDA GUNUNG MODEL 1</h4>
        <p>kegunung gak ada sepeda kayak lauk kurang garem gak</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="asset/sepeda4.jpg" class="d-block w-100" alt="..." style="height: 500px">
      <div class="carousel-caption">
        <h4>SEPEDA GUNUNG MODEL 2</h4>
        <p>kegunung gak ada sepeda kayak lauk kurang garem gak</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="asset/sepeda5.jpg" class="d-block w-100" alt="..." style="height: 500px">
      <div class="carousel-caption">
        <h4>SEPEDA GUNUNG MODEL 3</h4>
        <p>kegunung gak ada sepeda kayak lauk kurang garem gak</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

<!-------------------------------------------------------------------->
<div class="row">
<div class="card mb-3 mt-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4 mt-4">
      <img src="asset/sepeda3.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">SEPEDA CONTOH 1</h5>
        <p class="card-text">Sepeda Gravel Element FRC 38 ini dibekali dengan bahan frame alloy yang ringan dan tahan karat. Tersedia dalam 3 pilihan warna yaitu hitam, beige dan hijau. Menggunakan 9 x 2 pilihan kecepatan, dengan RD dari pabrikan Shimano dan Brifter dari pabrikan Sensah, untuk menghadapi berbagai medan tanjakan. Dilengkapi juga dengan sistem pengereman yang sudah cakram membuat gowes Anda</p>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Pesan Sekarang
</button>

<!-- Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Pesan Lewat apa nich</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body" hight>
      <button type="button" class="btn btn-warning" a href="#"><img src="asset/gofood.png" height="90px"></button><br>
      <button type="button" class="btn btn-warning" a href="#"><img src="asset/grabfood.png" height="100px"></button>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>


<!------------------------------------------------------------------>
<div class="card mb-3 mt-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4 mt-4">
      <img src="asset/sepeda4.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">SEPEDA CONTOH 2</h5>
        <p class="card-text">Sepeda Gravel Element FRC 38 ini dibekali dengan bahan frame alloy yang ringan dan tahan karat. Tersedia dalam 3 pilihan warna yaitu hitam, beige dan hijau. Menggunakan 9 x 2 pilihan kecepatan, dengan RD dari pabrikan Shimano dan Brifter dari pabrikan Sensah, untuk menghadapi berbagai medan tanjakan. Dilengkapi juga dengan sistem pengereman yang sudah cakram membuat gowes Anda</p>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Pesan Sekarang
</button>

<!-- Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Pesan Lewat apa nich</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body" hight>
      <button type="button" class="btn btn-warning" a href="#"><img src="asset/gofood.png" height="90px"></button><br>
      <button type="button" class="btn btn-warning" a href="#"><img src="asset/grabfood.png" height="100px"></button>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>


<!-------------------------------------------------------------------->
<div class="card mb-3 mt-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4 mt-4">
      <img src="asset/sepeda6.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">SEPEDA CONTOH 3</h5>
        <p class="card-text">Sepeda Gravel Element FRC 38 ini dibekali dengan bahan frame alloy yang ringan dan tahan karat. Tersedia dalam 3 pilihan warna yaitu hitam, beige dan hijau. Menggunakan 9 x 2 pilihan kecepatan, dengan RD dari pabrikan Shimano dan Brifter dari pabrikan Sensah, untuk menghadapi berbagai medan tanjakan. Dilengkapi juga dengan sistem pengereman yang sudah cakram membuat gowes Anda</p>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Pesan Sekarang
</button>

<!-- Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Pesan Lewat apa nich</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body" hight>
      <button type="button" class="btn btn-warning" a href="#"><img src="asset/gofood.png" height="90px"></button><br>
      <button type="button" class="btn btn-warning" a href="#"><img src="asset/grabfood.png" height="100px"></button>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>



<!------------------------------------------------------------------>
<div class="card mb-3 mt-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4 mt-4">
      <img src="asset/sepeda8.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">SEPEDA CONTOH 4</h5>
        <p class="card-text">Sepeda Gravel Element FRC 38 ini dibekali dengan bahan frame alloy yang ringan dan tahan karat. Tersedia dalam 3 pilihan warna yaitu hitam, beige dan hijau. Menggunakan 9 x 2 pilihan kecepatan, dengan RD dari pabrikan Shimano dan Brifter dari pabrikan Sensah, untuk menghadapi berbagai medan tanjakan. Dilengkapi juga dengan sistem pengereman yang sudah cakram membuat gowes Anda</p>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Pesan Sekarang
</button>

<!-- Modal-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Pesan Lewat apa nich</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body" hight>
      <button type="button" class="btn btn-warning" a href="#"><img src="asset/gofood.png" height="90px"></button><br>
      <button type="button" class="btn btn-warning" a href="#"><img src="asset/grabfood.png" height="100px"></button>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>



<!-------------------------------------------------------------------->
<div class="card mb-3 mt-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4 mt-4">
      <img src="asset/sepeda7.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">SEPEDA CONTOH 5</h5>
        <p class="card-text">Sepeda Gravel Element FRC 38 ini dibekali dengan bahan frame alloy yang ringan dan tahan karat. Tersedia dalam 3 pilihan warna yaitu hitam, beige dan hijau. Menggunakan 9 x 2 pilihan kecepatan, dengan RD dari pabrikan Shimano dan Brifter dari pabrikan Sensah, untuk menghadapi berbagai medan tanjakan. Dilengkapi juga dengan sistem pengereman yang sudah cakram membuat gowes Anda</p>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Pesan Sekarang
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Pesan Lewat apa nich</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body" hight>
      <button type="button" class="btn btn-warning" a href="#"><img src="asset/gofood.png" height="90px"></button><br>
      <button type="button" class="btn btn-warning" a href="#"><img src="asset/grabfood.png" height="100px"></button>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
      </div>
    </div>
  </div>
</div>




<!--------------------------------card-------------------------------------->
<div class="card mb-3 mt-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4 mt-4">
      <img src="asset/kunci.jpg" class="img-fluid rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">KUNCI CONTOH 1</h5>
        <p class="card-text">Sepeda Gravel Element FRC 38 ini dibekali dengan bahan frame alloy yang ringan dan tahan karat. Tersedia dalam 3 pilihan warna yaitu hitam, beige dan hijau. Menggunakan 9 x 2 pilihan kecepatan, dengan RD dari pabrikan Shimano dan Brifter dari pabrikan Sensah, untuk menghadapi berbagai medan tanjakan. Dilengkapi juga dengan sistem pengereman yang sudah cakram membuat gowes Anda</p>
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Pesan Sekarang
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Pesan Lewat apa nich</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <div class="modal-body" hight>
      <button type="button" class="btn btn-warning" a href="#"><img src="asset/gofood.png" height="90px"></button><br>
      <button type="button" class="btn btn-warning" a href="#"><img src="asset/grabfood.png" height="100px"></button>
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
        <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>

      </div>
    </div>
  </div>
</div>

</div>
</body>
</html>