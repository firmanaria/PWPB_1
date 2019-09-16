<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Blog Template · Bootstrap</title>

    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

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
      table{
        margin-top: 50px;
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

<div class="card card-light" style="background-color :#DCDCDC;">
  
  <div class="jumbotron p-4 p-md-5 text-white rounded bg-dark">
    <div class="col-md-6 px-0">
      <h1 class="display-4 font-italic">Hallo!!</h1>
      <p class="lead my-3">Selamat datang di web kami</p>
    </div>
  </div>
          <div class="card-body">
            
            <form action="form.php" method="post">
                <h2 class="display-7 text-center">DATA IDENTITAS PESERTA DIDIK BARU</h2>
                <h2 class="display-7 text-center">2019/2020</h2>
                <table>
                    <tr>
                        <td>Nama Lengkap</td>
                        <td>:</td>
                        <td><input type="text" name="nl"></td>
                    </tr>
                    <tr>
                        <td>Nama Panggilan</td>
                        <td>:</td>
                        <td><input type="text" name="np"></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td>
                            <input type="radio" name="radio" value="laki-laki">Laki-laki
                            <input type="radio" name="radio" value="perempuan">Perempuan
                        </td>
                    </tr>
                    <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td><select name="agm" size="1">
                          <option>islam</option>
                          <option>kristen</option>
                          <option>hindu</option>
                          <option>budha</option>
                          <option>konghucu</option>
                        </select></td>
                    </tr>
                    <tr>
                        <td>NISN</td>
                        <td>:</td>
                        <td><input type="text" name="nisn"></td>
                    </tr>
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td><input type="text" name="nik"></td>
                    </tr>
                    <tr>
                        <td>Tempat dan Tanggal Lahir</td>
                        <td>:</td>
                        <td><input type="text" name="tempat-lh" size="10">
                        </td>
                    </tr>
                    <tr>
                        <td>Asal Sekolah</td>
                        <td>:</td>
                        <td><input type="text" name="asal-sekolah"></td>
                    </tr>
                    <tr>
                        <td>Nomor SKHU</td>
                        <td>:</td>
                        <td><input type="text" name="skhu"></td>
                    </tr>
                    <tr>
                        <td>Tanggal diterima disekolah ini</td>
                        <td>:</td>
                        <td><input type="date" name="tds"></td>
                    </tr>
                    <tr>
                        <td>Alasan Pindah ke Sekolah ini</td>
                        <td>:</td>
                    </tr>
                    <tr>
                        <td><textarea name="als" cols="50" rows="3"></textarea></td>
                    </tr>
                    <tr>
                        <td>Alamat :</td>
                        <!-- <td></td> -->
                    </tr>
                    <tr>
                        <td><textarea name="almt" cols="50" rows="3"></textarea></td>
                    </tr>
                    <tr>
                        <td>Tinggal Bersama</td>
                        <td>:</td>
                        <td><input type="text" name="tb"></td>
                    </tr>
                    <tr>
                        <td>Transportasi ke Sekolah</td>
                        <td></td>
                        <td>
                            <input type="text" name="tsp">
                        </td>
                    </tr>
                    <tr>
                        <td>Nomor Telepon</td>
                        <td>:</td>
                        <td><input type="tel" name="telp"></td>
                    </tr>
                    <tr>
                        <td>No HP</td>
                        <td>:</td>
                        <td><input type="tel" name="hp"></td>
                    </tr>
                    <tr>
                        <td>Nomor Kartu Perlindungan Sosial (bagi yang memiliki)</td>
                        <td>:</td>
                        <td><input type="text" name="kps"></td>
                    </tr>
                    <tr>
                        <td><strong>Data Ayah Kandung</strong> :</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nm-a"></td>
                    </tr>
                    <tr>
                        <td>Tahun Lahir</td>
                        <td>:</td>
                        <td><input type="text" name="tl-a"></td>
                    </tr>
                    <tr>
                        <td>Pendidikan</td>
                        <td>:</td>
                        <td><input type="text" name="pd-a"></td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td><input type="text" name="pk-a"></td>
                    </tr>
                    <tr>
                        <td>Data Ibu Kandung :</td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nm-i"></td>
                    </tr>
                    <tr>
                        <td>Tahun Lahir</td>
                        <td>:</td>
                        <td><input type="text" name="tl-i"></td>
                    </tr>
                    <tr>
                        <td>Pendidikan</td>
                        <td>:</td>
                        <td><input type="text" name="pd-i"></td>
                    </tr>
                    <tr>
                        <td>Pekerjaan</td>
                        <td>:</td>
                        <td><input type="text" name="pk-i"></td>
                    </tr>
                </table>
                <div id="button">
                    <input class="btn btn-outline-success" type="submit" name="sbmt" value="Simpan">
                    <input class="btn btn-outline-success" type="reset" name="rst" value="Batal">
                </div>
            </form>
        </div>
    

  <footer class="blog-footer">
  <p>
    <center>Blog template built for <a href="https://getbootstrap.com/">Bootstrap</a> by <a href="https://twitter.com/mdo">@mdo</a>.</p>
    <a href="#">Back to top</a>
    </center> 
</p>
</footer>
          </div>
</div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
