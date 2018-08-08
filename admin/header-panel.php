<?php
  if(!isset($_COOKIE["admin"])){
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
          <a href="editepost.php" class="nav-link">ویرایش پست ها</a>
        </li>
        <li class="nav-item">
          <a href="<?php echo 'check.php?exit="3059"'  ?> class="nav-link">خروج</a>
        </li>
      </ul>
    </nav>
