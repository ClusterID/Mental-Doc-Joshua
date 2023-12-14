<?php
    if(isset($_POST["backtologin"]))
    {
        header("Location: login.php");
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="text-align: center; padding-top: 10%; height: 30vh">You are not authenticated to view this page, please log-in</h1>
    <form action="#" method="POST">
    <button type="submit" name="backtologin" style="width: fit-content; border-radius: 8pt; background-color: #30ADBE; color: white; border: none; padding: 5px 25px;">Back to Login</button>
    </form>
    
</body>
</html>