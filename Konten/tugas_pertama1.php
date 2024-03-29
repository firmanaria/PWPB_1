<?php
                $Nama_pertama= "Firman Arya";
                $Umur_pertama= 16;
                $Tinggi_badan_pertama= 180;
                $Hobi_pertama="Mendengarkan musik";

                $Nama_kedua= "Siti Aisyah";
                $Umur_kedua= 16;
                $Tinggi_badan_kedua= 170;
                $Hobi_kedua="Bernyanyi";

                $Nama_ketiga= "Firda Pebriyanti Putri";
                $Umur_ketiga= 16;
                $Tinggi_badan_ketiga= 157;
                $Hobi_ketiga="Membaca";

                $rata_rata= ($Tinggi_badan_pertama + $Tinggi_badan_kedua + $Tinggi_badan_ketiga) / 3;
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Blog Template · Bootstrap</title>

    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
   <!-- <link href="blog.css" rel="stylesheet">-->

        <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
      
    </style>
  </head>
  <body>
    <div class="container">
  <header class="blog-header py-3">
    <div class="row flex-nowrap justify-content-between align-items-center">
      <div class="col-4 pt-1">
        <a class="text-muted" href="#">Tugas PWPB</a>
      </div>
      <div class="col-4 text-center">
        <a class="blog-header-logo text-dark" href="../index.php">Home</a>
      </div>
      <div class="col-4 d-flex justify-content-end align-items-center">
        <a class="text-muted" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24" focusable="false"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
        </a>
        <a class="btn btn-sm btn-outline-secondary" href="#">Sign up</a>
      </div>
    </div>
  </header>

  <div class="nav-scroller py-1 mb-2">
    <nav class="nav d-flex justify-content-between">
       <a class="p-2 text-muted" href="tugas_pertama1.php">Tugas Pertama</a>
      <a class="p-2 text-muted" href="tugas_kedua1.php">Tugas Kedua</a>
      <a class="p-2 text-muted" href="tugas_ketiga1.php">Tugas Ketiga</a>
      <a class="p-2 text-muted" href="#">Tugas Keempat</a>
    </nav>
  </div>

  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Hallo!!</h1>
      <p class="lead my-3">Selamat datang di web kami</p>
    </div>
  </div>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-primary">Anggota Pertama</strong>
          <ul class="list-unstyled mt-3 mb-4">
                <li>Nama Lengkap : <?php echo $Nama_pertama ?></li>
                <li>umur : <?php echo $Umur_pertama ?></li>
                <li>Tinggi badan : <?php echo $Tinggi_badan_pertama ?>cm</li>
                <li>Hobi : <?php echo $Hobi_pertama ?></li>
              </ul>
        </div>
        <div class="img">
        <img src="../img/arya.jpg" width="230px" >
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Anggota Kedua</strong>
          <ul class="list-unstyled mt-3 mb-4">
                <li>Nama Lengkap : <?php echo $Nama_kedua ?></li>
                <li>Umur: <?php echo $Umur_kedua?></li>
                <li>Tinggi badan : <?php echo $Tinggi_badan_kedua ?>cm</li>
                <li>Hobi : <?php echo $Hobi_kedua ?></li>
              </ul>
        </div>
        <div class="col-auto d-none d-lg-block">
           <div class="img">
        <img src="../img/aisyah.jpg" width="180px">
        </div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" >
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">Anggota Ketiga</strong>
          <ul class="list-unstyled mt-3 mb-4">
                <li>Nama Lengkap : <?php echo $Nama_ketiga ?></li>
                <li>Umur: <?php echo $Umur_ketiga?></li>
                <li>Tinggi badan : <?php echo $Tinggi_badan_ketiga ?>cm</li>
                <li>Hobi : <?php echo $Hobi_ketiga ?></li>
              </ul>
        </div>
        <div class="col-auto d-none d-lg-block">
          <div class="img">
        <img src="../img/putri.jpg" width="250px">
        </div>
        </div>
      </div>
    </div>
  </div>
</div>

<main role="main" class="container">
  <div class="row">
    <div class="col-md-8 blog-main">
      <h3 class="pb-4 mb-4 font-italic border-bottom">
        <ul class="list-unstyled mt-3 mb-4">
        <li>Rata-rata tinggi kami adalah <?php echo $rata_rata ?>cm</li>
      </h3>

  </div><!-- /.row -->

</main><!-- /.container -->

<footer class="blog-footer">
  <p>
    <center>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
    <a href="#">Back to top</a>
    </center> 
</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
