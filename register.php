<?php if(isset($_GET["error"])) { ?>
            <div class="alert alert-danger" role="alert">
              Data Tidak Boleh Kosong !
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>

<?php } ?>


<!DOCTYPE html>
<html>
<head>
    <!-- CSS only -->
<link rel="stylesheet" type="text/css" href="style.css">
    
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <title>BeeStore Register</title>
</head>
<body>

<!--navbar2-->
<nav class="navbar navbar-dark navbar-expand-lg bg-dark text-light sticky-top">
    <div class="container-fluid">
    <a class="navbar-brand text-light" href="index.php">BeeStore</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  </div>
</nav>

    <!--kotak regis-->
    <div class="container d-flex justify-content-center mt-4">
        <form action="config.php" method="POST">
            <p style="font-size: 2rem; font-weight: 800;">New Member Registrasi Dulu</p>
            <div>
                <input class="form-control form-control-sm" type="text" placeholder="Username" aria-label=".form-control-sm" name="username" required>
            </div>
            <div class="mt-3">
                <input class="form-control form-control-sm" type="text" placeholder="Email" aria-label=".form-control-sm" name="email" required>
            <div class="mt-3">
                <input class="form-control form-control-sm" type="password" placeholder="Password" aria-label=".form-control-sm" name="password">
            </div>
            <div class="mt-3">
               <input class="form-control form-control-sm" type="text" placeholder="NIK" aria-label=".form-control-sm" name="nik">
            </div>
            <div class="mt-3">
               <input class="form-control form-control-sm" type="text" placeholder="Nama Anda" aria-label=".form-control-sm" name="nm_member" >
            </div>
            <div class="mt-3">
               <input class="form-control form-control-sm" type="text" placeholder="No Hp" aria-label=".form-control-sm" name="nohp" >
            </div>
            <div class="mt-3">
               <input class="form-control form-control-sm" type="text" placeholder="Kota Anda" aria-label=".form-control-sm" name="kota" >
            </div>
            <div class="mt-3">
               <input class="form-control form-control-sm" type="text" placeholder="Provinsi Anda " aria-label=".form-control-sm" name="provinsi" >
            </div>
            <div class="mt-3">
               <input class="form-control form-control-sm" type="text" placeholder="Warga Negara " aria-label=".form-control-sm" name="wn" >
            </div>

            <div class="mt-3 d-grid gap-2">
                <button type="lanjut" class="btn btn-primary btn-lg">Register</button>
            </div>
            <p class="text-center">Anda sudah punya akun? <a href="index.php">Login </a></p>
        </form>
    </div>
    
</body>
</html>