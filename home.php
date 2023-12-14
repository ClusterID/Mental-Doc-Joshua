<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="home.css">
</head>
<body id="bodyHome">
  
  <div id="segment-topik" class="hidden">
    <div id="segment-topik-container" class="container-kategori-topik">
      <button id="segment-topik-close-button" class="kategori-topik-close-button" onclick="toggleTopik()">X</button>
      <div id="segment-topik-text-1" class="title">Choose the topic you want to discuss</div>
      <div id="segment-topik-text-2">You can choose more than 1 topic</div>
      <div id="segment-topik-container-button-container" class="kategori-topik-pilihan">
        <button id="segment-topik-button-1" class="segment-topik-button-opsi" onclick="buttonOpsi1()">Pekerjaan</button>
        <button id="segment-topik-button-2" class="segment-topik-button-opsi" onclick="buttonOpsi2()">Percintaan</button>
        <button id="segment-topik-button-3" class="segment-topik-button-opsi" onclick="buttonOpsi3()">Pendidikan</button>
        <button id="segment-topik-button-4" class="segment-topik-button-opsi" onclick="buttonOpsi4()">Prundungan</button>
        <button id="segment-topik-button-5" class="segment-topik-button-opsi" onclick="buttonOpsi5()">Stress</button>
        <button id="segment-topik-button-6" class="segment-topik-button-opsi" onclick="buttonOpsi6()">Kendali Emosi</button>
        <button id="segment-topik-button-7" class="segment-topik-button-opsi" onclick="buttonOpsi7()">Kesepian</button>
        <button id="segment-topik-button-8" class="segment-topik-button-opsi" onclick="buttonOpsi8()">Seksual</button>
        <button id="segment-topik-button-9" class="segment-topik-button-opsi" onclick="buttonOpsi9()">Keluarga</button>
        <button id="segment-topik-button-10" class="segment-topik-button-opsi" onclick="buttonOpsi10()">Kecemasan</button>
        <button id="segment-topik-button-11" class="segment-topik-button-opsi" onclick="buttonOpsi11()">Kecanduan</button>
        <button id="segment-topik-button-12" class="segment-topik-button-opsi" onclick="buttonOpsi12()">Hubgunan Sosial</button>
        <button id="segment-topik-button-13" class="segment-topik-button-opsi" onclick="buttonOpsi13()">Gangguan Pola Hidup</button>
        <button id="segment-topik-button-14" class="segment-topik-button-opsi" onclick="buttonOpsi14()">Lainnya</button>
      </div>
      <button id="segment-topik-submit-button" class="button-1">Choose Topic ></button>
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
      <a href="login.php">
        <button class="button-1">LOGIN</button>
      </a>
    </div>
    </div>
  </nav>

  <div id="segment-1-container" class="segment">
    <div id="segment-1-container-content">
      <div id="segment-1-container-content-text-1">Menyediakan Konseling Secara Gratis Untuk Memberikan Anda Solusi</div>
      <div id="segment-1-container-content-text-2">Curahkan Keluhanmu, Kembalikan Bahagiamu.</div>
      <button id="segment-1-container-content-button" class="button-1" onclick="toggleTopik()">Get a consultation</button>
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
      <div id="segment-6-container-content-3">
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
        <button id="segment-7-container-content-4-button" class="segment-7-button" onclick="segment7Button4()">+</button>
      </li>
    </ul>
  </div>


    <script src="js/bootstrap.js"></script>
    <script>
      function segment7Button1(){
        document.getElementById('segment-7-container-content-1').classList.toggle('segment-7-container-content-active');
        if(document.getElementById('segment-7-container-content-1-button').innerHTML=='X'){
          document.getElementById('segment-7-container-content-1-button').innerHTML='+';
        }else{
          document.getElementById('segment-7-container-content-1-button').innerHTML='X';
        }
      }
      function segment7Button2(){
        document.getElementById('segment-7-container-content-2').classList.toggle('segment-7-container-content-active');
        if(document.getElementById('segment-7-container-content-2-button').innerHTML=='X'){
          document.getElementById('segment-7-container-content-2-button').innerHTML='+';
        }else{
          document.getElementById('segment-7-container-content-2-button').innerHTML='X';
        }
      }
      function segment7Button3(){
        document.getElementById('segment-7-container-content-3').classList.toggle('segment-7-container-content-active');
        if(document.getElementById('segment-7-container-content-3-button').innerHTML=='X'){
          document.getElementById('segment-7-container-content-3-button').innerHTML='+';
        }else{
          document.getElementById('segment-7-container-content-3-button').innerHTML='X';
        }
      }
      function segment7Button4(){
        document.getElementById('segment-7-container-content-4').classList.toggle('segment-7-container-content-active');
        if(document.getElementById('segment-7-container-content-4-button').innerHTML=='X'){
          document.getElementById('segment-7-container-content-4-button').innerHTML='+';
        }else{
          document.getElementById('segment-7-container-content-4-button').innerHTML='X';
        }
      }

      function toggleTopik(){
        document.getElementById('segment-topik').classList.toggle('hidden');
      }

      function buttonOpsi1(){
        document.getElementById('segment-topik-button-1').classList.toggle('active-button');
      }

      function buttonOpsi2(){
        document.getElementById('segment-topik-button-2').classList.toggle('active-button');
      }
      
      function buttonOpsi3(){
        document.getElementById('segment-topik-button-3').classList.toggle('active-button');
      }
      
      function buttonOpsi4(){
        document.getElementById('segment-topik-button-4').classList.toggle('active-button');
      }
      
      function buttonOpsi5(){
        document.getElementById('segment-topik-button-5').classList.toggle('active-button');
      }
      
      function buttonOpsi6(){
        document.getElementById('segment-topik-button-6').classList.toggle('active-button');
      }
      
      function buttonOpsi7(){
        document.getElementById('segment-topik-button-7').classList.toggle('active-button');
      }
      
      function buttonOpsi8(){
        document.getElementById('segment-topik-button-8').classList.toggle('active-button');
      }
      
      function buttonOpsi9(){
        document.getElementById('segment-topik-button-9').classList.toggle('active-button');
      }
      
      function buttonOpsi10(){
        document.getElementById('segment-topik-button-10').classList.toggle('active-button');
      }
      
      function buttonOpsi11(){
        document.getElementById('segment-topik-button-11').classList.toggle('active-button');
      }
      
      function buttonOpsi12(){
        document.getElementById('segment-topik-button-12').classList.toggle('active-button');
      }
      
      function buttonOpsi13(){
        document.getElementById('segment-topik-button-13').classList.toggle('active-button');
      }
      
      function buttonOpsi14(){
        document.getElementById('segment-topik-button-14').classList.toggle('active-button');
      }

    </script>
</body>
</html>