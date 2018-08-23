<?php
session_start();
  if(!$_SESSION['username']){
    header("location:../index.php");
    exit;
  }
 ?>

<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>پنل مدیریت</title>
    <meta name="viewport" content="width=device-width , initial-scale=1">
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <script src="../script/jquery.min.js"></script>
    <script src="../script/bootstrap.js"></script>
    <link rel="stylesheet" href="../font/font.css">
  </head>
  <body>
<style>
@font-face {
  font-family: Vazir;
  src: url('../fonts/Vazir.eot');
  src: url('../fonts/Vazir.eot?#iefix') format('embedded-opentype'),
       url('../fonts/Vazir.woff') format('woff'),
       url('../fonts/Vazir.ttf') format('truetype');
  font-weight: normal;
}

@font-face {
  font-family: Vazir;
  src: url('../fonts/Vazir-Bold.eot');
  src: url('../fonts/Vazir-Bold.eot?#iefix') format('embedded-opentype'),
       url('../fonts/Vazir-Bold.woff') format('woff'),
       url('../fonts/Vazir-Bold.ttf') format('truetype');
  font-weight: bold;
}

@font-face {
  font-family: Vazir;
  src: url('../fonts/Vazir-Light.eot');
  src: url('../fonts/Vazir-Light.eot?#iefix') format('embedded-opentype'),
       url('../fonts/Vazir-Light.woff') format('woff'),
       url('../fonts/Vazir-Light.ttf') format('truetype');
  font-weight: 300;
}

  *{
    font-family: 'Vazir';
  }

</style>
  <div class="container">
    <nav class="navbar navbar-expand bg-dark navbar-dark my-3">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a href="dashboard.php" class="nav-link ">صفحه اصلی</a>
        </li>
        <li class="nav-item">
          <a href="addpost.php" class="nav-link">افزودن پست جدید</a>
        </li>
        <li class="nav-item">
          <a href="manage-posts.php" class="nav-link">مدیریت پست ها</a>
        </li>
        <li class="nav-item">
          <a href="special-posts.php" class="nav-link">مدیریت بخش های ویژه</a>
        </li>
        <li class="nav-item">
          <a href="user-setting.php" class="nav-link">تنظیمات کاربری</a>
        </li>
        <li class="nav-item">
          <a href="exit.php" class="nav-link">خروج</a>
        </li>
      </ul>
    </nav>
