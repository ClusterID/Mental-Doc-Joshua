<?php
    require_once("connection.php");

    $sqlpsikolog = "SELECT * FROM detail_counselor";
    $resultpsikolog = mysqli_query($conn, $sqlpsikolog);

    $totalresult = "SELECT COUNT(*) FROM DETAIL_COUNSELOR";
    $queryresult = mysqli_query($conn,$totalresult);
    $rowresult = mysqli_fetch_row($queryresult);

    if(isset($_POST["buttonsubmit"]))
    {
        if($_POST["namaKonselor"] != ""  || $_POST["spesialisKonselor"] != "" || $_POST["pengalamanKonselor"] != "")
        {
             $namakonselor = $_POST["namaKonselor"];
            $spesialiskonselor = $_POST["spesialisKonselor"];
            $pengalamankonselor = $_POST["pengalamanKonselor"];

            $angkapsikologbaru = $rowresult[0] + 1;
            $idpsikologbaru = 'C0'.$angkapsikologbaru;

            $insert_query = "INSERT INTO detail_counselor(id_counselor,nama, spesialis, pengalaman, jumlah_konsultasi, rating, foto) VALUES('$idpsikologbaru','$namakonselor', '$spesialiskonselor', '$pengalamankonselor', 0, 0, '')";
            $res = $conn->query($insert_query);
            mysqli_query($conn,"INSERT INTO detail_counselor(id_counselor,nama, spesialis, pengalaman, jumlah_konsultasi, rating, foto) VALUES('$idpsikologbaru','$namakonselor', '$spesialiskonselor', '$pengalamankonselor', 0, 0, '')");
            
            echo "
            <script type=\"text/javascript\">
                alert('Berhasil tambah psikolog')
            </script>
             ";
            header("Location: admin.php");
        }
        else
        {
            echo "
            <script type=\"text/javascript\">
                alert('Nama/Spesialis/Pengalaman wajib diisi')
            </script>
             ";
        }
        unset($_POST["buttonsubmit"]);
    }
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="home.css">
    <style>
        header{
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            padding: 10px;
        }
        form{
            display: flex;
            flex-direction: column;
            gap: 10px;
            padding-top: 10px;
        }
        form div{
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            width: 100%;
            margin-left: auto;
            margin-right: auto;
        }
        input{
            width: 200px;
        }
        table{
            padding: 2px;
        }
        th{
            border: 1px solid black;
        }
        td{
            border: 1px solid black;
        }
    </style>
</head>
<?php 
  if(isset($_SESSION["isAuthAdmin"]))
  {
?>
<script>
    // $("logout").click(function(){
        
    // })
</script>
<body>
    
    <header>
        <h2>Welcome Admin</h2>
        <button id="logout" class="button-1">Logout</button>
    </header>
    <div class="flex mx-auto flex-row justify-content-center p-5" style="gap:10px">
        <form action="#" method="POST">
            <div>
                <h3>Input Konselor</h3>
            </div>
            <div>
                <label for="namaKonselor">Nama Konselor</label>
                <input type="text" name="namaKonselor">
            </div>
            <div>
                <label for="specialisKonselor">Spesialis Konselor</label>
                <input type="text" name="spesialisKonselor">
            </div>
            <div>
                <label for="fotoKonselor">Foto Konselor</label>
                <input type="file" name="fotoKonselor">
            </div>
            <div>
                <label for="pengalamanKonselor">Pengalaman</label>
                <input type="text" name="pengalamanKonselor">
            </div>
            <div>
                <button name="buttonsubmit" class="button-1">Submit</button>
            </div>
        <div>
            <h3>List Konselor</h3>
            <table border="1px black">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nama</th>
                        <th>Spesialis</th>
                        <th>Pengalaman</th>
                        <th>Jumlah Konsultasi</th>
                        <th>Rating</th>
                        <th>Action</th>                        
                    </tr>
                <?php
                    if($resultpsikolog->num_rows == 0){
                ?>
                    <tr>
                        <td colspan="7" style="text-align: center;">Tidak ada Psikolog</td> 
                    </tr>
                </thead>
                <tbody>
                    <?php
                    }
                    else
                    {
                        while($row = mysqli_fetch_row($resultpsikolog)){
                    ?>
                    <tr>
                        <td><?= $row[0] ?></td>
                        <td><?= $row[1] ?></td>
                        <td><?= $row[2] ?></td>
                        <td><?= $row[3] ?></td>
                        <td><?= $row[4] ?></td>
                        <td><?= $row[5] ?></td>
                        <td>
                            <button type="submit" name="editpsikolog" value="<?= $row[0] ?>">Edit</button>
                            <button type="submit" name="deletepsikolog" value="<?= $row[0] ?>">Delete</button>
                        </td>
            </form>
                    </tr>
                    <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
<?php 
  }
  else
  {
    header("Location: unauthorizedpageadmin.php");
  }
?>
</html>