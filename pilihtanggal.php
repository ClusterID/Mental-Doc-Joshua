<?php
  require_once("connection.php");

  $_SESSION['keluhan'] = array();

  $keluhanpasien = null;

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

  // if(isset($_POST["buttontanggal"]))
  // {
  //   $tanggal = $_POST["buttontanggal"];
  //   $_SESSION["tanggalkonsultasi"] = $tanggal;
  //   // unset($_POST["buttontanggal"]);
  //   // print_r($_SESSION);
  //   echo $tanggal;
  // }

  if(isset($_POST["jamkonsultasi"]))
  {
    $jamkonsul = $_POST["jamkonsultasi"];
    $_SESSION["jamkonsultasi"] = $jamkonsul;
    unset($_POST["jamkonsultasi"]);
    // print_r($_SESSION);
  }
  // else
  // {
  //   echo "
  //           <script type=\"text/javascript\">
  //               alert('Jam belum dimasukkan')
  //           </script>
  //            ";
  // }

  if(isset($_POST["tanggalkonsul"]))
    {
      $date = $_POST["tanggalkonsul"];
      $tanggal = $date;
      // echo $date;
      unset($_POST["tanggalkonsul"]);
    }
    // else
    // {
    //   echo "
    //         <script type=\"text/javascript\">
    //             alert('Tanggal belum dimasukkan')
    //         </script>
    //          ";
    // }

  if(isset($_POST["jadwalkankonsultasi"]))
  {
    // COUNT JUMLAH DATA DATABASE
    $totalresult = "SELECT COUNT(*) FROM JADWAL";
    $queryresult = mysqli_query($conn,$totalresult);
    $rowresult = mysqli_fetch_row($queryresult);
    // echo "Number is: ", $rowresult[0];
    
    $angkajadwalbaru = $rowresult[0] + 1;
    $idjadwalbaru = 'J0'.$angkajadwalbaru;
    $iduserloggedin = $_SESSION["loggedIn"]["ID"];
    $idcounselor = $_SESSION["psikolog"];
    $jeniscounseling = $_SESSION["tipekonseling"];
    $topic = $_SESSION["kendalas"];

    foreach($_SESSION["kendalas"] AS $key => $value) {
      $keluhanpasien .=  "$value" . ", ";
    }
    // implode($keluhanpasien);
    echo $keluhanpasien;

    // var_dump($_SESSION["kendalas"][2]);

    if($tanggal != null && $jamkonsul != null)
    {
      $insert_query = "INSERT INTO jadwal(id_jadwal,id_user, id_counselor, jenis_counseling, topic, tanggal_konsul, jam_konsul) VALUES('$idjadwalbaru','$iduserloggedin', '$idcounselor', '$jeniscounseling', '$keluhanpasien', '$tanggal', '$jamkonsul')";
    $res = $conn->query($insert_query);
    mysqli_query($conn,"INSERT INTO jadwal(id_jadwal,id_user, id_counselor, jenis_counseling, topic, tanggal_konsul, jam_konsul) VALUES('$idjadwalbaru','$iduserloggedin', '$idcounselor', '$jeniscounseling', '$keluhanpasien', '$tanggal', '$jamkonsul')");
    echo "
            <script type=\"text/javascript\">
                alert('Berhasil regist jadwal')
            </script>
             ";
    header("Location: homeLogin.php");
    }
    else
    {
      echo "
            <script type=\"text/javascript\">
                alert('Tanggal/Jam belum dimasukkin')
            </script>
             ";
      // unset($_SESSION["message"]);
    }
    
  }

  if(isset($_POST["buttonlogout"]))
    {
        session_destroy();
        header("Location: login.php");
    }
  // print_r($_SESSION);
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
            <span><?php echo $usernameloggedin ?></span>
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
        <div class="box-number">2</div>
        <div class="my-3">Pilih Psikolog</div>
      </li>
      <li>
        <div class="box-number active">3</div>
        <div class="my-3 active-text">Pilih Jadwal Konsultasi</div>
      </li>
      <li>
        <div class="box-number">4</div>
        <div class="my-3">Booking</div>
      </li>
    </ul>
    <div class="flex flex-row justify-content-evenly " >
      
      <div class="flex flex-column card gap-3" style="height: fit-content; padding: 10px;">
        <h3>Pilih jam Konsultasi</h3>
        <input type="date" name="tanggalkonsul">
        <input type="time" id="" name="jamkonsultasi">
        <button class="box mx-auto" name="jadwalkankonsultasi">Jadwalkan Konsultasi</button>
      </div>
    </div>
    </form>
    <div class="flex justify-content-evenly ">
      <a href="pilihpsikolog.php"><button class="box">Kembali</button></a>
      <button class="box active">Next</button>
    </div>
    
</body>

    <script>
        $("#jadwalkankonsultasi").click(function(){
          $(document).ready( function(){
              $.ajax({
                type : 'POST',
                url : 'scheduling.php',
                data: {},
              success : function(data){
                      //  header("Location: homeLogin.php")
              },
              error : function(XMLHttpRequest, textStatus, errorThrown) 
              {

              }
            });

          });
    })

      // $("#jamkonsultasi").change(function(){
      //   $jamkonsul= $("#jamkonsultasi").val();
        
      //   $(document).ready( function(){
      //         $.ajax({
      //           type : 'POST',
      //           url : 'schedulingtime.php',
      //           data: {
      //             waktukonsultasi : $jamkonsul
      //           },
      //         success : function(data){
      //                 //  header("Location: homeLogin.php")
      //         },
      //         error : function(XMLHttpRequest, textStatus, errorThrown) 
      //         {

      //         }
      //       });

      //     });
      // });
    </script>
<?php 
  }
  else
  {
    header("Location: unauthorizedpage.php");
  }
?>
</html>