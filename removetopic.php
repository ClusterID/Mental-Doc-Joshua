<?php
session_start();

// global $indexkeluhan = $_POST["index"];
unset($_SESSION["kendalas"][$_POST["index"]]);
print_r($_SESSION);
?> 