<?php
session_start();
if(!isset($_GET["username"])){exit();}
if(!isset($_GET["password"])){exit();}
include 'db.php';
$veri = mysqli_fetch_assoc(mysqli_query($db,"SELECT * FROM users WHERE username = '".$_GET["username"]."'"));
if(!$veri){exit();}

if($veri["password"]==$_GET["password"])
{
$_SESSION["username"]=$veri["username"];
$_SESSION["kurumtipi"]=$veri["kurumtipi"];
echo "ok";
}
else
{
    echo "error";
}


?>