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
		$ambil = mysqli_query($conn, "SELECT * FROM data_pribadi JOIN matkul1 ON data_pribadi.id_data_pribadi = matkul1.id_data_pribadi WHERE data_pribadi.id_data_pribadi = '$_GET[id]'"); 
		$pecah = $ambil->fetch_assoc();
		?> 
    	<h2 class="mt-3">Mata Kuliah Semester 1 "<span style="color: red"><?php echo $pecah['nama']; ?></span>"</h2>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>Matkul 1</th>
					<th>Matkul 2</th>
					<th>Matkul 3</th>
					<th>Matkul 4</th>
					<th>Matkul 5</th>
					<th>Matkul 6</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo $pecah['nama1_matkul1']; ?></td>
					<td><?php echo $pecah['nama2_matkul1']; ?></td>
					<td><?php echo $pecah['nama3_matkul1']; ?></td>
					<td><?php echo $pecah['nama4_matkul1']; ?></td>
					<td><?php echo $pecah['nama5_matkul1']; ?></td>
					<td><?php echo $pecah['nama6_matkul1']; ?></td>
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