<?php include 'koneksi.php'; ?>
<h2>Data Pribadi</h2>
<table border="2" cellspacing="0" cellpadding="10">
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
			<th>Riwayat Pendidikan</th>
			<th>Mata Kuliah</th>
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
			<td><button style="background-color: aqua; color: white;"><a href="riwayat.php?id=<?php echo $pecah['id_data_pribadi']; ?>">Riwayat</a></button></td>
			<td><button style="background-color: yellow;"><a href="matkul.php?id=<?php echo $pecah['id_data_pribadi']; ?>">Matkul</a></button></td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>
<br>
<button><a href="tambahdata.php">Tambah Data</a></button>