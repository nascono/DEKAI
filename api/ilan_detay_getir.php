<?php

session_start();
if(!isset($_SESSION["username"])){exit();}
if(!isset($_GET["id"])){exit();}
include 'db.php';

$veri = mysqli_fetch_all(mysqli_query($db,"SELECT * FROM ilanlar WHERE id = ".$_GET["id"]));

echo json_encode($veri);
?>