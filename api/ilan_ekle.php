<?php
session_start();
include 'db.php';

if(!isset($_SESSION["username"])){exit();}
if(!isset($_GET["istenenkurum"])){exit();}
if(!isset($_GET["aciklama"])){exit();}
if(!isset($_GET["telno"])){exit();}
if(!isset($_GET["aciliyet"])){exit();}
if(!isset($_GET["konum"])){exit();}
date_default_timezone_set('Europe/Istanbul');
$tarih = date("d/m/Y H:i");
$sql = "INSERT INTO `ilanlar` (`id`, `verenkurum`, `istenenkurum`, `aciklama`, `telno`, `aciliyet`, `ilandurumu`, `tarih`, `konum`) VALUES (NULL, '".$_SESSION["kurumtipi"]."', '".$_GET["istenenkurum"]."', '".$_GET["aciklama"]."', '".$_GET["telno"]."', '".$_GET["aciliyet"]."', 'yeni', '".$tarih."','".$_GET["konum"]."');";
mysqli_query($db,$sql);
echo "ok";
?>