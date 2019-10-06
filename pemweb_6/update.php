<?php  
include 'koneksi.php';
$id = $_GET['id'];
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Update Data</title>
  </head>
  <body>
    <div class="container">
      <?php 
      $ambil = mysqli_query($conn, "SELECT * FROM data_pribadi WHERE id_data_pribadi=$id");
      $pecah = $ambil->fetch_array();
      ?>
      <div class="form">
          <form method="post">
            <h2>Data Pribadi</h2>   
            <label>Nama Lengkap</label>
            <input type="text" name="nama" class="form-control" value="<?php echo $pecah['nama'] ?>">

            <br><label>Jurusan</label>
            <input type="text" name="jurusan" class="form-control" value="<?php echo $pecah['jurusan'] ?>">

            <br><label>Pengenalan / Intro</label>
            <input type="text" name="intro" class="form-control" value="<?php echo $pecah['intro'] ?>">

            <br><label>TTL</label>
            <input type="text" name="ttl" class="form-control" value="<?php echo $pecah['ttl'] ?>">

            <br><label>Umur</label>
            <input type="text" name="umur" class="form-control" value="<?php echo $pecah['umur'] ?>">

            <br><label>Alamat</label>
            <input type="text" name="alamat" class="form-control" value="<?php echo $pecah['alamat'] ?>">

            <br><label>Kota</label>
            <input type="text" name="kota" class="form-control" value="<?php echo $pecah['kota'] ?>">

            <br><label>Telepon</label>
            <input type="text" name="telepon" class="form-control" value="<?php echo $pecah['telepon'] ?>">

            <br><label>Jenis Kelamin</label>
            <input type="text" name="jk" class="form-control" value="<?php echo $pecah['jenis_kelamin'] ?>">

            <br><label>Agama</label>
            <input type="text" name="agama" class="form-control" value="<?php echo $pecah['agama'] ?>">
          
            <?php  
            $ambil = mysqli_query($conn, "SELECT * FROM riwayat_pendidikan WHERE id_data_pribadi=$id");
            $pecah = $ambil->fetch_array();
            ?>
            <br><h2>Riwayat Pendidikan</h2>
            <h4>SD</h4>
            <label>Tahun Lulus</label>
            <input type="text" name="tanggal_lulus_sd" class="form-control" value="<?php echo $pecah['lulus_sd'] ?>">

            <br><label>Nama Institusi</label>
            <input type="text" name="nama_sd" class="form-control" value="<?php echo $pecah['nama_sd'] ?>">

            <br><label>Kota Institusi</label>
            <input type="text" name="kota_sd" class="form-control" value="<?php echo $pecah['kota_sd'] ?>">

            <br><h4>SMP</h4>
            <label>Tahun Lulus</label>
            <input type="text" name="tanggal_lulus_smp" class="form-control" value="<?php echo $pecah['lulus_smp'] ?>">

            <br><label>Nama Institusi</label>
            <input type="text" name="nama_smp" class="form-control" value="<?php echo $pecah['nama_smp'] ?>">

            <br><label>Kota Institusi</label>
            <input type="text" name="kota_smp" class="form-control" value="<?php echo $pecah['kota_smp'] ?>">

            <br><h4>SMA</h4>
            <label>Tahun Lulus</label>
            <input type="text" name="tanggal_lulus_sma" class="form-control" value="<?php echo $pecah['lulus_sma'] ?>">

            <br><label>Nama Institusi</label>
            <input type="text" name="nama_sma" class="form-control" value="<?php echo $pecah['nama_sma'] ?>">

            <br><label>Kota Institusi</label>
            <input type="text" name="kota_sma" class="form-control" value="<?php echo $pecah['kota_sma'] ?>">

            <?php  
            $ambil = mysqli_query($conn, "SELECT * FROM matkul1 WHERE id_data_pribadi=$id");
            $pecah = $ambil->fetch_array();
            ?>
            <br><h2>Matkul Semester 1</h2>
            <label>Matkul 1</label>
            <input type="text" name="matkul1" class="form-control" value="<?php echo $pecah['nama1_matkul1'] ?>">

            <br><label>Matkul 2</label>
            <input type="text" name="matkul2" class="form-control" value="<?php echo $pecah['nama2_matkul1'] ?>">

            <br><label>Matkul 3</label>
            <input type="text" name="matkul3" class="form-control" value="<?php echo $pecah['nama3_matkul1'] ?>">

            <br><label>Matkul 4</label>
            <input type="text" name="matkul4" class="form-control" value="<?php echo $pecah['nama4_matkul1'] ?>">

            <br><label>Matkul 5</label>
            <input type="text" name="matkul5"class="form-control" value="<?php echo $pecah['nama5_matkul1'] ?>">

            <br><label>Matkul 6</label>
            <input type="text" name="matkul6" class="form-control" value="<?php echo $pecah['nama6_matkul1'] ?>">

            <p style="color: red">*Wajib Diisi Semua</p>
            <button class="btn btn-primary" name="submit">Update</button>
          </form>
          <?php  
          if (isset($_POST['submit'])) {
            $nama = $_POST['nama'];
            $jurusan = $_POST['jurusan'];
            $intro = $_POST['intro'];
            $ttl = $_POST['ttl'];
            $umur = $_POST['umur'];
            $alamat = $_POST['alamat'];
            $kota = $_POST['kota'];
            $telepon = $_POST['telepon'];
            $jk = $_POST['jk'];
            $agama = $_POST['agama'];

            $lulus_sd = $_POST['tanggal_lulus_sd'];
            $nama_sd = $_POST['nama_sd'];
            $kota_sd = $_POST['kota_sd'];
            $lulus_smp = $_POST['tanggal_lulus_smp'];
            $nama_smp = $_POST['nama_smp'];
            $kota_smp = $_POST['kota_smp'];
            $lulus_sma = $_POST['tanggal_lulus_sma'];
            $nama_sma = $_POST['nama_sma'];
            $kota_sma = $_POST['kota_sma'];

            $matkul1 = $_POST['matkul1'];
            $matkul2 = $_POST['matkul2'];
            $matkul3 = $_POST['matkul3'];
            $matkul4 = $_POST['matkul4'];
            $matkul5 = $_POST['matkul5'];
            $matkul6 = $_POST['matkul6'];

            mysqli_query($conn, "UPDATE data_pribadi SET nama='$nama',jurusan='$jurusan',intro='$intro',ttl='$ttl',umur='$umur',alamat='$alamat',kota='$kota',telepon='$telepon',jenis_kelamin='$jk',agama='$agama' WHERE id_data_pribadi=$id");

            mysqli_query($conn, "UPDATE riwayat_pendidikan SET lulus_sd='$lulus_sd',nama_sd='$nama_sd',kota_sd='$kota_sd',lulus_smp='$lulus_smp',nama_smp='$nama_smp',kota_smp='$kota_smp',lulus_sma='$lulus_sma',nama_sma='$nama_sma',kota_sma='$kota_sma' WHERE id_data_pribadi=$id");

            mysqli_query($conn, "UPDATE matkul1 SET nama1_matkul1='$matkul1',nama2_matkul1='$matkul2',nama3_matkul1='$matkul3',nama4_matkul1='$matkul4',nama5_matkul1='$matkul5',nama6_matkul1='$matkul6' WHERE id_data_pribadi=$id");
            
            echo "<div class='alert alert-success'>Data Sudah Di Update</div>";
            echo "<meta http-equiv='refresh' content='1;url=index.php'>";
          }
          ?>
        </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>