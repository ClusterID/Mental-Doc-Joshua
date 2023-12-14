<?php
    require_once("connection.php");

    // $result = mysqli_fetch_array(mysqli_query($conn,"SELECT * from user where id_user=".$_SESSION["loggedIn"]["ID"]));
    // $_SESSION['keluhan'] = array();
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
      if($sedanglogin == "admin")
      {
        $usernameloggedin = "admin";
      }
    }
    
    if(isset($_POST["choosetopic"]))
    {
        header("Location: pilihtipe.php");
    }

    if(isset($_POST["buttonlogout"]))
    {
        session_destroy();
        header("Location: login.php");
    }
    
  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="home.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</head>

<?php 
  if(isset($_SESSION["isAuth"]) || isset($_SESSION["isAuthAdmin"]))
  {
?>

<form action="#" method="POST">
<body id="bodyHome">
  
  <div id="segment-topik" class="hidden">
    <div id="segment-topik-container" class="container-kategori-topik">
      <button id="segment-topik-close-button" class="kategori-topik-close-button" >X</button>
      <div id="segment-topik-text-1" class="title">Choose the topic you want to discuss</div>
      <div id="segment-topik-text-2">You can choose more than 1 topic</div>
      <div id="segment-topik-container-button-container" class="kategori-topik-pilihan">
        <span id="segment-topik-button-1" class="segment-topik-button-opsi" value="false" name="pekerjaan" >Pekerjaan</span>
        <span id="segment-topik-button-2" class="segment-topik-button-opsi" value="false" name="percintaan" >Percintaan</span>
        <span id="segment-topik-button-3" class="segment-topik-button-opsi" value="false" name="pendidikan" >Pendidikan</span>
        <span id="segment-topik-button-4" class="segment-topik-button-opsi" value="false" name="perundungan" >Perundungan</span>
        <span id="segment-topik-button-5" class="segment-topik-button-opsi" value="false" name="stress" >Stress</span>
        <span id="segment-topik-button-6" class="segment-topik-button-opsi" value="false" name="kendaliemosi" >Kendali Emosi</span>
        <span id="segment-topik-button-7" class="segment-topik-button-opsi" value="false" name="kesepian" >Kesepian</span>
        <span id="segment-topik-button-8" class="segment-topik-button-opsi" value="false" name="seksual" >Seksual</span>
        <span id="segment-topik-button-9" class="segment-topik-button-opsi" value="false" name="keluarga" >Keluarga</span>
        <span id="segment-topik-button-10" class="segment-topik-button-opsi" value="false" name="kecemasan" >Kecemasan</span>
        <span id="segment-topik-button-11" class="segment-topik-button-opsi" value="false" name="kecanduan" >Kecanduan</span>
        <span id="segment-topik-button-12" class="segment-topik-button-opsi" value="false" name="hubungansosial" >Hubungan Sosial</span>
        <span id="segment-topik-button-13" class="segment-topik-button-opsi" value="false" name="gangguanpolahidup" >Gangguan Pola Hidup</span>
        <span id="segment-topik-button-14" class="segment-topik-button-opsi" value="false" name="lainnya" >Lainnya</span>
      </div>
      <button type="submit" name="choosetopic" id="segment-topik-submit-button" class="button-1"><a href="pilihtipe.php">Choose Topic ></a></button>
    </div>
  </div>
  </form>
  
  <div id="notifikasi" class="hidden">
    <div>
      <div class="notif-main-title">NOTIFIKASI</div>
      <div class="flex">
        <div class="notif-img-container my-auto">
          <img src="" alt="img" class="notif-list-img">
        </div>
        <div class="notif-text-container">
          <div class="notif-list-title fw-bold">Schedule Booked</div>
          <p class="notif-list-subtitle">You have successfully booked a consultation appointment</p>  
        </div>
        <div class="notif-list-time my-auto">Today</div>
      </div>
      <div class="notifikasi-view-all-button"><a href="" >View All</a></div>
    </div>
  </div>

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
            AIDOC
          </a>
        </li>
        <li class="navbar-item-active">
          <a href="#" class="nav-link">
            CONTACT
          </a>
        </li>
      </ul>
      <div>
        <img src="assets/notification.png" width="30px" alt="Bell" id="btn-notif" >
        <a href="profile.php"><img src="assets/profile.png" width="30px" alt="Profile"></a> 
        <span><?php echo $usernameloggedin?></span>
        <button name="buttonlogout" class="button-1">Logout</button>
      </div>
    </div>
    </div>
  </nav>

  <div id="segment-1-container" class="segment">
    <div id="segment-1-container-content">
      <div id="segment-1-container-content-text-1">Menyediakan Konseling Secara Gratis Untuk Memberikan Anda Solusi</div>
      <div id="segment-1-container-content-text-2">Curahkan Keluhanmu, Kembalikan Bahagiamu.</div>
      <button id="segment-1-container-content-button" name="getaconsultation" class="button-1">Get a consultation</button>
    </div>
    <img id="segment-1-container-content-image" src="assets/home/meditation.png" alt="" width="700px">
  </div>

  <div id="segment-2" class="segment">
    <div id="segment-2-container-content-1">
      <h2 id="segment-2-container-content-1-text-1" class="title">Kami adalah Website Peduli Kesehatan Kesehatan Mental di Indonesia</h2>
      <div id="segment-2-container-content-1-text-2">Sebagai aplikasi penyedia layanan koseling, kami ingin fokus membantu kalian apabila memiliki permasalahan mental. MENTAL DOC memiliki misi membantu masyarakat yang membutuhkan layanan konseling secara gratis.</div>
    </div>
    <div id="segment-2-container-content-2">
      <img id="segment-2-container-content-2-image-1" src="assets/home/kami(1).png" alt="">
      <img id="segment-2-container-content-2-image-2" src="assets/home/kami(2).png" alt="">
    </div>
    <!-- <img id="kamiimage1" src="assets/home/kami(1).png" alt="" width="403px" height="397px">
    <img id="kamiimage2" src="assets/home/kami(2).png" alt="" width="238px" height="242px"> -->
  </div>

  <div id="segment-3" class="segment">
      <h2 id="segment-3-title">Counseling services that suit you</h2>
    <div id="segment-3-container">
      <div id="segment-3-container-content-1">
        <img id="segment-3-container-content-1-image-1" src="assets/home/applepay.png" alt="" width="" height="">
        <img id="segment-3-container-content-1-image-2" src="assets/home/konselingoffline(1).png" alt="" width="" height="">
        <img id="segment-3-container-content-1-image-3" src="assets/home/konselingoffline(2).png" alt="" width="" height="">
        <div id="segment-3-container-content-1-text-1" class="segment-3-content-title">Offline Counseling</div>
        <div id="segment-3-container-content-1-text-2" class="segment-3-content-subtitle">Sesi konseling bertemu langsung dengan psikolog dan melakukan konseling secara tatap muka.</div>
      </div>

      <div id="segment-3-container-content-2">
        <img id="segment-3-container-content-2-image-1" src="assets/home/squarelogo.png" alt="" width="" height="">
        <img id="segment-3-container-content-2-image-2" src="assets/home/mailchimplogo.png" alt="" width="" height="">
        <img id="segment-3-container-content-2-image-3" src="assets/home/facebooklogo.png" alt="" width="" height="">
        <img id="segment-3-container-content-2-image-4" src="assets/home/jetpacklogo.png" alt="" width="" height="">
        <img id="segment-3-container-content-2-image-5" src="assets/home/googleadslogo.png" alt="" width="" height="">
        <img id="segment-3-container-content-2-image-6" src="assets/home/konselingviachat.png" alt="" width="" height="">
        <div id="segment-3-container-content-2-text-1" class="segment-3-content-title">Online Counseling</div>
        <div id="segment-3-container-content-2-text-2" class="segment-3-content-subtitle">Sesi konseling tanpa bertemu langsung dengan psikolog dan melakukan konseling melalui media online.</div>
      </div>

      <div id="segment-3-container-content-3">
        <img id="segment-3-container-content-3-image-1" src="assets/home/konselingviaconference(2).png" alt="" width="" height="">
        <img id="segment-3-container-content-3-image-2" src="assets/home/konselingviaconference(3).png" alt="" width="" height="">
        <img id="segment-3-container-content-3-image-3" src="assets/home/konselingviaconference(4).png" alt="" width="" height="">
        <img id="segment-3-container-content-3-image-4" src="assets/home/konselingviaconference(1).png" alt="" width="" height="">
        <div id="segment-3-container-content-3-text-1" class="segment-3-content-title">Group Counseling</div>
        <div id="segment-3-container-content-3-text-2" class="segment-3-content-subtitle">Sesi konseling secara berkelompok mari kita bersama sama mencari solusi (maksimal 3-5 orang).</div>
      </div>

    </div>
  </div>

  <div id="segment-4" class="segment">
    <h2 id="segment-4-title" class="title">Know More about psychologist</h2>
    <div id="segment-4-container">  
      <div id="segment-4-container-content-1" class="segment-4-content">
        <img id="segment-4-container-content-1-image-1" src="assets/home/konselor-joananovena.png" alt="">
        <div id="segment-4-container-content-1-container" class="segment-4-container-content-container">
          <div class="segment-4-container-content-container-2">
            <img id="segment-4-container-content-1-image-2" src="assets/home/bintang.png" alt="">
            <div id="segment-4-container-content-1-text-1">4.5( 30 )</div>
          </div>
          <div class="segment-4-container-content-container-2">
            <img id="segment-4-container-content-1-image-3" src="assets/home/task.png" alt="">
            <div id="segment-4-container-content-1-text-2">50 Consultation</div>
          </div>
        </div>
        <div id="segment-4-container-content-1-text-3" class="segment-4-text-1">Joana Novena,S.Psi</div>
        <div id="segment-4-container-content-1-text-4" class="segment-4-text-2">Psikolog | Spesialis Percintaan</div>
      </div>
      
      <div id="segment-4-container-content-2" class="segment-4-content">
        <img id="segment-4-container-content-2-image-1" src="assets/home/konselor-joananovena.png" alt="">
        <div id="segment-4-container-content-2-container" class="segment-4-container-content-container">
          <div class="segment-4-container-content-container-2">
            <img id="segment-4-container-content-2-image-2" src="assets/home/bintang.png" alt="">
            <div id="segment-4-container-content-2-text-1">4.5( <span>30</span> )</div>
          </div>
          <div class="segment-4-container-content-container-2">
            <img id="segment-4-container-content-2-image-3" src="assets/home/task.png" alt="">
            <div id="segment-4-container-content-2-text-2">50 Consultation</div>
          </div>
        </div>
        <div id="segment-4-container-content-2-text-3" class="segment-4-text-1">Joana Novena,S.Psi</div>
        <div id="segment-4-container-content-2-text-4" class="segment-4-text-2">Psikolog | Spesialis Percintaan</div>
      </div>
      
      <div id="segment-4-container-content-3" class="segment-4-content">
        <img id="segment-4-container-content-3-image-1" src="assets/home/konselor-joananovena.png" alt="">
        <div id="segment-4-container-content-3-container" class="segment-4-container-content-container">
          <div class="segment-4-container-content-container-2">
            <img id="segment-4-container-content-3-image-2" src="assets/home/bintang.png" alt="">
            <div id="segment-4-container-content-3-text-1">4.5( <span>30</span> )</div>
          </div>
          <div class="segment-4-container-content-container-2">
            <img id="segment-4-container-content-3-image-3" src="assets/home/task.png" alt="">
            <div id="segment-4-container-content-3-text-2">50 Consultation</div>
          </div>
        </div>
        <div id="segment-4-container-content-3-text-3" class="segment-4-text-1">Joana Novena,S.Psi</div>
        <div id="segment-4-container-content-3-text-4" class="segment-4-text-2">Psikolog | Spesialis Percintaan</div>
      </div>

    </div>
    <div id="segment-4-container-bar">
      <button><-</button>
      <!-- bar here -->
      <button>-></button>  
    </div>
  </div>
  

  <!-- <div class="ai-doc-container segment">
    <div>
      <img class="ai-doc-image" src="assets/home/aidoclogo.png" alt="">
    </div>
    <div class="ai-doc-text ai-doc-text-title">Hey, I am Aidoc!</div>
    <div class="ai-doc-text ai-doc-text-subtitle">How can i help you?</div>
    <div class="ai-doc-searchbar">
      <form action="" class="d-flex">
        <input type="text" placeholder="Ask Your Question">
        <button type="button" class="btn btn-primary">></button>
      </form>
    </div>
  </div> -->

  <div id="segment-6" class="segment">
    <div id="segment-6-container">
      <div id="segment-6-container-content-1">
        <img id="segment-6-container-content-1-image-1" src="assets/home/testimony(1).png" alt="">
        <img id="segment-6-container-content-1-image-2" src="assets/home/testimony(2).png" alt="">
        <img id="segment-6-container-content-1-image-3" src="assets/home/testimony(3).png" alt="">
      </div>
      <div id="segment-6-container-content-2">
        <div id="segment-6-container-content-2-text-1" class="title">Testimony</div>
        <div id="segment-6-container-content-2-text-2">
          Boom!!!! kakanya baik banget kaya ngobrol curhat deket tatap langsung padahal cuman chat biasa, kakanya ngebebasin aku bercerita sepanjang apapun dan tanpa menghakimi. solusi yang dkasih jugaa ga susah, alhamdulillahnya kebantu sama tips tipsnyaaa. pokoknya mantap bikin nagiih
        </div>
        <div id="segment-6-container-content-2-container-button">
          <button id="segment-6-button-1"><-</button>
          <button id="segment-6-button-2">-></button>
        </div>
      </div>
      <div id segment-6-container-content-3">
        <img id="segment-6-container-content-3-image-1" src="assets/home/testimony(4).png" alt="">
        <img id="segment-6-container-content-3-image-2" src="assets/home/testimony(5).png" alt="">
        <img id="segment-6-container-content-3-image-3" src="assets/home/testimony(6).png" alt="">
      </div>
    </div>
  </div>

  <div id="segment-7" class="segment">
    <h2 id="segment-7-title" class="title">Frequently Asked Question(FAQ)</h2>
    <ul id="segment-7-container">
      <li id="segment-7-container-content-1" class="segment-7-container-content">
        <div class="segment-7-number">01</div>
        <div>
          <div id="segment-7-container-content-1-text-1" class="segment-7-text-1">Apakah saya dapat melakukan konseling dan tetap anonim?</div>
          <div id="segment-7-container-content-1-text-2" class="segment-7-text-2">Ya, boleh. Kamu dapat menggunakan nama samaran sesuai kenyamananmu. Pihak MentalDoc (baik admin maupun Psikolog) tidak akan mengetahui identitas asli kamu. Identitas asli atau nama samaran kamu akan selalu aman</div>
        </div>
        <button id="segment-7-container-content-1-button" class="segment-7-button" onclick="segment7Button1()">+</button>
      </li>
      <li id="segment-7-container-content-2" class="segment-7-container-content">
        <div class="segment-7-number">02</div>
        <div>
          <div id="segment-7-container-content-2-text-1" class="segment-7-text-1">Apakah data pribadi saya akan aman?</div>
          <div id="segment-7-container-content-2-text-2" class="segment-7-text-2">Ya, boleh. Kamu dapat menggunakan nama samaran sesuai kenyamananmu. Pihak MentalDoc (baik admin maupun Psikolog) tidak akan mengetahui identitas asli kamu. Identitas asli atau nama samaran kamu akan selalu aman</div>
        </div>
        <button id="segment-7-container-content-2-button" class="segment-7-button" onclick="segment7Button2()">+</button>
      </li>
      <li id="segment-7-container-content-3" class="segment-7-container-content">
        <div class="segment-7-number">03</div>
        <div>
          <div id="segment-7-container-content-3-text-1" class="segment-7-text-1">Bagaimana cara saya untuk dapat melakukan konseling di MentalDoc?</div>
          <div id="segment-7-container-content-3-text-2" class="segment-7-text-2">Ya, boleh. Kamu dapat menggunakan nama samaran sesuai kenyamananmu. Pihak MentalDoc (baik admin maupun Psikolog) tidak akan mengetahui identitas asli kamu. Identitas asli atau nama samaran kamu akan selalu aman</div>
        </div>
        <button id="segment-7-container-content-3-button" class="segment-7-button" onclick="segment7Button3()">+</button>
      </li>
      <li id="segment-7-container-content-4" class="segment-7-container-content">
        <div class="segment-7-number">04</div>
        <div>
          <div id="segment-7-container-content-4-text-1" class="segment-7-text-1">Apa saja yang akan saya dapatkan setelah konseling?</div>
          <div id="segment-7-container-content-4-text-2" class="segment-7-text-2">Ya, boleh. Kamu dapat menggunakan nama samaran sesuai kenyamananmu. Pihak MentalDoc (baik admin maupun Psikolog) tidak akan mengetahui identitas asli kamu. Identitas asli atau nama samaran kamu akan selalu aman</div>
        </div>
        <button id="segment-7-container-content-4-button" class="segment-7-button" >+</button>
      </li>
    </ul>
  </div>

  <script>

    $("#logout").click(function(){
        
    })

    var indexkeluhan = 0;
    

    $("#segment-1-container-content-button").click(function(){
      $("#segment-topik").toggleClass("hidden");
    })

    $("#btn-notif").click(function(){
        $("#notifikasi").toggleClass("hidden");
      })
      $("#segment-topik-button-1").click(function(){
        $("#segment-topik-button-1").toggleClass("active-button");
        var status1 = $("#segment-topik-button-1").attr("value");
        console.log(status);

        if(status1 == "false")
        {
            status1 = "true";
            indexkeluhan++;
            $("#segment-topik-button-1").attr("value", "true");
            // e.preventDefault();
            $(document).ready( function(){
              $.ajax({
                type : 'POST',
                url : 'choosetopic.php',
                data: {
                kendala : 'pekerjaan',
                index: indexkeluhan

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
        }
        else
        {
          status1 = "false";
          // indexkeluhan--;
          $("#segment-topik-button-1").attr("value", "false");
          
          $(document).ready( function(){
              $.ajax({
                type : 'POST',
                url : 'removetopic.php',
                data: {
                kendala : 'pekerjaan',
                index: indexkeluhan
              },
              success : function(data){
                       alert(data);
              },
              error : function(XMLHttpRequest, textStatus, errorThrown) 
              {
                // alert ("Error Occured");
              }
            });

          });
        }

        
      })
      $("#segment-topik-button-2").click(function(){
        $("#segment-topik-button-2").toggleClass("active-button");
        var status2 = $("#segment-topik-button-2").attr("value");
        
        if(status2 == "false")
        {
          $status2 = "true";
          indexkeluhan++;
          $("#segment-topik-button-2").attr("value", "true");

          $.ajax({
            type : 'POST',
            url : 'choosetopic.php',
            data: {
              kendala : 'percintaan',
              index: indexkeluhan
            },
          success : function(data){
                      alert(data);
          },
          error : function(XMLHttpRequest, textStatus, errorThrown) 
          {
            // print ("Error Occured");
          }
          });
        }
        else
        {
          status2 = "false";
          // indexkeluhan--;
          $("#segment-topik-button-2").attr("value", "false");
          
          $(document).ready( function(){
              $.ajax({
                type : 'POST',
                url : 'removetopic.php',
                data: {
                kendala : 'percintaan',
                index: indexkeluhan
              },
              success : function(data){
                       alert(data);
              },
              error : function(XMLHttpRequest, textStatus, errorThrown) 
              {
                // alert ("Error Occured");
              }
            });

          });
        }

        
      })
      $("#segment-topik-button-3").click(function(){
        $("#segment-topik-button-3").toggleClass("active-button");

        var status3 = $("#segment-topik-button-3").attr("value");
        indexkeluhan++;
        
        if(status3 == "false")
        {
          $("#segment-topik-button-3").attr("value", "true");

          $.ajax({
            type : 'POST',
            url : 'choosetopic.php',
            data: {
              kendala : 'pendidikan',
              index: indexkeluhan
            },
          success : function(data){
                      alert(data);
          },
          error : function(XMLHttpRequest, textStatus, errorThrown) 
          {
            // print ("Error Occured");
          }
          });
        }
        else
        {
          status3 = "false";
          $("#segment-topik-button-3").attr("value", "false");
          // indexkeluhan--;
          
          $(document).ready( function(){
              $.ajax({
                type : 'POST',
                url : 'removetopic.php',
                data: {
                kendala : 'pendidikan',
                index: indexkeluhan
              },
              success : function(data){
                       alert(data);
              },
              error : function(XMLHttpRequest, textStatus, errorThrown) 
              {
                // alert ("Error Occured");
              }
            });

          });
        }
      
      
      })
      $("#segment-topik-button-4").click(function(){
        $("#segment-topik-button-4").toggleClass("active-button");

        var status4 = $("#segment-topik-button-4").attr("value");
        indexkeluhan++;
        
        if(status4 == "false")
        {
          $("#segment-topik-button-4").attr("value", "true");

          $.ajax({
            type : 'POST',
            url : 'choosetopic.php',
            data: {
              kendala : 'perundungan',
              index: indexkeluhan
            },
          success : function(data){
                      alert(data);
          },
          error : function(XMLHttpRequest, textStatus, errorThrown) 
          {
            // print ("Error Occured");
          }
          });
        }
        else
        {
          status4 = "false";
          $("#segment-topik-button-4").attr("value", "false");
          // indexkeluhan--;
          
          $(document).ready( function(){
              $.ajax({
                type : 'POST',
                url : 'removetopic.php',
                data: {
                kendala : 'perundungan',
                index: indexkeluhan
              },
              success : function(data){
                       alert(data);
              },
              error : function(XMLHttpRequest, textStatus, errorThrown) 
              {
                // alert ("Error Occured");
              }
            });

          });
        }
      })
      $("#segment-topik-button-5").click(function(){
        $("#segment-topik-button-5").toggleClass("active-button");

        var status5 = $("#segment-topik-button-5").attr("value");
        indexkeluhan++;
        
        if(status5 == "false")
        {
          $("#segment-topik-button-5").attr("value", "true");

          $.ajax({
            type : 'POST',
            url : 'choosetopic.php',
            data: {
              kendala : 'stress',
              index: indexkeluhan
            },
          success : function(data){
                      alert(data);
          },
          error : function(XMLHttpRequest, textStatus, errorThrown) 
          {
            // print ("Error Occured");
          }
          });
        }
        else
        {
          status5 = "false";
          $("#segment-topik-button-5").attr("value", "false");
          // indexkeluhan--;
          
          $(document).ready( function(){
              $.ajax({
                type : 'POST',
                url : 'removetopic.php',
                data: {
                kendala : 'stress',
                index: indexkeluhan
              },
              success : function(data){
                       alert(data);
              },
              error : function(XMLHttpRequest, textStatus, errorThrown) 
              {
                // alert ("Error Occured");
              }
            });

          });
        }
      })
      $("#segment-topik-button-6").click(function(){
        $("#segment-topik-button-6").toggleClass("active-button");

        var status6 = $("#segment-topik-button-6").attr("value");
        indexkeluhan++;
        
        if(status6 == "false")
        {
          $("#segment-topik-button-6").attr("value", "true");

          $.ajax({
            type : 'POST',
            url : 'choosetopic.php',
            data: {
              kendala : 'kendali emosi',
              index: indexkeluhan
            },
          success : function(data){
                      alert(data);
          },
          error : function(XMLHttpRequest, textStatus, errorThrown) 
          {
            // print ("Error Occured");
          }
          });
        }
        else
        {
          status6 = "false";
          $("#segment-topik-button-6").attr("value", "false");
          // indexkeluhan--;
          
          $(document).ready( function(){
              $.ajax({
                type : 'POST',
                url : 'removetopic.php',
                data: {
                kendala : 'kendali emosi',
                index: indexkeluhan

              },
              success : function(data){
                       alert(data);
              },
              error : function(XMLHttpRequest, textStatus, errorThrown) 
              {
                // alert ("Error Occured");
              }
            });

          });
        }
      })
      $("#segment-topik-button-7").click(function(){
        $("#segment-topik-button-7").toggleClass("active-button");

        var status7 = $("#segment-topik-button-7").attr("value");
        indexkeluhan++;
        
        if(status7 == "false")
        {
          $("#segment-topik-button-7").attr("value", "true");

          $.ajax({
            type : 'POST',
            url : 'choosetopic.php',
            data: {
              kendala : 'kesepian',
              index: indexkeluhan
            },
          success : function(data){
                      alert(data);
          },
          error : function(XMLHttpRequest, textStatus, errorThrown) 
          {
            // print ("Error Occured");
          }
          });
        }
        else
        {
          status7 = "false";
          $("#segment-topik-button-7").attr("value", "false");
          // indexkeluhan--;
          
          $(document).ready( function(){
              $.ajax({
                type : 'POST',
                url : 'removetopic.php',
                data: {
                kendala : 'kesepian',
                index: indexkeluhan
              },
              success : function(data){
                       alert(data);
              },
              error : function(XMLHttpRequest, textStatus, errorThrown) 
              {
                // alert ("Error Occured");
              }
            });

          });
        }
      })
      $("#segment-topik-button-8").click(function(){
        $("#segment-topik-button-8").toggleClass("active-button");

        var status8 = $("#segment-topik-button-8").attr("value");
        indexkeluhan++;
        
        if(status8 == "false")
        {
          $("#segment-topik-button-8").attr("value", "true");

          $.ajax({
            type : 'POST',
            url : 'choosetopic.php',
            data: {
              kendala : 'seksual',
              index: indexkeluhan
            },
          success : function(data){
                      alert(data);
          },
          error : function(XMLHttpRequest, textStatus, errorThrown) 
          {
            // print ("Error Occured");
          }
          });
        }
        else
        {
          status8 = "false";
          $("#segment-topik-button-8").attr("value", "false");
          // indexkeluhan--;
          
          $(document).ready( function(){
              $.ajax({
                type : 'POST',
                url : 'removetopic.php',
                data: {
                kendala : 'seksual',
                index: indexkeluhan
              },
              success : function(data){
                       alert(data);
              },
              error : function(XMLHttpRequest, textStatus, errorThrown) 
              {
                // alert ("Error Occured");
              }
            });

          });
        }
      })
      $("#segment-topik-button-9").click(function(){
        $("#segment-topik-button-9").toggleClass("active-button");

        var status9 = $("#segment-topik-button-9").attr("value");
        indexkeluhan++;
        
        if(status9 == "false")
        {
          $("#segment-topik-button-9").attr("value", "true");

          $.ajax({
            type : 'POST',
            url : 'choosetopic.php',
            data: {
              kendala : 'keluarga',
              index: indexkeluhan
            },
          success : function(data){
                      alert(data);
          },
          error : function(XMLHttpRequest, textStatus, errorThrown) 
          {
            // print ("Error Occured");
          }
          });
        }
        else
        {
          status9 = "false";
          $("#segment-topik-button-9").attr("value", "false");
          // indexkeluhan--;
          
          $(document).ready( function(){
              $.ajax({
                type : 'POST',
                url : 'removetopic.php',
                data: {
                kendala : 'keluarga',
                index : indexkeluhan
              },
              success : function(data){
                       alert(data);
              },
              error : function(XMLHttpRequest, textStatus, errorThrown) 
              {
                // alert ("Error Occured");
              }
            });

          });
        }
      })
      $("#segment-topik-button-10").click(function(){
        $("#segment-topik-button-10").toggleClass("active-button");

        var status10 = $("#segment-topik-button-10").attr("value");
        indexkeluhan++;
        
        if(status10 == "false")
        {
          $("#segment-topik-button-10").attr("value", "true");

          $.ajax({
            type : 'POST',
            url : 'choosetopic.php',
            data: {
              kendala : 'kecemasan',
              index: indexkeluhan
            },
          success : function(data){
                      alert(data);
          },
          error : function(XMLHttpRequest, textStatus, errorThrown) 
          {
            // print ("Error Occured");
          }
          });
        }
        else
        {
          status10 = "false";
          $("#segment-topik-button-10").attr("value", "false");
          // indexkeluhan--;
          
          $(document).ready( function(){
              $.ajax({
                type : 'POST',
                url : 'removetopic.php',
                data: {
                kendala : 'kecemasan',
                index: indexkeluhan
              },
              success : function(data){
                       alert(data);
              },
              error : function(XMLHttpRequest, textStatus, errorThrown) 
              {
                // alert ("Error Occured");
              }
            });

          });
        }
      })
      $("#segment-topik-button-11").click(function(){
        $("#segment-topik-button-11").toggleClass("active-button");

        var status11 = $("#segment-topik-button-11").attr("value");
        indexkeluhan++;
        
        if(status11 == "false")
        {
          $("#segment-topik-button-11").attr("value", "true");

          $.ajax({
            type : 'POST',
            url : 'choosetopic.php',
            data: {
              kendala : 'kecanduan',
              index: indexkeluhan
            },
          success : function(data){
                      alert(data);
          },
          error : function(XMLHttpRequest, textStatus, errorThrown) 
          {
            // print ("Error Occured");
          }
          });
        }
        else
        {
          status11 = "false";
          $("#segment-topik-button-11").attr("value", "false");
          // indexkeluhan--;
          
          $(document).ready( function(){
              $.ajax({
                type : 'POST',
                url : 'removetopic.php',
                data: {
                kendala : 'kecanduan',
                index: indexkeluhan
              },
              success : function(data){
                       alert(data);
              },
              error : function(XMLHttpRequest, textStatus, errorThrown) 
              {
                // alert ("Error Occured");
              }
            });

          });
        }
      })
      $("#segment-topik-button-12").click(function(){
        $("#segment-topik-button-12").toggleClass("active-button");

        var status12 = $("#segment-topik-button-12").attr("value");
        indexkeluhan++;
        
        if(status12 == "false")
        {
          $("#segment-topik-button-12").attr("value", "true");

          $.ajax({
            type : 'POST',
            url : 'choosetopic.php',
            data: {
              kendala : 'hubungan sosial',
              index: indexkeluhan
            },
          success : function(data){
                      alert(data);
          },
          error : function(XMLHttpRequest, textStatus, errorThrown) 
          {
            // print ("Error Occured");
          }
          });
        }
        else
        {
          status12 = "false";
          $("#segment-topik-button-12").attr("value", "false");
          // indexkeluhan--;
          
          $(document).ready( function(){
              $.ajax({
                type : 'POST',
                url : 'removetopic.php',
                data: {
                kendala : 'hubungan sosial',
                index: indexkeluhan
              },
              success : function(data){
                       alert(data);
              },
              error : function(XMLHttpRequest, textStatus, errorThrown) 
              {
                // alert ("Error Occured");
              }
            });

          });
        }
      })
      $("#segment-topik-button-13").click(function(){
        $("#segment-topik-button-13").toggleClass("active-button");

        var status13 = $("#segment-topik-button-13").attr("value");
        indexkeluhan++;
        
        if(status13 == "false")
        {
          $("#segment-topik-button-13").attr("value", "true");

          $.ajax({
            type : 'POST',
            url : 'choosetopic.php',
            data: {
              kendala : 'gangguan pola hidup',
              index: indexkeluhan
            },
          success : function(data){
                      alert(data);
          },
          error : function(XMLHttpRequest, textStatus, errorThrown) 
          {
            // print ("Error Occured");
          }
          });
        }
        else
        {
          status13 = "false";
          $("#segment-topik-button-13").attr("value", "false");
          // indexkeluhan--;
          
          $(document).ready( function(){
              $.ajax({
                type : 'POST',
                url : 'removetopic.php',
                data: {
                kendala : 'gangguan pola hidup',
                index: indexkeluhan
              },
              success : function(data){
                       alert(data);
              },
              error : function(XMLHttpRequest, textStatus, errorThrown) 
              {
                // alert ("Error Occured");
              }
            });

          });
        }
      })
      $("#segment-topik-button-14").click(function(){
        $("#segment-topik-button-14").toggleClass("active-button");

        var status14 = $("#segment-topik-button-14").attr("value");
        indexkeluhan++;
        
        if(status14 == "false")
        {
          $("#segment-topik-button-14").attr("value", "true");

          $.ajax({
            type : 'POST',
            url : 'choosetopic.php',
            data: {
              kendala : 'lain-lain',
              index: indexkeluhan
            },
          success : function(data){
                      alert(data);
          },
          error : function(XMLHttpRequest, textStatus, errorThrown) 
          {
            // print ("Error Occured");
          }
          });
        }
        else
        {
          status14 = "false";
          $("#segment-topik-button-14").attr("value", "false");
          // indexkeluhan--;
          
          $(document).ready( function(){
              $.ajax({
                type : 'POST',
                url : 'removetopic.php',
                data: {
                kendala : 'lain-lain',
                index: indexkeluhan
              },
              success : function(data){
                       alert(data);
              },
              error : function(XMLHttpRequest, textStatus, errorThrown) 
              {
                // alert ("Error Occured");
              }
            });

          });
        }
      })

      
      $("#segment-7-container-content-1-button").click(function(){
        $("#segment-7-container-content-1").toggleClass("segment-7-container-content-active");
        if($("#segment-7-container-content-1-button").text == "X"){
          $("#segment-7-container-content-1-button").text = "+";
        }else{
          document.getElementById('segment-7-container-content-1-button').innerHTML='X';
          $("#segment-7-container-content-1-button").text = "X";
        }
      })

      $("#segment-7-container-content-2-button").click(function(){
        $("#segment-7-container-content-2").toggleClass("segment-7-container-content-active");
        if($("#segment-7-container-content-2-button").text == "X"){
          $("#segment-7-container-content-2-button").text = "+";
        }else{
          document.getElementById('segment-7-container-content-2-button').innerHTML='X';
          $("#segment-7-container-content-2-button").text = "X";
        }
      })

      $("#segment-7-container-content-3-button").click(function(){
        $("#segment-7-container-content-3").toggleClass("segment-7-container-content-active");
        if($("#segment-7-container-content-3-button").text == "X"){
          $("#segment-7-container-content-3-button").text = "+";
        }else{
          document.getElementById('segment-7-container-content-3-button').innerHTML='X';
          $("#segment-7-container-content-3-button").text = "X";
        }
      })

      $("#segment-7-container-content-4-button").click(function(){
        $("#segment-7-container-content-4").toggleClass("segment-7-container-content-active");
        if($("#segment-7-container-content-4-button").text == "X"){
          $("#segment-7-container-content-4-button").text = "+";
        }else{
          document.getElementById('segment-7-container-content-4-button').innerHTML='X';
          $("#segment-7-container-content-4-button").text = "X";
        }
      })
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