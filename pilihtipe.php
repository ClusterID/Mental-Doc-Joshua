<?php
  require_once("connection.php");

  $keluhan = implode($_SESSION['kendalas']);

  $_SESSION['keluhan'] = array();

    $sedanglogin = $_SESSION["loggedIn"]["ID"];
    $sql = "SELECT * from user where id_user='$sedanglogin'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      // output data of each row
      while($row = mysqli_fetch_assoc($result)) {
        $idloggedin = $row["id_user"];
        $usernameloggedin = $row["username"];
        $emailloggedin = $row["email"];
        $usialoggedin = $row["usia"];
        $firstnameloggedin = $row["firstname"];
        $surnameloggedin = $row["surname"];
        $nikloggedin = $row["nik"];
        $birthdateloggedin = $row["birthdate"];
        $cityloggedin = $row["city"];
        $addressloggedin = $row["address"];
        $jeniskelaminloggedin = $row["jenis_kelamin"];
      }
    } else {
      echo "0 results";
    }

    if(isset($_POST["konselingoffline"]))
    {
      $_SESSION["tipekonseling"] = $_POST["konselingoffline"];
      echo "Halo";
      // header("Location: pilihpsikolog.php");
    }

    if(isset($_POST["konselingviachat"]))
    {
      $_SESSION["tipekonseling"] = $_POST["konselingviachat"];
      header("Location: pilihpsikolog.php");
    }

    if(isset($_POST["konselingviameet"]))
    {
      $_SESSION["tipekonseling"] = $_POST["konselingviameet"];
      header("Location: pilihpsikolog.php");
    }

    if(isset($_POST["buttonlogout"]))
    {
        session_destroy();
        header("Location: login.php");
    }
  
  // echo $keluhan;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="pilihtipe.css">
    <script src="js/bootstrap.js"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <style>
      .active-border{
        border: 1px solid black;
      }
    </style>
  </head>
<?php 
  if(isset($_SESSION["isAuth"]) || isset($_SESSION["isAuthAdmin"]))
  {
?>
<body>
  <form action="#" method="POST">
    <nav class="navbar navbar-expand-md">
        <div class="container">
        <a href="#" class="navbar-brand mb-0 h1 bold">
          <img class="d-inline-block" src="assets/home/mentaldoclogo.png" alt="" width="30px" height="30px">
          MENTALDOC
        </a>
        <button type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" class="navbar-toggler" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse bold "
        id="navbarNav">
        
          <ul class="navbar-nav mx-auto">
            <li class="navbar-item-active">
              <a href="#" class="nav-link">
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
                CONTACT
              </a>
            </li>
          </ul>
          <div>
            <img src="assets/notification.png" width="30px" alt="Bell" onclick="toggleNotifikasi()">
            <a href="profile.html"><img src="assets/profile.png" width="30px" alt="Profile"></a> 
            <span><?php echo $usernameloggedin ?></span>
            <button name="buttonlogout">Logout</button>
          </div>
        </div>
        </div>
      </nav>
    <ul class="flex-row flex justify-content-evenly p-4">
      <li>
        <div class="box-number active">1</div>
        <div class="my-3 active-text">Pilih Tipe Konsultasi</div>
      </li>
      <li>
        <div class="box-number">2</div>
        <div class="my-3">Pilih Psikolog</div>
      </li>
      <li>
        <div class="box-number">3</div>
        <div class="my-3">Pilih Jadwal Konsultasi</div>
      </li>
      <li>
        <div class="box-number">4</div>
        <div class="my-3">Booking</div>
      </li>
    </ul>
    <div class="flex flex-row justify-content-evenly mb-5" >
      <div type="submit" class="p-4 card" name="konselingoffline" value="Konseling Offline" id="konselingoffline">
        <img src="assets/home/kami(1).png" width="300px" alt="Konseling Offline Image">
        <h5 class="p-4">Konseling Offline</h5>
      </div>
      <div class="p-4 card" name="konselingviachat" value="Konseling Via Chat" id="konselingviachat">
        <img src="assets/home/kami(2).png" width="300px" alt="Konseling Via Chat">
        <h5 class="p-4">Konseling Via Chat</h5>
      </div>
      <div class="p-4 card" name="konselingviameet" value="Konseling Via Meet" id="konselingviameet">
        <img src="assets/home/kami(1).png" width="300px" alt="Konseling Via Meet">
        <h5 class="p-4">Konseling Via Meet</h5>
      </div>
    </div>
    </form>

    <div class="flex justify-content-evenly">
      <button class="box">Kembali</button>
      <a href="pilihpsikolog.php"><button class="box active">Next</button></a>
    </div>
    <script>
        $("#konselingoffline").click(function(){
          $("#konselingoffline").toggleClass("active-border");
          $(document).ready( function(){
              $.ajax({
                type : 'POST',
                url : 'pilihtipekonseling.php',
                data: {
                  tipekonseling : 'Konseling Offline',

              },
              success : function(data){
                       alert(data);
              },
              error : function(XMLHttpRequest, textStatus, errorThrown) 
              {
                  alert ("Error Occured");
              }
            });

          });
      })

      $("#konselingviachat").click(function(){
          $("#konselingviachat").toggleClass("active-border");
        $(document).ready( function(){
              $.ajax({
                type : 'POST',
                url : 'pilihtipekonseling.php',
                data: {
                  tipekonseling : 'Konseling Via Chat',

              },
              success : function(data){
                      //  alert(data);
              },
              error : function(XMLHttpRequest, textStatus, errorThrown) 
              {

              }
            });

          });
      })

      $('#konselingviameet').on('click', function(e) {
        $("#konselingviameet").toggleClass("active-border");
        //alert("clicked");
        e.preventDefault();
        $.ajax({
          type: 'POST',
          url: url,
          success: function(response){
            window.location.assign(url);
          }
        });
      });
    </script>
</body>

<?php 
  }
  else
  {
    header("Location: unauthorizedpage.php");
  }
?>
</html>