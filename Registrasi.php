<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registrasi Form Pecinta Mobil Lamborghini</title>
	<link rel="stylesheet" type="text/css" href="Registrasi.css">
	<form name="form1" method="post" action="proses.php" action="lihat.php">
</head>
<body>
	<div class="login-box">
		<img src="https://dosensosiologi.com/wp-content/uploads/2018/04/contoh-komunitas.png" class="avatar"/>
		<h1>Registrasi Here</h1>
		<form>
			<p>Nama</p>
			<input type="text" name="Username" id="Username" placeholder="Masukkan Username">
			<p>Alamat</p>
			<input type="text" name="Alamat" id="Alamat"placeholder="Masukkan Alamat">
			<p>Tempat & Tanggal Lahir</p>
			<input type="text" name="TTL" id="TTL"placeholder="Masukkan TTL">
			<p>No HP</p>
			<input type="text" name="NoHandphone" id="NoHandphone"placeholder="Masukkan Nomor">
			<p>Agama</p><br>
				<td><select name="Agama" id="Agama">
					<option></option>
					<option>Islam</option>
					<option>Kristen Katolik</option>
					<option>Kristen Protestan</option>
					<option>Hindu</option>
					<option>Buddha</option>
					<option>Khonghucu</option>
				</select>
				</td>
			<p>Jenis Kendaraan</p><br>
				<td><select name="Jenis" id="Jenis">
					<option></option>
					<option>Veneno Roadster</option>
					<option>Egoista</option>
					<option>Gallardo Nera</option>
					<option>Reventon</option>
					<option>Urus</option>
					<option>Huracan Coupe</option>
					<option>Huracan Spyder</option>
					<option>Aventador S Coupe</option>
					<option>Aventador S Roadster</option>
					<option>Centenario</option>
					<option>Estoque Concept Car</option>
					<option>Asterion</option>
				</select>
				</td>
				<br><br>
			<p>No Polisi</p>
			<input type="text" name="Plat" id="Plat"placeholder="Masukkan Plat">
			<p>Alasan Mengikuti Komunitas</p>
			<input type="text" name="Alasan" id="Alasan"placeholder="Masukkan Alasan">
			<input type="submit" name="submit" value="Register">
		</form>

	</form>
	</div>

</body>
</html>