<?php

session_start();
header('Content-Type: text/html; charset=utf-8');

if(!isset($_SESSION["username"])){exit();}
include 'db.php';
$veri = mysqli_fetch_all(mysqli_query($db,"SELECT * FROM ilanlar WHERE verenkurum = '".$_SESSION["kurumtipi"]."'"));

echo json_encode($veri);
?>