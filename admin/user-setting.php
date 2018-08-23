<?php
include("config.php");
include("header-panel.php");


 ?>
 <?php
   if(isset($_GET['okupdate'])){
     echo '<center><h4 class="text-success>پست شما با موفقیت به روزرسانی شد</h4></center>';
   }
   if(isset($_GET['noupdate'])){
     echo '<center><h4 class="text-danger">متاسفانه پست شما ویرایش نشد</h4></center>';
   }
   if(isset($_GET['empty'])){
     echo '<center><h4 class="text-danger">تمامی فیلدها باید پر باشد</h4></center>';
   }

 ?>
<div class="text-right">

  <form class="" action="check.php" method="post">
    <div class="form-group">
      <label for="userE">نام کاربری:</label>
      <input type="text" name="user_edit" value="<?php echo $_SESSION['username']; ?>" id="userE" class="form-control">
    </div>
    <div class="form-group">
      <label for="lnameE">نام:</label>
      <input type="text" name="lname_edit" value="<?php echo $_SESSION['lname']; ?>" id="lnameE" class="form-control">
    </div>
    <div class="form-group">
      <label for="fnameE">نام خانوادگی:</label>
      <input type="text" name="fname_edit" value="<?php echo $_SESSION['fname']; ?>" id="fnameE" class="form-control">
    </div>
    <div class="form-group">
      <label for="passE">رمز عبور:</label>
      <input type="password" name="pass_edit" value="<?php echo $_SESSION['password']; ?>" id="passE" class="form-control">
    </div>
    <textarea name="about_edit" rows="8" cols="80" class="form-control"><?php echo $_SESSION['about_user'] ?></textarea>
    <button type="submit" name="btn_user_edit" class="btn btn-lg btn-success float-left my-3 ml-3 ">ویرایش</button>
  </form>
</div>


</div>
</body>
</html>
