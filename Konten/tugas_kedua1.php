 <?php  
    $nama_satu = "kubus";
    $nama_dua = "tabung";
    $nama_tiga = "kerucut";
    $nama_empat ="prisma segitiga";
    $nama_lima ="balok";
    $nama_enam ="bola";

    $gif_limas = "../img/gif1.gif";
    $rumus_satu ="volume= SxSxSxS <br>";
    $rumuss_satu ="luas permukaan= 12xRusuk";

    $gif_tabung = "../img/tabung.gif";
    $rumus_dua ="volume=phixrxrxt";
    $rumuss_dua ="luas permukaan = (2xr2)+(2xr)";

    $gif_kerucut = "../img/kerucut.gif";
    $rumus_tiga ="volume= 1/3xnxr2xt";
    $rumuss_tiga ="luas permukaan = (nxr2)+(nxrxs)";

    $gif_prisma = "../img/prisma.gif";
    $rumus_empat ="volume=  ⅓ × luas alas × tinggi";
    $rumuss_empat ="luas permukaan = keliling alas segitiga X t + (2x luas alas segitiga";

    $gif_balok = "../img/balok.gif";
    $rumus_lima ="volume= panjang x lebar x tinggi";
    $rumuss_lima="luas permukaan= (2xpx1)+(2xpxt)";

    $gif_bola = "../img/bola.gif";
    $rumus_enam="volume= 4/3 x phi x r^2";
    $rumuss_enam="luas permukaannya= 4 x phi x r^2";
    $gambar=""

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
       #box2{
        border: solid 3px black;
        height: 240px;
        font-family: Segoe UI Light;
        font-size: 20px;
        border-radius: 30px;
        width: 900px;
        box-shadow: -10px 10px 40px gray;
        padding: 30px;
      }
       img{
        float: left;
        width: 200px;
        height: 200px;
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
          <a class="btn btn-sm btn-outline-secondary" href="tugas_pertama1.php">Tugas Pertama</a>
      <a class="btn btn-sm btn-outline-secondary" href="tugas_kedua1.php">Tugas Kedua</a>
      <a class="btn btn-sm btn-outline-secondary" href="tugas_ketiga1.php">Tugas Ketiga</a>
      <a class="btn btn-sm btn-outline-secondary" href="#">Tugas Keempat</a>
    </nav>
  </div>

  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Hallo!!</h1>
      <p class="lead my-3">Selamat datang di web kami</p>
    </div>
  </div>
    <center>

        <!--- rumus 1-->
        <br>
        <br>
        <center>
        <div class="row mb-2">
      <div class="col-md-6">
          <div id="box2">
             <img src="<?= $gif_limas?>" width="200px" height="200px">
          <b><?php echo $nama_satu?></b>
          <br>
          <br>
          <b><?php echo $rumus_satu ?></b>
          <b><?php echo $rumuss_satu ?></b>
        </p>

        </div>
      </div>
    </div>
       <!--- rumus selesai -->
<br>  
<br>  
    <!--- rumus -->
    <div class="row mb-2">
      <div class="col-md-6">
           <div id="box2">
             <img src="<?= $gif_tabung?>"  width="200px" height="200px">
          <b><?php echo $nama_dua ?></b>
          <br>
          <br>
          <b><?php echo $rumus_dua ?></b>
          <br>
          <b><?php echo $rumuss_dua ?></b>
          </p>
        </div>
  </div>
</div>
       <!--- rumus -->
<br>
<br>
    <!--- rumus -->
    <center>
       <div class="row mb-2">
      <div class="col-md-6">
           <div id="box2">
             <img src="<?= $gif_kerucut?>"  width="200px" height="200px">
          <b><?php echo $nama_tiga ?></b>
          <br>
          <br>
          <b><?php echo $rumus_tiga ?></b>
          <br>
          <b><?php echo $rumuss_tiga ?></b>
          </p>
        </div>
      </div>
</div>
</center>
       <!--- rumus selesai -->
<br>
<br>
    <!--- rumus -->
    <div class="row mb-2">
      <div class="col-md-6">
           <div id="box2">
             <img src="<?= $gif_prisma?>"  width="200px" height="200px">
          <b><?php echo $nama_empat ?></b>
          <br>
          <br>
          <b><?php echo $rumus_empat ?></b>
          <br>
          <b><?php echo $rumuss_empat ?></b>
            </p>
        </div>
      </div>
</div>
       <!--- rumus selesai -->
<br>
<br>
    <!--- rumus -->
    <div class="row mb-2">
      <div class="col-md-6">
           <div id="box2">
             <img src="<?= $gif_balok?>"  width="200px" height="200px">
          <b><?php echo $nama_lima ?></b>
          <br>
          <br>
          <b><?php echo $rumus_lima ?></b>
          <br>
          <b><?php echo $rumuss_lima ?></b>
        </p>
        </div>
      </div>
</div>
       <!--- rumus selesai -->
<br>
<br>  
    <!--- rumus -->
    <div class="row mb-2">
      <div class="col-md-6">
           <div id="box2">
             <img src="<?= $gif_bola?>" width="200px" height="200px">
          <b><?php echo $nama_enam ?></b>
         <br>
         <br>
         <b><?php echo $rumus_enam ?></b>
          <br>
          <b><?php echo $rumuss_enam ?></b>
         </p>
        </div>
        </div>
      </center>
<br>
<br>
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
