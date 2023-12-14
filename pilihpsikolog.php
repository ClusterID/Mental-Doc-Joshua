<?php
  require_once("connection.php");

  $keluhan = implode($_SESSION['kendalas']);

  // $_SESSION['keluhan'] = array();

  $sqlpsikolog = "SELECT * FROM detail_counselor";
  $resultpsikolog = mysqli_query($conn, $sqlpsikolog);
  
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

  if(isset($_POST["submitpsikolog"]))
  {
    $idpsikolog = $_POST['submitpsikolog'];
    $_SESSION["psikolog"] = $idpsikolog;
    header("Location: pilihtanggal.php");
    // $sqlpilihpsikolog = "SELECT nama FROM detail_counselor WHERE id_counselor = $idpsikolog";
    // $resultpsikolog = mysqli_query($conn, $sqlpilihpsikolog);
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
            <a href="profile.php"><img src="assets/profile.png" width="30px" alt="Profile"></a> 
            <span><? echo $usernameloggedin ?></span>
            <button name="buttonlogout">Logout</button>
          </div>
        </div>
        </div>
      </nav>
    <ul class="flex-row flex justify-content-evenly p-4">
      <li>
        <div class="box-number">1</div>
        <div class="my-3">Pilih Tipe Konsultasi</div>
      </li>
      <li>
        <div class="box-number active">2</div>
        <div class="my-3 active-text">Pilih Psikolog</div>
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
    <div class="flex flex-row justify-content-center mb-5" >
      <div class="box" style="width: 500px;">
        <div style="margin-bottom: 10px;">
          <div>Booking Konsultasi</div>
          <button style="border-radius: 0.75em; padding: 5px 10px;">Reset Filter</button>
        </div>
        <hr>
        <div class="flex flex-column " style="margin-bottom: 10px; width: 30%">
          <div >Topik yang ingin dibahas?</div>
          <div class="flex-warp">
            <input type="radio" name="" id="">Pekerjaan
            <input type="radio" name="" id="">Percintaan
            <input type="radio" name="" id="">Pendidikan
            <input type="radio" name="" id="">Perundungan
            <input type="radio" name="" id="">Stress
            <input type="radio" name="" id="">Kendali Emosi
            <input type="radio" name="" id="">Kesepian
            <input type="radio" name="" id="">Seksual
            <input type="radio" name="" id="">Keluarga
            <input type="radio" name="" id="">Kecemasan
            <input type="radio" name="" id="">Lainnya

          </div>
        </div>
        <hr>
        <div >
          <div>Medium Konsultasi</div>
          <div class="flex-warp">
            <input type="radio" name="medium" id="">Offline Meeting
            <input type="radio" name="medium" id="">Online Chat
            <input type="radio" name="medium" id="">Online Group
          </div>    
        </div>

      </div>
      <div>
        <div class="box">
          <h1>Pilihan Psikolog</h1>
          <div>Daftar psikolog berdasarkan filter Topik</div>
          <input type="text" name="" id="" placeholder="Cari Psikolog" style="margin-bottom: 10px;">
        <?php 
            while($row = mysqli_fetch_row($resultpsikolog)){
        ?>
          <div class="flex flex-row justify-content-center align-items-center">
            <div><img src="" alt=""></div>
            <div>
              <h1><?= $row[1] ?></h1>
              <div>Spesialisasi: <?= $row[2] ?></div>
              <div>
                <img src=""  alt="Icon Tas"> <span><?= $row[3] ?> tahun</span>
                <img src="" alt="Icon Papan"> <span><?= $row[4] ?> Konsultasi</span>
                <img src="" alt="Icon Bintang"> <span><?= $row[5] ?></span>
              </div>
              <div>
                <a>Liat lebih banyak</a>
              </div>
            </div>
            <div>
              <button type="submit" name="submitpsikolog" class="box" style="padding: 5px 15px; background: #30ADBE; color: white;" value="<?= $row[0] ?>">Pilih Sekarang</button>
            </div>
          </div>

          <?php
            }
          ?>
        </div>
      </div>
    </div>
    </form>
    <div class="flex justify-content-evenly ">
      <a href="pilihtipe.php"><button class="box">Kembali</button></a>
      <a href="pilihtanggal.php"><button class="box active">Next</button></a>
    </div>
</body>
<?php 
  }
  else
  {
    header("Location: unauthorizedpage.php");
  }
?>
</html>