<?php
	$username = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$nik = $_POST['nik'];
	$nm_member = $_POST['nm_member'];
	$gender = $_POST['gender'];
	$umur = $_POST['umur'];
	$nohp = $_POST['nohp']; 
	$kota = $_POST['kota'];
	$provinsi = $_POST['provinsi'];
	$wn = $_POST['wn'];



	// Database connection
	$conn = new mysqli('localhost','root','','beestore');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else{
		$stmt = $conn->prepare("insert into register(username, email, password, nik, nm_member, gender, umur, nohp, kota, provinsi, wn) values('$username', '$email', '$password', '$nik', '$nm_member', '$gender', '$umur', '$nohp', '$kota', '$provinsi', '$wn')");
		//$stmt->bind_param($username, $email, $password, $nik, $nm_member, $nohp, $kota, $provinsi, $wn);
		$execval = $stmt->execute();
		echo $execval;
		echo "<script>alert('Selamat, registrasi berhasil!')</script>";
		$stmt->close();
		$conn->close();

		//try insert if lalu else{ echo "all field are required";
		//die();}
	}
?>

<!--berhasil regis-->
<!DOCTYPE html>
<html>
<head>
	<title>regis-member</title>
</head>
<body>
            <a href="index.php"><button type="button" class="btn btn-outline-primary btn-lg">LANJUT</button></a>
</body>
</html>