<?php
session_start();

// global $indexkeluhan = $_POST["index"];
$_SESSION["kendalas"][$_POST["index"]] = $_POST["kendala"];
$countkendala = count($_SESSION["kendalas"]);

print_r($_SESSION);





?> 