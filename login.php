<?php

require_once("config/koneksi.php");

if (isset($_POST['login'])) {

    $username = $_POST['username']; // isi varibel dengan mengambil data username pada form
    $password = $_POST['password'];

    $sql = "SELECT * FROM tabel_pengguna WHERE username=:username AND password=:password";
    $stmt = $db->prepare($sql);

    // bind parameter ke query
    $params = array(
        ":username" => $username,
        ":password" => $password
    );

    $stmt->execute($params);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    // jika user terdaftar
    if ($user) {
        // verifikasi password
        if ($user['level'] == "0") {
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            
            // login sukses, alihkan ke halaman timeline
            header("Location: admin");
        } else if ($user['level'] == 1) {
            // buat Session
            session_start();
            $_SESSION["user"] = $user;
            

            // login sukses, alihkan ke halaman timeline
            header("Location: user");
        } else {
            echo "anda kurang beruntung";
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
                        <img src="assets/images/signin-image.jpg">

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
                        <a href="registrasi.php" class="signup-image-link">Buat Akun</a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <link rel="stylesheet" href="assets/fonts/material-icon/css/material-design-iconic-font.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- JS -->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>