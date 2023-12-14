<?php
    require_once("connection.php");

    $result = mysqli_query($conn,"SELECT * from user");

    global $email;
    global $password;

    if(isset($_POST["login"])){
      $email = $_POST["email"];
      $password = $_POST["password"];
      if($email == "admin" && $password == "admin"){
          $_SESSION["loggedIn"] = [
              "ID" => 'admin'
          ];
          $_SESSION["isAuthAdmin"] = true;
          header("Location: admin.php");
          return;
      }
    }
    
    while($row = mysqli_fetch_array($result)){
      if($email == $row["email"]){
          // echo $row["email"];
          // echo $email;
          if($password == $row["password"]){
              $_SESSION["loggedIn"] = [
                  "ID" => $row["id_user"]
              ];
              $_SESSION["message"] = "Berhasil login";
              $_SESSION["isAuth"] = true;
              $_SESSION["isAuthAdmin"] = true;
              $_SESSION["kendalas"] = array();
              header("Location: homeLogin.php"); //// => Home page user
          }else{
              $_SESSION["message"] = "Password salah";
              header("Location: login.php");
          }
          break;
      }else{
        $_SESSION["message"] = "Username/email belum terdaftar";
      }
  }


if(isset($_POST["gotoregis"])){
  unset($_SESSION["message"]);
  header("Location: register.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="login.css">
</head>
<body>
  <form action="#" method="post">
  <nav class="navbar navbar-expand-md">
      <div class="container">
      <a href="home.php" class="navbar-brand mb-0 h1 bold">
        <img class="d-inline-block" src="assets/home/mentaldoclogo.png" alt="" width="30px" height="30px">
        MENTALDOC
      </a>
      <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse bold"
      id="navbarNav">
      
        <ul class="navbar-nav mx-auto">
          <li class="navbar-item-active">
            <a href="home.php" class="nav-link">
              HOME
            </a>
          </li>
          <li class="navbar-item-active">
            <a href="#" class="nav-link">
              ABOUT US
            </a>
          </li>
          <li class="navbar-item-active">
            <a href="#" class="nav-link">
              SERVICE
            </a>
          </li>
          <li class="navbar-item-active">
            <a href="#" class="nav-link">
              AIDOC
            </a>
          </li>
          <li class="navbar-item-active">
            <a href="#" class="nav-link">
              CONTACT
            </a>
          </li>
        </ul>
        <button class="btn borrad bold">LOGIN</button>
      </div>
      </div>
    </nav>
    <div class="login-page-container">
      <div>
        <img src="assets/home/meditation.png" alt="">
      </div>
      <div>
        <div class="login-form-container">
          <div class="login-form-title">Welcome to <span class="login-form-title-mentaldoc">MentalDoc</span></div>
          <form action="" class="form-container">
            <div class="login-form-email-container">
              <img src="assets/register/emaillogo.png" alt="">
              <input class="login-form-text-input" type="text" name="email" placeholder="Email">
            </div>
            <div class="login-form-password-container">
              <img src="assets/register/passwordlogo.png" alt="">
              <input class="login-form-text-input" type="password" name="password" placeholder="Password">
              <img class="login-form-password-eye" src="assets/register/eyelogo.png" alt="">
            </div>
            <div class="login-form-remember-me-container">
              <div>
                <input type="checkbox"> <label for="checkbox">Remember me</label>
              </div>
              <a href="">Forgot Password?</a>
            </div>
            <button class="login-form-button-login" type="submit" name="login">Login</button>
            <div class="login-form-or-container">-------- or -------</div>
            <button class="login-form-button-login-via-google" type="button"> <img src="assets/register/emaillogo.png" alt=""> Login with Google</button>
            <div class="login-form-dont-have-account-container">Don't have account?
              <button type="submit" name="gotoregis" style="border: none; background: none; color:rgb(91, 110, 253); margin:0; padding:0; text-decoration: underline;">Register</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  <form>
  
  <script src="js/bootstrap.js"></script>
</body>
</html>