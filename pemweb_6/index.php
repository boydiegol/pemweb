<?php include 'koneksi.php'; ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Data</title>
  </head>
  <body>
  	<div class="container">
  		<!-- Nav -->
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
  		<!-- Section -->
	    <h2 class="mt-3">Data Pribadi</h2>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Nomor</th>
					<th>Nama</th>
					<th>Jurusan</th>
					<th>Intro</th>
					<th>TTL</th>
					<th>Umur</th>
					<th>Alamat</th>
					<th>Kota</th>
					<th>Telepon</th>
					<th>Jenis Kelamin</th>
					<th>Agama</th>
					<th>Lainnya</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
				$nomor = 1;
				$ambil = mysqli_query($conn, "SELECT * FROM data_pribadi"); 
				while ($pecah = $ambil->fetch_assoc()) {
				?>
				<tr>
					<td><?php echo $nomor; ?></td>
					<td><?php echo $pecah['nama']; ?></td>
					<td><?php echo $pecah['jurusan']; ?></td>
					<td><?php echo $pecah['intro']; ?></td>
					<td><?php echo $pecah['ttl']; ?></td>
					<td><?php echo $pecah['umur']; ?></td>
					<td><?php echo $pecah['alamat']; ?></td>
					<td><?php echo $pecah['kota']; ?></td>
					<td><?php echo $pecah['telepon']; ?></td>
					<td><?php echo $pecah['jenis_kelamin']; ?></td>
					<td><?php echo $pecah['agama']; ?></td>
					<td><a class="badge badge-warning" href="riwayat.php?id=<?php echo $pecah['id_data_pribadi']; ?>">Riwayat</a>
						<a class="badge badge-info mt-3" href="matkul.php?id=<?php echo $pecah['id_data_pribadi']; ?>">Matkul</a>
						<a class="badge badge-secondary mt-3" href="home.php?id=<?php echo $pecah['id_data_pribadi']; ?>">Web</a>
					</td>
					<td>
						<a class="btn btn-warning" href="update.php?id=<?php echo $pecah['id_data_pribadi']; ?>">Update</a>
						<a class="btn btn-danger mt-3" href="delete.php?id=<?php echo $pecah['id_data_pribadi']; ?>">Delete</a>
					</td>
				</tr>
				<?php $nomor++; ?>
				<?php } ?>
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