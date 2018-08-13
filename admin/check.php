<?php include("config.php"); ?>
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

if (isset($_POST["sendpostbtn"])) {
  if(empty($_POST["titlepost"]) || empty($_POST["contentpost"])){
    header('location:addpost.php?empty=1010');
    exit;
  }
  else {
    $posttitle=$_POST["titlepost"];
    $postcontent=$_POST["contentpost"];
    $query="INSERT INTO `post` (`id`, `title`, `content`) VALUES (NULL, '".$posttitle."', '".$postcontent."');";
    $sendquery=mysqli_query($conn,$query);
    if($sendquery){
      header("location:addpost.php?ok=1010");
      exit;
    }
    else {
      header("location:addpost.php?error=1010");
      exit;
    }
  }
}

#----- post delet

if(isset($_GET["delpost"])){
  $postid=$_GET["delpost"];
  $postdel="DELETE FROM `post` WHERE `post`.`id` = $postid";
  $postquery=mysqli_query($conn,$postdel);
  if($postquery){
    header("location:dashboard.php?okdel=1010");
    exit;
  }
  else {
    header("location:dashboard.php?nodel=1010");
    exit;
  }
}

#----- update post

if(isset($_POST["updatepostbtn"])){
  if(empty($_POST["editedtitle"]) || empty($_POST["editedcontent"])){
    header("location:editepost.php?empty=1010");
    exit;
  }
  else{
    $newtitle=$_POST["editedtitle"];
    $newcontent=$_POST["editedcontent"];
    $postid=$_POST["updatepostid"];
    $editpost="UPDATE `post` SET `title` = '".$newtitle."', `content` = '".$newcontent."' WHERE `post`.`id` = ".$postid.";";
    $postquery=mysqli_query($conn,$editpost);
    if($postquery){
      header("location:editepost.php?okupdate=1010");
      exit;
    }
    else {
      header("location:editepost.php?noupdate=1010");
      exit;
    }
  }
}


 ?>
