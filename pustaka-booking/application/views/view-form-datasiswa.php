<html>
<head>
	<title>Form Input Data Siswa</title>
	<style>
		,error; (
			color: black; )
	</style>
</head>

<body> 
	<?php echo validation_errors(); ?>
	<center>
		<form action="<?= base_url('Datasiswa/cetak'); ?>"method="post">
			<table bgcolor="#D2B48C" width="300px">
				<tr>
					<th colspan="3">
						Form Input Data Siswa
					</th>
				</tr>
				<tr>
					<td colspan="3">
						<hr>
					</td>
				</tr>
				<tr>
					<th>NIS</th>
					<th>:</th>
					<td>
						<input type="text" name="nis" id="nis" placeholder="Input NIS dulu bestiee">
					</td>
				</tr>
				<tr>
					<th>Nama Siswa</th>
					<td>:</td>
					<td>
						<input type="text" name="nama" id="nama" placeholder="Isi dong bestiee">
					</td>
				</tr>
				<tr>
					<th>Kelas</th>
					<td>:</td>
					<td>
					 	<input type="text" name="kelas" id="kelas" placeholder="Isi dong bestiee">
					</td>
				</tr>
				<tr>
					<th>Jenis Kelamin</th>
					<td>:</td>
					<td>
						<input type="radio" name="jk" value="Laki-Laki">Laki-Laki 
						<input type="radio" name="jk" value="Perempuan">Perempuan
					</td>
				</tr>
				<tr>
					<th>Tempat Lahir</th>
					<td>:</td>
					<td>
						<input type="text" name="tl" id="tl" placeholder="Isi dong bestiee">
					</td>
				</tr>
				<tr>
					<th>Tanggal Lahir</th>
					<td>:</td>
					<td>
						<input type="text" name="tgl" id="tgl" placeholder="Isi dong bestiee">
					</td>
				</tr>
				<tr>
					<th>Alamat</th>
					<td>:</td>
					<td>
						<input type="text" name="alamat" id="alamat" placeholder="Isi dong bestiee">
					</td>
				</tr>
				<tr>
					<th>Agama</th>
					<td>:</td>
					<td>
						<select name="agama" id="agama">
							 <option value="">Pilih Agama</option>
							<option value="2">Islam</option>
							<option value="3">Kristen</option>
							<option value="4">Katolik</option>
							<option value="5">Budha</option>
							<option value="6">Hindu</option>
							<option value="7">Protestan</option>
							<option value="8">Khonghucu</option>
						 </select>
					</td>
				</tr>
				<tr>
					<td colspan="3" align="center">
						<input type="submit" value="submit">
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
</html>
