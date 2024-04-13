<?php
session_start();

// Verifikasi reCAPTCHA
$recaptcha_secret_key = '6Ld6oLkpAAAAAGRFK2F8h0-GbpMbKGlHwozxnjCL'; // Ganti dengan kunci rahasia reCAPTCHA Anda
if (isset($_POST['submit'])) {
    $recaptcha_response = $_POST['g-recaptcha-response'];
    $response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$recaptcha_secret_key&response=$recaptcha_response");
    $response_keys = json_decode($response, true);
    if (intval($response_keys["success"]) !== 1) {
        $error = "Harap verifikasi CAPTCHA!";
    } else {
        // Proses autentikasi jika CAPTCHA terverifikasi
        $users = array(
            array("email" => "admin@gmail.com", "password" => "admin123", "user_type" => "admin", "name" => "Admin"),
            array("email" => "user@gmail.com", "password" => "user123", "user_type" => "user", "name" => "User"),
            array("email" => "superadmin@gmail.com", "password" => "superadmin123", "user_type" => "superadmin", "name" => "Super Admin")
        );
        $email = $_POST['email'];
        $password = $_POST['password'];
        foreach($users as $user){
            if($user['email'] == $email && $user['password'] == $password){
                // Autentikasi berhasil, atur sesi berdasarkan jenis pengguna dan redirect ke halaman yang sesuai
                $_SESSION['user_type'] = $user['user_type'];
                $_SESSION['name'] = $user['name'];
                switch($user['user_type']){
                    case 'admin':
                        header('location:admin.php');
                        exit();
                    case 'user':
                        header('location:user.php');
                        exit();
                    case 'superadmin':
                        header('location:superadmin.php');
                        exit();
                }
            }
        }
        // Autentikasi gagal, tampilkan pesan kesalahan
        $error = 'Email atau password Anda salah!';
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Login Form</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">
   <!-- reCAPTCHA script -->
   <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
   
<div class="form-container">
   <form action="" method="post">
      <h3>Login</h3>
      <?php
      if(isset($error)){
         echo '<span class="error-msg">'.$error.'</span>';
      }
      ?>
      <input type="email" name="email" required placeholder="Masukkan email">
      <input type="password" name="password" required placeholder="Masukkan password">
      <!-- Menampilkan reCAPTCHA -->
      <div class="g-recaptcha" data-sitekey="6Ld6oLkpAAAAAFQvzajBn2zjHZZo2Sul6pmhUb3l"></div> <!-- Ganti dengan kunci situs reCAPTCHA Anda -->
      <input type="submit" name="submit" value="Login Sekarang" class="form-btn">
   </form>
</div>

</body>
</html>
