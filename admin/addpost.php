<?php include("header-panel.php") ?>

    <h2 class="text-center">افزودن پست جدید</h2>
    <div class="jumbotron">
      <form action="check.php" method="post">
        <?php
        if(isset($_SESSION['msg'])){
          show_message();
        }
         ?>

        <div class="form-group text-right">
          <label for="title1">عنوان:</label>
          <input type="text" name="titlepost" id="title1" class="form-control">
        </div><!--title-->
        <div class="form-group text-right">
          <label for="content1">متن:</label>
          <textarea name="contentpost" id="content1" class="form-control" rows="8"></textarea>
        </div><!-- content-->
        <button type="submit" name="sendpostbtn" class="btn btn-success btn-block">ارسال</button>
      </form>
    </div>
  </div>
  </body>
</html>
