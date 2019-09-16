!doctype html>
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
            <p class="lead" style="font-size : 50px;">Ini adalah biodata kamu!</p>
            <?php if(isset($_POST['sbmt'])):?>
            <div class="card bg-light">
                <div class="card-body">
                <blockquote class="blockquote">
                    <!-- PROSES PHP -->
                    Nama : <b><?php echo $_POST['nl']; ?></b><br>
                    Nama Panggilan : <b><?php echo $_POST['np']; ?></b><br>
                    <?php if(isset($_POST['radio'])): ?>
                        Anda adalah seorang :<b><?php echo $_POST['radio']; ?></b><br>
                    <?php endif; ?>
                    NISN Anda : <b><?php echo $_POST['nisn']; ?></b><br>
                    NIK Anda : <b><?php echo $_POST['nik']; ?></b><br>
                    Anda lahir di <b><?php echo $_POST['tempat-lh']; ?></b>, pada tanggal <b><?php echo $_POST['Tgl']; ?>-<?php echo $_POST['Bln']; ?>-<?php echo $_POST['Thn']; ?></b><br>
                    Asal sekolah : <b><?php echo $_POST['asal-sekolah'];?></b><br>
                    Nomor SKHU : <b><?php echo $_POST['skhu'];?></b><br>
                    <?php if(!empty($_POST['als'])):?>
                        Alasan pindah ke sekolah ini : <b><?php echo $_POST['als'];?></b>
                    <?php endif; ?>
                    Agama : <b><?php echo $_POST['agm'];?></b><br>
                    Alamat : <b><?php echo $_POST['almt'];?></b><br>
                    Tinggal Bersama : <b><?php echo $_POST['tb'];?></b><br>
                    Transportasi ke Sekolah : <b><?php echo $_POST['tsp']; ?></b><br>
                    No. Telepon : <b><?php echo $_POST['telp']; ?></b><br>
                    No. HP : <b><?php echo $_POST['hp']; ?></b><br>
                    <?php if(!empty($_POST['kps'])):?>
                        Nomor KPS : <b><?php echo $_POST['kps'];?></b>
                    <?php endif; ?>
                    <h5>Data Ayah Kandung</h5>
                    Nama : <b><?php echo $_POST['nm-a']; ?></b><br>
                    Tahun lahir : <b><?php echo $_POST['tl-a'];?></b><br>
                    Pendidikan : <b><?php echo $_POST['pd-a'];?></b><br>
                    Pekerjaan : <b><?php echo $_POST['pk-a'];?></b><br>
                    
                    <h5>Data Ibu Kandung</h5>
                    Nama : <b><?php echo $_POST['nm-i']; ?></b><br>
                    Tahun lahir : <b><?php echo $_POST['tl-i'];?></b><br>
                    Pendidikan : <b><?php echo $_POST['pd-i'];?></b><br>
                    Pekerjaan : <b><?php echo $_POST['pk-i'];?></b><br>
            <?php endif; ?>
                </blockquote>
                </div>
            </div>
        </div>
    </div>
    <!-- END OF CONTENT -->
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
