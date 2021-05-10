<h1>DATA DAFTAR PENDAFTAR</h1> <!-- judul pada halaman web -->
<table border="1"> <!-- membuat kolom tabel -->
	<tr><th>NO</th><th>JENIS PENDAFTARAN</th><th>TANGGAL MASUK</th><th>NIS</th><th>NOMOR PESERTA UJIAN</th><th>PERNAH PAUD</th><th>PERNAH TK</th><th>NO SKHUN SEBELUMNYA (SD)</th><th>NO IJAZAH SEBELUMNYA (SD)</th><th>HOBI</th><th>CITA-CITA</th><th>NAMA LENGKAP</th><th>JENIS KELAMIN</th><th>NISN</th><th>NIK</th><th>TEMPAT LAHIR</th><th>TANGGAL LAHIR</th><th>AGAMA</th><th>BERKEBUTUHAN KHUSUS</th><th>ALAMAT JALAN</th><th>RT</th><th>RW</th><th>NAMA DUSUN</th><th>NAMA KELURAHAN/DESA</th><th>KECAMATAN</th><th>KODE POS</th><th>TEMPAT TINGGAL</th><th>MODA TRANSPORTASI</th><th>NOMOR HP</th><th>NOMOR TELEPON</th><th>E-MAIL PRIBADI</th><th>Penerima KPS/KKS/PKH/KIP</th><th>NO KPS/KKS/PKH/KIP</th><th>KEWARGANEGARAAN</th><th>NAMA NEGARA</th></tr>
	<?php  
	include 'konek.php'; //koneksi dengan file konek database
	$data_diri = mysqli_query($koneksi, "SELECT *from data_diri");//query untuk mengakses tabel pendaftaran di database
	$no=1;
	foreach ($data_diri as $row) { //perulangan untuk memmbaca nilai Array
		echo "<tr> 
			<td>$no</td>
			<td>".$row['jenis_pendaftaran']."</td>
			<td>".$row['tanggal_masuk_sekolah']."</td>
			<td>".$row['nis']."</td>
			<td>".$row['nomer_peserta_ujian']."</td>
			<td>".$row['pernah_paud']."</td>
			<td>".$row['pernah_tk']."</td>
			<td>".$row['skhun']."</td>
			<td>".$row['ijazah']."</td>
			<td>".$row['hobi']."</td>
			<td>".$row['citacita']."</td>
			<td>".$row['nama']."</td>
			<td>".$row['jenis_kelamin']."</td>
			<td>".$row['nisn']."</td>
			<td>".$row['nik']."</td>
			<td>".$row['tempat_lahir']."</td>
			<td>".$row['tanggal_lahir']."</td>
			<td>".$row['agama']."</td>
			<td>".$row['berkebutuhan_khusus']."</td>
			<td>".$row['alamat']."</td>
			<td>".$row['rt']."</td>
			<td>".$row['rw']."</td>
			<td>".$row['dusun']."</td>
			<td>".$row['desa']."</td>
			<td>".$row['kecamatan']."</td>
			<td>".$row['kode_pos']."</td>
			<td>".$row['tempat_tinggal']."</td>
			<td>".$row['transportasi']."</td>
			<td>".$row['hp']."</td>
			<td>".$row['telp']."</td>
			<td>".$row['email']."</td>
			<td>".$row['penerima_kps']."</td>
			<td>".$row['no_kps']."</td>
			<td>".$row['kewarganegaraan']."</td>
			<td>".$row['nama_negara']."</td>
		</tr>"; //membuat isi tabel 
		$no++;
	}
	?>
</table>
<br>
<form method="POST" action="excel.php">
		<button type="submit" name="lihat">Ekspor Data ke Excel</button>
</form>