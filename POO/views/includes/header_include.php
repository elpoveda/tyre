<?php 
  include("../database/database.php");
  session_start();
  $sesion = '';
  if(isset($_SESSION['sesion'])){
    $sesion = $_SESSION['sesion'];
  }
  ?>