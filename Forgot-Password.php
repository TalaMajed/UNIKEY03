<?php
    session_start();

    include "./Connect.php";

    if (isset($_POST['Submit'])) {

        $email            = $_POST['email'];
        $otp_code         = $_POST['otp_code'];
        $password         = md5($_POST['password']);
        $confirm_password = md5($_POST['confirm_password']);

        if ($password != $confirm_password) {

            echo "<script language='JavaScript'>
            alert ('Passwords does not match !');
       </script>";

        } else {

            $query = mysqli_query($con, "SELECT * FROM students WHERE email ='$email' AND otp_code = '$otp_code'");

            if (mysqli_num_rows($query) > 0) {

                $row = mysqli_fetch_array($query);

                $student_id = $row['id'];

                $stmt = $con->prepare("UPDATE students SET password = ? WHERE id = ?");

                $stmt->bind_param("si", $password, $student_id);
                $stmt->execute();

                echo '<script language="JavaScript">
              document.location="./login.php";
              </script>';

            } else {

                echo '<script language="JavaScript">
          alert ("Error ... Account Does not exist !")
          </script>';
            }
        }

    }
?>


<!DOCTYPE html>
<html lang="en">
<!-- ocnabhqxscjnfxfn -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UniKey - Forgot Password</title>
    <!-- favicon -->
    <link rel="icon" type="image/png" href="favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="favicon/favicon.svg" />
    <link rel="shortcut icon" href="favicon/favicon.ico" />
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png" />
    <link rel="manifest" href="favicon/site.webmanifest" />
    <!-- css -->
    <link rel="stylesheet" href="css/login_signup.css">
    <link rel="stylesheet" href="css/framework.css">
    <link rel="stylesheet" href="css/all.min.css">
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body style="height: 800px;">
    <header class="new-header">
        <div class="header-container">
            <div class="logo-container">
                <a href="landing.html" class="logo-link">
                    <img src="imgs/logos/Unikey(large).jpg" alt="UniKey Logo" class="logo">
                    <span class="brand-name">UniKey</span>
                </a>
            </div>
            <div class="page-title">
                <h1>Forgot Password</h1>
                <div class="title-underline"></div>
            </div>
        </div>
    </header>

    <div class="main-content">
        <div class="sign">
            <h2 class="form-title">Forgot Password</h2>
            <form action="" method="post">

                <div class="form-group">
                    <label for="email">University Email</label>
                    <div class="input-wrapper">
                        <input type="email" id="email" placeholder="student@ju.edu.jo" name="email" required>
                        <i class="fa-solid fa-envelope input-icon"></i>
                    </div>
                </div>

                <div class="form-group">
                    <label for="otp_code">One Time OTP</label>
                    <div class="input-wrapper">
                        <input type="otp_code" id="otp_code" placeholder="student@ju.edu.jo" name="otp_code" required>
                        <i class="fa-solid fa-envelope input-icon"></i>
                    </div>
                </div>


                <div class="form-group">
                    <label for="password">Password</label>
                    <div class="input-wrapper">
                        <input type="password" id="password" placeholder="Enter your password" name="password" required>
                        <i class="fa-solid fa-lock input-icon"></i>
                        <i class="fa-solid fa-eye password-toggle" id="togglePassword"></i>
                    </div>
                </div>

                <div class="form-group">
                    <label for="confirm_password">Confirm Password</label>
                    <div class="input-wrapper">
                        <input type="confirm_password" id="confirm_password" placeholder="Enter your confirm_password" name="confirm_password" required>
                        <i class="fa-solid fa-lock input-icon"></i>
                        <i class="fa-solid fa-eye password-toggle" id="togglePassword"></i>
                    </div>
                </div>



                <div class="remember-me">
                    <input type="checkbox" class="ch" id="remember" name="remember">
                    <label for="remember">Remember me</label>
                </div>
                <input type="submit" value="Login" class="sub" name="insert">
            </form>
            <div class="links">
                <a href="./signup.php">Create an account</a> •
                <a href="pass.html">Forgot password?</a>
            </div>
        </div>
    </div>

    <script>
        // WARNING
        document.addEventListener('DOMContentLoaded', function () {
                const loginForm = document.querySelector('form[method="post"]');

                if (loginForm) {
                    loginForm.addEventListener('submit', function (e) {
                        e.preventDefault(); // Prevent actual form submission
                        window.location.href = 'dashboard.html'; // Change to your target page
                    });
                }
            });
        const togglePassword = document.querySelector('#togglePassword');
        const password = document.querySelector('#password');

        togglePassword.addEventListener('click', function () {
            const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
            password.setAttribute('type', type);
            this.classList.toggle('fa-eye-slash');
        });
    </script>
</body>

</html>
