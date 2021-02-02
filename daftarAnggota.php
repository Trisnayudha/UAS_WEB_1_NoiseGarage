<?php

require_once("config/koneksi.php");

if (isset($_POST['register'])) {

	// filter data yang diinputkan
	$name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
	$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
	$level = filter_input(INPUT_POST, 'level', FILTER_SANITIZE_STRING);
	$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
	$alamat = filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_STRING);
	$telepon = filter_input(INPUT_POST, 'telepon', FILTER_SANITIZE_STRING);

	// enkripsi password
	$password = password_hash($_POST["password"], PASSWORD_DEFAULT);


	// menyiapkan query
	$sql = "INSERT INTO tabel_pengguna (username, level, email, alamat, telepon, password) 
            VALUES (:username,:level, :email, :alamat, :telepon, :password)";
	$stmt = $db->prepare($sql);

	// bind parameter ke query
	$params = array(

		":username" => $username,
		":level" => $level,
		":email" => $email,
		":alamat" => $alamat,
		":telepon" => $telepon,
		":password" => $password,
	);

	// eksekusi query untuk menyimpan ke database
	$saved = $stmt->execute($params);


	// jika query simpan berhasil, maka user sudah terdaftar
	// maka alihkan ke halaman login
	if ($saved) header("Location: admin");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Register Pesbuk</title>

	<link rel="stylesheet" href="vendor/css/bootstrap.min.css" />
</head>

<body class="bg-light">

	<div class="container mt-5">
		<div class="row">
			<div class="col-md-6">

				<p>&larr; <a href="index.php">Home</a>

				<h4>Bergabunglah bersama ribuan orang lainnya...</h4>
				<p>Sudah punya akun? <a href="login.php">Login di sini</a></p>

				<form action="" method="POST">


					<div class="form-group">
						<label for="username">Username</label>
						<input class="form-control" type="text" name="username" placeholder="Username" />
					</div>

					<div class="form-group">
						<label for="level">Level</label>
						<input class="form-control" type="text" name="level" placeholder="level" />
					</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input class="form-control" type="email" name="email" placeholder="Alamat Email" />
					</div>

					<div class="form-group">
						<label for="alamat">alamat</label>
						<input class="form-control" type="text" name="alamat" placeholder="Alamat rumah" />
					</div>

					<div class="form-group">
						<label for="telepon">telpeon</label>
						<input class="form-control" type="text" name="telepon" placeholder="telepon rumah" />
					</div>

					<div class="form-group">
						<label for="password">Password</label>
						<input class="form-control" type="password" name="password" placeholder="Password" />
					</div>

					<input type="submit" class="btn btn-success btn-block" name="register" value="Daftar" />

				</form>

			</div>

			<div class="col-md-6">
				<img class="img img-responsive" src="img/connect.png" />
			</div>

		</div>
	</div>

</body>

</html>