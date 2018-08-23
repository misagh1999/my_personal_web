<?php
include("config.php");
include("header-panel.php");
$wel_query="SELECT * FROM `welcome`";
$wel_conn=mysqli_query($conn,$wel_query);
$welcome=mysqli_fetch_assoc($wel_conn);

$about_query="SELECT * FROM `about_us`";
$about_conn=mysqli_query($conn,$about_query);
$about=mysqli_fetch_assoc($about_conn);

?>
<h2 class="text-right mb-3">خوشامدگویی</h2>
<form class="text-right" action="check.php" method="post">
  <div class="form-group">
    <label for="">عنوان:</label>
    <input type="text" name="edit_title_wel" class="form-control" value="<?php echo $welcome['title']; ?>">
  </div>
  <div class="form-group">
    <label for="">متن:</label>
    <textarea class="form-control" name="edit_content_wel" rows="8" cols="80"><?php echo $welcome['content']; ?></textarea>
  </div>
  <button type="submit" name="btn_wel_edit" class="btn btn-success btn-lg float-left">ویرایش</button>
</form>
<br><br>
<hr class="border border-danger">

<h2 class="text-right mb-3">درباره ما</h2>
<form class="text-right" action="check.php" method="post">
  <div class="form-group">
    <label for="">متن:</label>
    <textarea class="form-control" name="edit_content_about" rows="8" cols="80"><?php echo $about['content']; ?></textarea>
  </div>
  <button type="submit" name="btn_about_edit" class="btn btn-success btn-lg float-left">ویرایش</button>
</form>
<br><br>
<hr class="border border-danger">




</div>
</body>
</html>
