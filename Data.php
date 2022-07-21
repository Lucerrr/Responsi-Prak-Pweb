<?php
	echo "<head><title>Data Calon Anggota Komunitas</title></head>";
	$fp = fopen("Registrasi.txt","r");
	echo "<table border =0>";

	while ($isi = fgets($fp,200))
    {
		$pisah = explode("|",$isi);
		echo "<tr><td>Username</td><td>: $pisah[0]|</td></tr>";
		echo "<tr><td>Alamat</td><td>: $pisah[1]|</td></tr>";
		echo "<tr><td>TTL</td><td>: $pisah[2]|</td></tr>";
		echo "<tr><td>NoHandphone</td><td>: $pisah[3]|</td></tr>";
		echo "<tr><td>Agama</td><td>: $pisah[4]|</td></tr>";
		echo "<tr><td>Jenis</td><td>: $pisah[5]|</td></tr>";
        echo "<tr><td>Plat</td><td>: $pisah[6]|</td></tr>";
        echo "<tr><td>Alasan</td><td>: $pisah[7]|</td></tr>
        <tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>";
	}

	echo "</table>";
    echo "<a href=Registrasi.php> Klik Disini </a>Kembali ke Menu Registrasi"
?>