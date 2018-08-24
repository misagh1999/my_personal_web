<?php

include("header.php");
include("admin/config.php");
include("func/func.php");
$wel="SELECT * FROM `welcome`";
$wel_query=mysqli_query($conn,$wel);
$wellcome=mysqli_fetch_assoc($wel_query);

?>

      <div class="jumbotron text-justify rounded" style="background-color:orange;border:2px solid red">
        <h1><?php echo $wellcome['title']; ?></h1>
        <p class="lead"><?php echo $wellcome['content']; ?></p>
        <hr class="bg-danger">
        <button type="button" class="btn btn-info float-left">شروع یادگیری</button>
      </div><!-- jumbotron-->

      <div class="row">

<?php
  $postsql="SELECT * FROM `post` ORDER BY `id` DESC ";
  $sqlquery=mysqli_query($conn,$postsql);
  while ($postfetch=mysqli_fetch_assoc($sqlquery))
   {
 ?>
        <div class="col-md-4 col-sm-6 mb-4">
          <div class="card text-justify border-danger">
            <div class="card-header">
              <h4 class="card-title my-auto"><?php echo $postfetch["title"]; ?></h4>
            </div>
            <div class="card-body">
              <p class="card-text"><?php echo post_content($postfetch["content"]); ?></p>
              <a href="<?php echo "readmore.php?postid=$postfetch[id]"; ?>" class="card-link btn btn-info float-left">ادامه مطلب...</a>
            </div>
          </div><!--card-->
        </div><!--col-->
<?php
}
 ?>
      </div><!--row-->

<?php include("footer.php") ?>
