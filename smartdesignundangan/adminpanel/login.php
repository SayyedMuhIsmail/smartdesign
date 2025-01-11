<?php
session_start();
include ('../smartdesignundangan/adminpanel/login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login Admin</title>
    <link rel="stylesheet" href="../asset/css/admin.css" />
    <script src="https://unpkg.com/feather-icons"></script>
    <!-- Favicon -->
    <link rel="icon" href="../asset/logosm.png" type="image/x-icon" />
</head>

<body>
    <div class="background">
        <div class="form-box">
            <h2>Login Admin</h2>
            <form id="loginForm" method="POST" action="dasboard.html">
                <div class="inputbox">
                    <input type="text" id="username" required />
                    <label>Username</label>
                </div>
                <div class="inputbox password-box">
                    <input id="password" type="password" required />
                    <label>Kata Sandi</label>
                    <i id="togglePassword" class="icon-eye" data-feather="eye"></i>
                </div>
                <button type="submit">Login</button>
            </form>
            <!-- <div class="login-link">
                <p>
                    Login Khusus Admin, kembali ke <a href="userlogin.html">User</a>
                </p>
            </div> -->
            <div class="disubmit"><?php
               if (isset($_POST['submit'])) {
                $username = htmlspecialchars($_POST['username']);
                $password = htmlspecialchars($_POST['password']);

                $query = mysqli_query($con, "SELECT * FROM users WHERE username='$username'");
                $countdata = mysqli_num_rows($query);
                $data = mysqli_fetch_array($query);

                if ($countdata > 0) {
                if (password_verify($password, $data['password'])) {
                $_SESSION['username'] = $data['username'];
                $_SESSION['login'] = true;
                  header('location: ../adminpanel');} 
                   else {
                   ?>
                    <div class="alert alert-warning" role="alert">
                    <u>Password salah, coba lagi ya <i class="smile" data-feather="smile"></i></u>
                    </div>
                   <?php }
                   } 
                   else {
                   ?>
                   <div class="alert alert-warning" role="alert">
                   <u>Username tidak di temukan, coba lagi ya <i class="smile" data-feather="smile"></i></u>
                   </div> <?php

                  }
                   }
                ?>
            </div>
        </div>
    </div>
</body>

</html>