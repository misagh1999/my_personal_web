<?php include("header.php") ?>
<?php include("admin/config.php") ?>
<?php
  $postid=$_GET["postid"];
  $postsql="SELECT * FROM `post`  WHERE `id`=$postid";
  $sqlquery=mysqli_query($conn,$postsql);
  while ($postfetch=mysqli_fetch_assoc($sqlquery))
   {
 ?>
          <div class="card border-danger my-3">
            <div class="card-header text-right">
              <h4 class="card-title my-auto"><?php echo $postfetch["title"]; ?></h4>
            </div>
            <div class="card-body">
              <p class="card-text text-justify"><?php echo $postfetch["content"]; ?></p>
            </div>
          </div><!--article-->

<?php
}
 ?>
          <div class="card border-danger my-3">
            <div class="card-header text-right">
              <h4 class="card-title my-auto">درباره نویسنده</h4>
            </div>
            <div class="card-body">
              <img src="img/mypic.jpg" class="rounded-circle float-right ml-3" alt="" style="width:80px;border:red 1px solid;">
              <p class="card-text text-justify">سلام من محمدحسیتبنیتب یبتیسبا نتبیت بیبتیبتیب یتبیمبتیسبت یبتیسبتسیت سیبیستبیس ب  یبتیستب م تیبیس سیتبیس بتیسب یسبیسب یبت</p>
            </div>
          </div><!--about author-->

<?php include("footer.php") ?>
