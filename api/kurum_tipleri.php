<?php
//header('Access-Control-Allow-Origin: *');

session_start();
include 'db.php';
//mysqli_set_charset($db,"utf8");

if(!isset($_SESSION["username"])){exit();}
$veri = mysqli_fetch_all(mysqli_query($db,"SELECT kurumtipi FROM kurumtipleri"));
$yeniveri = array();
for($i = 0; $i<sizeof($veri); $i++){if($veri[$i][0]!=$_SESSION["kurumtipi"]){$yeniveri[sizeof($yeniveri)] = $veri[$i][0];}}

echo json_encode($yeniveri);

?>