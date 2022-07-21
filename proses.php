<?php
	$Username    	= $_POST['Username'];
	$Alamat	    	= $_POST['Alamat'];
	$TTL			= $_POST['TTL'];
	$NoHandphone 	= $_POST["NoHandphone"];
	$Agama       	= $_POST['Agama'];
	$Jenis    		= $_POST['Jenis'];
	$Plat			= $_POST['Plat'];
	$Alasan 		= $_POST['Alasan'];


	echo "<head><title>Registrasi</head></title>";
	$fp = fopen("Registrasi.txt", "a+" );
	fputs($fp, "$Username|$Alamat|$TTL|$NoHandphone|$Agama|$Jenis|$Plat|$Alasan\n");
	fclose($fp);

	echo "Terimakasih Sudah Mengisi Format Registrasi<br>";
	echo "<a href=Registrasi.php>Registrasi Kembali </a><br>";
	echo "<a href=Data.php>Data Calon Angota</a><br>";
?>