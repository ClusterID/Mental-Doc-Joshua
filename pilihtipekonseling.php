<?php
    session_start();
    
    $_SESSION["tipekonseling"] = $_POST["tipekonseling"];
    print_r($_SESSION);
?>