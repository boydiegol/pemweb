<?php include 'koneksi.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
    	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		  <div class="collapse navbar-collapse" id="navbarSupportedContent">
		    <ul class="navbar-nav mr-auto">
		      <li class="nav-item active">
		        <a class="nav-link" href="index.php">Home<span class="sr-only">(current)</span></a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="tambahdata.php">Tambah Data</a>
		      </li>
		  </div>
		</nav>
		<?php 
		$ambil = mysqli_query($conn, "SELECT * FROM riwayat_pendidikan JOIN data_pribadi ON riwayat_pendidikan.id_data_pribadi = data_pribadi.id_data_pribadi WHERE riwayat_pendidikan.id_data_pribadi = '$_GET[id]'"); 
		$pecah = $ambil->fetch_assoc();
		?> 
    	<h2 class="mt-3">Riwayat Pendidikan "<span style="color: red"><?php echo $pecah['nama']; ?></span>"</h2>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Lulus SD</th>
					<th>Nama SD</th>
					<th>Kota SD</th>
					<th>Lulus SMP</th>
					<th>Nama SMP</th>
					<th>Kota SMP</th>
					<th>Lulus SMA</th>
					<th>Nama SMA</th>
					<th>Kota SMA</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo $pecah['lulus_sd']; ?></td>
					<td><?php echo $pecah['nama_sd']; ?></td>
					<td><?php echo $pecah['kota_sd']; ?></td>
					<td><?php echo $pecah['lulus_smp']; ?></td>
					<td><?php echo $pecah['nama_smp']; ?></td>
					<td><?php echo $pecah['kota_smp']; ?></td>
					<td><?php echo $pecah['lulus_sma']; ?></td>
					<td><?php echo $pecah['nama_sma']; ?></td>
					<td><?php echo $pecah['kota_sma']; ?></td>
				</tr>
			</tbody>
		</table>
    </div>	

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>