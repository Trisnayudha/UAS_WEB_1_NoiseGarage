<?php

require_once("config/koneksi.php");

if (isset($_POST['login'])) {

    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM tabel_pengguna WHERE username=:username OR email=:email";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":email" => $username
    );

    $stmt->execute($params);



    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    // jika user terdaftar
    if ($user) {
        // verifikasi password
        if ($password && $user["password"]) {
            // buat Session
            session_start();
            $_SESSION["user"] = $user;

            // login sukses, alihkan ke halaman timeline
            header("Location: admin");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login</title>
</head>

<body>
    <div class="main">
        <!-- Sing in  Form -->
        <section class="">
            <div class="container">
                <div class="signin-content">
                    <div class="signin-image">
                        <img src="vendor/img/signin-image.jpg">

                    </div>
                    <div class="signin-form">
                        <h2 class="form-title">Sign in</h2>
                        <form method="POST" class="login-form" id="login-form">
                            <div class="form-group">
                                <label for="your_name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="username" id="your_name" placeholder="Username" />
                            </div>
                            <div class="form-group">
                                <label for="your_pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="your_pass" placeholder="Password" />
                            </div>
                            <!-- <div class="form-group">
                                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" />
                                <label for="remember-me" class="label-agree-term"><span><span></span></span>Remember me</label>
                            </div> -->
                            <div class="form-group form-button">
                                <input type="submit" name="login" class="form-submit" value="Masuk" />
                            </div>
                        </form>
                        <br>
                        <a href="daftarAnggota.php" class="signup-image-link">Buat Akun</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <link rel="stylesheet" href="vendor/fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="vendor/css/style1.css">
    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>