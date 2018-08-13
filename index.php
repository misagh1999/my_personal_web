<?php include("header.php") ?>
<?php include("admin/config.php") ?>
<?php include("func/func.php") ?>

      <div class="jumbotron text-justify rounded" style="background-color:orange;border:2px solid red">
        <h1>به وب سایت من خوش آمدید</h1>
        <p class="lead">تصمیم گرفتم که بعد از مدت ها اقدام به ایجاد یک وبسایت شخصی برای انعکاس نظرها و ایده هام کنم تا از این طریق بتونم اونا رو با شما هم به اشتراک بذارم. تو این سایت قصد دارم که از فعالیت ها, سرگرمی ها, علایق و تجربه ها و خاطراتم دلنوشته هایی رو با شما به اشتراک بذارم. همچنین سعی می کنم که مطالب آموزشی مفید شامل معرفی منابع, کتاب و مقالات علمی هم قرار بدم.تمام تلاشم بر اینه که توی این وبسایت مطالب دست اول و جدیدی رو قرار بدم و اونا رو از منظر خاصی بررسی کنم.
از این که ما رو همراهی می کنید صمیمانه متشکرم :)
</p>
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
