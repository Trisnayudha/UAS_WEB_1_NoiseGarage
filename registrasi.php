<?php

require_once("config/koneksi.php");

if (isset($_POST['register'])) {

    // filter data yang diinputkan
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $alamat = filter_input(INPUT_POST, 'alamat', FILTER_SANITIZE_STRING);
    $telepon = filter_input(INPUT_POST, 'telepon', FILTER_SANITIZE_STRING);

    // enkripsi password
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);


    // menyiapkan query
    $sql = "INSERT INTO tabel_pengguna (username, email, alamat, telepon, password) 
            VALUES (:username, :email, :alamat, :telepon, :password)";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(

        ":username" => $username,
        ":email" => $email,
        ":alamat" => $alamat,
        ":telepon" => $telepon,
        ":password" => $password,
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);


    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if ($saved) header("Location: login.php");
}

?>\

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Sign Up Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="assets/fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>

    <div class="main">
        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        <form method="POST" class="register-form" id="register-form" action="">
                            <div class="form-group">
                                <label for="username"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="username" placeholder="Username" required />
                            </div>

                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Email@gmail.com" required />
                            </div>

                            <div class="form-group">
                                <label for="alamat"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="alamat" id="alamat" placeholder="Alamat" required />
                            </div>

                            <div class="form-group">
                                <label for="telepon"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="telepon" id="telepon" placeholder="telepon" required />
                            </div>

                            <div class="form-group">
                                <label for="password"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="password" id="password" placeholder="Password" required />
                            </div>
                            <div class="form-group form-button">
                                <input type="submit" name="register" id="register" class="form-submit" value="Daftar" />
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="assets/images/signup-image.jpg" alt="sing up image"></figure>
                        <a href="login.php" class="signup-image-link">Saya sudah punya akun</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>