<?php

if(isset($_GET["exit"])) {
  setcookie("admin","admin",time()-(86400*7));
  header("location:../index.php");
  exit;
}

if(isset($_POST["loginbtn"])){
  if(empty($_POST["username"]) || empty($_POST["password"])){
    header("location:login.php?empty=1010");
    exit;
  }
  if($_POST["username"]=='admin' && $_POST["password"]=='admin'){
    setcookie("admin","admin",time()+(86400*7));
    header("location:dashboard.php");
    exit;
  }
  else {
    header("location:login.php?error=1010");
    exit;
  }
}


 ?>
