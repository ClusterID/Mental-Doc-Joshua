<?php
    require_once("connection.php");

    $result = mysqli_query($conn,"SELECT * FROM USER");

    
    // COUNT JUMLAH DATA DATABASE
    $totalresult = "SELECT COUNT(*) FROM USER";
    $queryresult = mysqli_query($conn,$totalresult);
    $rowresult = mysqli_fetch_row($queryresult);
    // echo "Number is: ", $rowresult[0];

    if(isset($_POST["buttonregister"]))
    {
      $ada = false;
      while($row = mysqli_fetch_array($result))
      {
          if($_POST["username"] == $row["username"] || $_POST["email"] == $row["email"])
          {
              $ada = true;
          }
      
      }
      if($ada)
          {
            echo "
            <script type=\"text/javascript\">
                alert('Email sudah ada')
            </script>
             ";
          }

      if($_POST['username'] == "" || $_POST['email'] == "" || $_POST['password'] == "" || $_POST['confirm'] == "" || $_POST['umur'] == "")
      {
        echo "
        <script type=\"text/javascript\">
            alert('Field harus diisi')
        </script>
         ";
      }
      elseif(!$ada)
      {
        $email = $_POST["email"];
        $username = $_POST["username"];
        $confirm = $_POST["confirm"];
        $password = $_POST["password"];
        $umur = $_POST["umur"];
        
        if($password == $confirm)
        {
          $angkauserbaru = $rowresult[0] + 1;
          $iduserbaru = 'US'.$angkauserbaru;
          
          $insert_query = "INSERT INTO user(id_user,username, password, email, role, usia) VALUES('$iduserbaru','$username', '$password', '$email', 'user', '$umur')";
          $res = $conn->query($insert_query);
          mysqli_query($conn,"INSERT into user (id_user, username, password, email, role, usia) values('$iduserbaru','$username','$password','$email','user','$umur')");
          $_SESSION["message"] = "Berhasil Register";
          header("Location: login.php");
        }
        else
        {
            echo "
            <script type=\"text/javascript\">
                alert('The password and confirmation password do not match')
            </script>
             ";
        }
      }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="register.css">
</head>
<body>
  <form action="#" method="post">
    <nav class="navbar navbar-expand-md">
      <div class="container">
      <a href="index.html" class="navbar-brand mb-0 h1 bold">
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
        <a href="login.html">
          <button class="btn borrad bold">LOGIN</button>
        </a>
      </div>
      </div>
    </nav>

    <div class="register-page-container">
      <div>
        <img src="assets/home/meditation.png" alt="">
      </div>
      <div>
        <div class="register-form-container">
          <div class="register-form-title">Welcome to <span class="register-form-title-mentaldoc">MentalDoc</span></div>
          <form action="" class="form-container">
            <div class="register-form-username-container">
              <img src="assets/register/userlogo.png" alt="">
              <input class="register-form-text-input" type="text" placeholder="Username" name="username">
            </div>
            <div class="register-form-email-container">
              <img src="assets/register/emaillogo.png" alt="">
              <input class="register-form-text-input" type="text" placeholder="Email" name="email">
            </div>
            <div class="register-form-umur-container">
              <img src="assets/register/emaillogo.png" alt="">
              <input class="register-form-text-input" type="text" placeholder="Umur" name="umur">
            </div>
            <div class="register-form-password-container">
              <img src="assets/register/passwordlogo.png" alt="">
              <input class="register-form-text-input" type="password" placeholder="Password" name="password">
              <img class="register-form-password-eye" src="assets/register/eyelogo.png" alt="">
            </div>
            <div class="register-form-confirm-password-container">
              <img src="assets/register/passwordlogo.png" alt="">
              <input class="register-form-text-input" type="password" placeholder="Confirm Password" name="confirm">
              <img class="register-form-password-eye" src="assets/register/eyelogo.png" alt="">
            </div>
            <div class="register-form-remember-me-container">
              <div>
                <input type="checkbox"> <label for="checkbox">Remember me</label>
              </div>
            </div>
            <button class="register-form-button-register" type="submit" name="buttonregister">register</button>
            <div class="register-form-or-container">-------- or -------</div>
            <button class="register-form-button-login-via-google" type="button"> <img src="assets/register/emaillogo.png" alt=""> Login with Google</button>
            <div class="register-form-already-have-account-container">Already have an account?<a href="login.php">Login</a></div>
          </form>
        </div>
      </div>
    </div>
  </form>
    

<script src="js/bootstrap.js"></script>
</body>
</html>