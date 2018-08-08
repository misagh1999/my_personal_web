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
        <li class="nav-item active">
          <a href="addpost.php" class="nav-link">افزودن پست جدید</a>
        </li>
        <li class="nav-item">
          <a href="editepost.php" class="nav-link">ویرایش پست ها</a>
        </li>
        <li class="nav-item">
          <a href="../index.php" class="nav-link">خروج</a>
        </li>
      </ul>
    </nav>
    <h2 class="text-center">افزودن پست جدید</h2>
    <div class="jumbotron">
      <form class="" action="index.html" method="post">
        <div class="form-group text-right">
          <label for="title1">عنوان:</label>
          <input type="text" name="title" id="title1" class="form-control">
        </div><!--title-->
        <div class="form-group text-right">
          <label for="content1">متن:</label>
          <textarea name="content" id="content1" class="form-control" rows="8"></textarea>
        </div><!-- content-->
        <button type="submit" name="submit" class="btn btn-success btn-block">ارسال</button>
      </form>
    </div>
  </div>
  </body>
</html>
