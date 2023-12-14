<?php
    require_once("connection.php");

    // $result = mysqli_fetch_array(mysqli_query($conn,"SELECT * from user where id_user=".$_SESSION["loggedIn"]["ID"]));
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
        $phonenumberloggedin = $row["phone_number"];
      }
    } else {
      echo "0 results";
    }

    if(isset($_POST["buttonsave"])){
        $newfirstname = $_POST["firstname"];
        $newsurname = $_POST["surname"];
        $newnik = $_POST["nik"];
        $newbirthdate = date('m-d-Y', strtotime($_POST['birthdate']));;
        $newcity = $_POST["city"];
        $newaddress = $_POST["address"];
        $newjeniskelamin = $_POST["jeniskelamin"];
        $newphonenumber = $_POST["phonenumber"];

        $insert_query = "UPDATE user SET firstname = '$newfirstname', surname = '$newsurname', nik = '$newnik', birthdate = '$newbirthdate', city = '$newcity', address = '$newaddress', jenis_kelamin = '$newjeniskelamin', phone_number = '$newphonenumber' WHERE id_user = '$sedanglogin'";
          $res = $conn->query($insert_query);
          mysqli_query($conn,"UPDATE user SET firstname = '$newfirstname', surname = '$newsurname', nik = '$newnik', birthdate = '$newbirthdate', city = '$newcity', address = '$newaddress', jenis_kelamin = '$newjeniskelamin', phone_number = '$newphonenumber' WHERE id_user = '$sedanglogin'");
          $_SESSION["message"] = "Berhasil update profile";
          header("Location: homeLogin.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="home.css">
</head>
<?php 
  if(isset($_SESSION["isAuth"]) || isset($_SESSION["isAuthAdmin"]))
  {
?>
<body>
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
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
        <span><?php echo $usernameloggedin ?></span>
        <img src="" alt="">
        <button id="logout">Logout</button>
        </div>
    </div>
</nav>
<div></div>
<div>
    <div>
        <div onclick="editProfileButton()">Edit Profile</div>
        <div>Schedule Booking</div>
        <div onclick="historyButton()">History</div>
        <div>Password & Security</div>
    </div>
    <div id="editprofile" class="hidden">
        <div>Edit Profile</div>
        <form action="#" method="post" style=" justify-content: center; display: flex; flex-direction: column;">
            <div style=" display:flex; flex-direction: row; margin-left:auto; margin-right:auto;">
            <div style="margin-right: 10px;">
                <h1>Personal</h1>
                <div style="justify-content: space-between; display:flex">
                    <label for="FirstName">First Name</label>
                    <input type="text" value="<?php echo $firstnameloggedin?>" name="firstname">
                </div>
                <div style="justify-content: space-between; display:flex">
                    <label for="Surname">Surname</label>
                    <input type="text" value="<?php echo $surnameloggedin?>" name="surname">
                </div>
                <div style="justify-content: space-between; display:flex">
                    <label for="NIK">NIK</label>
                    <input type="text" value="<?php echo $nikloggedin?>" name="nik">
                </div>
                <div style="justify-content: space-between; display:flex">
                    <label for="DoB">Date of birth</label>
                    <input type="date" name="birthdate">
                </div>
                <div style="justify-content: space-between; display:flex">
                    <label for="JenisKelamin">Jenis Kelamin</label>
                    <input type="text" value="<?php echo $jeniskelaminloggedin?>" name="jeniskelamin">
                </div>
            </div>
            <div style="margin-left: 10px;">
                <h1>Contact</h1>
                <div>
                    <label for="Email">
                        <input type="text" value="<?php echo $emailloggedin?>" name="email">
                    </label>
                </div>
                <div>
                    <label for="PhoneNumber">
                        <input type="number" value="<?php echo $phonenumberloggedin?>" name="phonenumber">
                    </label>
                </div>
                <div>
                    <label for="City">
                        <input type="text" value="<?php echo $cityloggedin?>" name="city">
                    </label>
                </div>
                <div>
                    <label for="Address">
                        <input type="text" value="<?php echo $addressloggedin?>" name="address">
                    </label>
                </div>
            </div>
       
            </div>
            <button type="submit" name="buttonsave" style="margin-top: 10px; width: fit-content; margin-left:auto; margin-right:auto; background: #30ADBE; border:none; border-radius:8pt;">Save</button>
        </form>
    </div>
    
    <div>
        <div>Schedule Booking</div>
    </div>

    <div id="history" class="hidden">
        <div>History</div>
        <table style="border: 1px solid black; border-collapse: collapse; width: 100%;">
            <tr>
                <th>Date</th>
                <th>Keterangan</th>
            </tr>
            <tr>
                <td>date here</td>
                <td>keterangan here</td>
            </tr>
        </table>
    </div>
    
    <div>
        <div>Password&Security</div>
    </div>
</div>
</body>

<script>
    $("#hist_btn").click(function(){
      $("#history").toggleClass("hidden");
      console.log("x")
    })
    function historyButton(){
        document.getElementById('history').classList.toggle('hidden');
    }
    function editProfileButton(){
        document.getElementById('editprofile').classList.toggle('hidden');
    }
    
</script>
<style>
    
table {
    width: 100%;
    border-collapse: collapse;
}

table, th, td {
    border: 1px solid black;
    padding: 5px;
    text-align: center;
}

th {
    background-color: #f2f2f2;
}
</style>
<?php 
  }
  else
  {
    header("Location: unauthorizedpage.php");
  }
?>
</html>