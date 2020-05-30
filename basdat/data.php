<?php
session_start();
require 'functions.php';
if (!isset($_SESSION["selesai"])) {
    header("Location: register.php");
    exit;
}





?>