<?php include("header-panel.php") ?>
<?php include("config.php") ?>
    <h2 class="text-center">ویرایش پست ها</h2>
    <div class="jumbotron">
<?php
if(isset($_SESSION['msg'])){
  show_message();
}
?>
<?php
if(!isset($_GET["postid"])){
  header("location:dashboard.php");
  exit;
}
$postid=$_GET["postid"];
$postedit="SELECT * FROM `post` WHERE `id`=$postid";
$postquery=mysqli_query($conn,$postedit);
if($postquery){
  $postfetch=mysqli_fetch_assoc($postquery);

 ?>
      <form action="check.php" method="post">
        <div class="form-group text-right">
          <label for="title1">عنوان:</label>
          <input type="text" name="editedtitle" id="title1" class="form-control" value="<?php echo $postfetch["title"]; ?>">
        </div><!--title-->
        <input type="hidden" name="updatepostid" value="<?php echo $postfetch["id"]; ?>">
        <div class="form-group text-right">
          <label for="content1">متن:</label>
          <textarea name="editedcontent" id="content1" class="form-control" rows="8"><?php echo $postfetch["content"]; ?></textarea>
        </div><!-- content-->
        <button type="submit" name="updatepostbtn" class="btn btn-success btn-block">ارسال</button>
      </form>
    </div>
  </div>
<?php } ?>
  </body>
</html>
