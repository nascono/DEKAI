<?php
session_start();
if(!isset($_SESSION["username"])){exit();}
if(!isset($_GET["id"])){exit();}

include 'db.php';
mysqli_query($db,"UPDATE `ilanlar` SET `ilandurumu` = 'devam' WHERE `ilanlar`.`id` = ".$_GET["id"]);
echo "ok";

?>