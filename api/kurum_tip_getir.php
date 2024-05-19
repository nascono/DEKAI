<?php
session_start();
header('Content-Type: text/html; charset=utf-8');
if(!isset($_SESSION["username"])){exit();}
echo($_SESSION["kurumtipi"]);

?>