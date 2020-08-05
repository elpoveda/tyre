<?php 
include("../database/database.php");
require_once ('../../mobile/Mobile_Detect.php');
$detect = new Mobile_Detect();
session_start();
$sesion = '';
if(isset($_SESSION['sesion'])){
  $sesion = $_SESSION['sesion'];
}
  ?>