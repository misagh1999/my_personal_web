<?php include("header-panel.php") ?>
<?php include("config.php") ?>
<?php
if(isset($_GET["okdel"])){
  echo '<center><h4 class="text-success">پست شما با موفقیت حذف شد</h4></center>';
}
if(isset($_GET["nodel"])){
  echo '<center><h4 class="text-danger">متاسفانه پست شما حذف نشد</h4></center>';
}
?>
    <h2>خوش آمدید</h2>
    
  </div>
  </body>
</html>
