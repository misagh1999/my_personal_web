<!DOCTYPE html>
<html lang="fa" dir="rtl">
  <head>
    <meta charset="utf-8">
    <title>صفحه ورود</title>
    <meta name="viewport" content="width=device-width , initial-scale=1">
    <link rel="stylesheet" href="../style/bootstrap.min.css">
    <script src="script/jquery.min.js"></script>
    <script src="script/bootstrap.js"></script>
    <link rel="stylesheet" href="font/font.css">
  </head>
  <body>
<style>
  *{
    font-family: 'Vazir';
  }
</style>

  <div class="container">
    <div class="jumbotron my-5 bg-light" style="border: red solid 2px;">
    <h1 class="text-center">صفحه ورود</h1>
    <form class="" action="check.php" method="post">
      <div class="form-group text-right">
        <label for="usr">نام کاربری:</label>
        <input type="text" name="username" class="form-control" id="usr" placeholder="نام کاربری">
      </div><!--username-->
      <div class="form-group text-right">
        <label for="pswd">رمز عبور:</label>
        <input type="password" name="password" class="form-control" id="pswd" placeholder="رمز عبور">
      </div>
      <button type="submit" name="button" class="btn btn-success btn-block">ورود</button>
      <a href="../index.php" class="btn btn-secondary btn-block">بازگشت به خانه</a>
    </form>
  </div>
  </div>

  </body>
</html>
