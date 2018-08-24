<?php
session_start();
$_SESSION['msg'];
$_SESSION['type_msg'];
include("config.php");
include("../func/func.php");

?>
<?php

if(isset($_GET["exit"])) {
  setcookie("admin","admin",time()-(86400*7));
  header("location:../index.php");
  exit;
}
#--- login admin

if(isset($_POST["loginbtn"])){
  if(empty($_POST["username"]) || empty($_POST["password"])){
    send_message('empty');
    header("location:login.php");
    exit;
  }
  $query="SELECT * FROM `user`";
  $sqlquery=mysqli_query($conn,$query);
  while($userfetch=mysqli_fetch_assoc($sqlquery)){
    if($_POST["username"]==$userfetch['username'] && $_POST["password"]==$userfetch['password']){
      $_SESSION['username']=$userfetch['username'];
      $_SESSION['password']=$userfetch['password'];
      $_SESSION['id_user']=$userfetch['id'];
      $_SESSION['lname']=$userfetch['lname'];
      $_SESSION['fname']=$userfetch['fname'];
      $_SESSION['img_user']=$userfetch['img'];
      $_SESSION['about_user']=$userfetch['about'];
      header("location:dashboard.php");
      exit;
    }
  }
    send_message('false');
    header("location:login.php");
    exit;
}

if (isset($_POST["sendpostbtn"])) {
  if(empty($_POST["titlepost"]) || empty($_POST["contentpost"])){
    send_message('empty');
    header('location:addpost.php');
    exit;
  }
  else {
    $posttitle=$_POST["titlepost"];
    $postcontent=$_POST["contentpost"];
    $query="INSERT INTO `post` (`id`, `title`, `content`) VALUES (NULL, '".$posttitle."', '".$postcontent."');";
    $sendquery=mysqli_query($conn,$query);
    if($sendquery){
      send_message('ok_send');
      header("location:addpost.php");
      exit;
    }
    else {
      send_message('no_send');
      header("location:addpost.php");
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
    send_message('ok_del');
    header("location:dashboard.php");
    exit;
  }
  else {
    send_message('no_del');
    header("location:dashboard.php");
    exit;
  }
}

#----- update post

if(isset($_POST["updatepostbtn"])){
  if(empty($_POST["editedtitle"]) || empty($_POST["editedcontent"])){
    send_message('empty');
    header("location:editepost.php");
    exit;
  }
  else{
    $newtitle=$_POST["editedtitle"];
    $newcontent=$_POST["editedcontent"];
    $postid=$_POST["updatepostid"];
    $editpost="UPDATE `post` SET `title` = '".$newtitle."', `content` = '".$newcontent."' WHERE `post`.`id` = ".$postid.";";
    $postquery=mysqli_query($conn,$editpost);
    if($postquery){
      send_message('ok_up');
      header("location:editepost.php");
      exit;
    }
    else {
      send_message('no_up');
      header("location:editepost.php");
      exit;
    }
  }
}


#--------edit user information

if(isset($_POST['btn_user_edit'])){
  if(empty($_POST['user_edit']) || empty($_POST['lname_edit']) || empty($_POST['fname_edit']) || empty($_POST['pass_edit']) || empty($_POST['about_edit'])){
    send_message('empty');
    header("location:user-setting.php");
    exit;
  }
  else{
    $new_username=$_POST['user_edit'];
    $new_lname=$_POST['lname_edit'];
    $new_fname=$_POST['fname_edit'];
    $new_pass=$_POST['pass_edit'];
    $new_about=$_POST['about_edit'];
    $id=$_SESSION['id_user'];
    $query="UPDATE `user` SET `username` = '".$new_username."', `password` = '".$new_pass."', `lname` = '".$new_lname."', `fname` = '".$new_fname."', `img` = '1', `about` = '".$new_about."' WHERE `user`.`id` = $id;";
    $sendquery=mysqli_query($conn,$query);
    if($sendquery){
      $_SESSION['username']=$new_username;
      $_SESSION['password']=$new_pass;
      $_SESSION['lname']=$new_lname;
      $_SESSION['fname']=$new_fname;
    //  $_SESSION['img_user']=
      $_SESSION['about_user']=$new_about;
      send_message('ok_up');
      header("location:user-setting.php");
      exit;
    }
    else{
      send_message('no_up');
      header("location:user-setting.php");
      exit;
    }
  }
}

#------ edit special post

    #----- edit wellcome post
if(isset($_POST['btn_wel_edit'])){
  if(empty($_POST['edit_title_wel']) || empty($_POST['edit_content_wel'])){
    send_message('empty');
    header("location:special-posts.php");
    exit;
  }
  else{
    $new_title=$_POST['edit_title_wel'];
    $new_content=$_POST['edit_content_wel'];
    $query="UPDATE `welcome` SET `title` = '".$new_title."', `content` = '".$new_content."' WHERE `welcome`.`id` = 1;";
    $sendquery=mysqli_query($conn,$query);
    if($sendquery){
      send_message('ok_up');
      header("location:special-posts.php");
      exit;
    }
    else{
      send_message('no_up');
      header("location:special-posts.php");
      exit;
    }
  }
}

    #----- edit about post
if(isset($_POST['btn_about_edit'])){
  if(empty($_POST['edit_content_about'])){
    send_message('empty');
    header("location:special-posts.php");
    exit;
  }
  else{
    $new_content=$_POST['edit_content_about'];
    $query="UPDATE `about_us` SET `content` = '".$new_content."' WHERE `about_us`.`id` = 1;";
    $sendquery=mysqli_query($conn,$query);
    if($sendquery){
      send_message('ok_up');
      header("location:special-posts.php");
      exit;
    }
    else{
      send_message('no_up');
      header("location:special-posts.php");
      exit;
    }
  }
}

 ?>
