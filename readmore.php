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
              <p class="card-text text-justify"><?php echo nl2br($postfetch["content"]); ?></p>
            </div>
          </div><!--article-->

<?php
}
  $author_sql="SELECT * FROM `user` WHERE `id`=1";
  $author_query=mysqli_query($conn,$author_sql);
  $author=mysqli_fetch_assoc($author_query);
 ?>
          <div class="card border-danger my-3">
            <div class="card-header text-right">
              <h4 class="card-title my-auto">درباره نویسنده</h4>
              <h5 class="mt-2" style="color:blue;"><?php echo $author['lname']." ".$author['fname']; ?></h5>
            </div>
            <div class="card-body">
              <img src="img/pic.jpg" class="rounded-circle float-right ml-3 " alt="" style="width:80px;border:red 1px solid;">
              <p class="card-text text-justify"><?php echo nl2br($author['about']); ?></p>
            </div>
          </div><!--about author-->

<?php include("footer.php") ?>
