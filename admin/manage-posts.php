<?php
include("config.php");
include("header-panel.php");


 ?>
 <h2 class="text-center">آخرین پست ها</h2>
 <?php
 if(isset($_SESSION['msg'])){
   show_message();
 }
 ?>
 <table class="table text-right table-striped">
   <thead>
     <tr>
       <th scope="col">#</th>
       <th scope="col">عنوان</th>
     </tr>
   </thead>
   <tbody>

 <?php
 $n=1;
 $postsql="SELECT * FROM `post` ORDER BY `id` DESC ";
 $sqlquery=mysqli_query($conn,$postsql);
 while ($postfetch=mysqli_fetch_assoc($sqlquery))
 {
 ?>
     <tr>
       <th scope="row"><?php echo $n++; ?></th>
       <td><a href=<?php echo "../readmore.php?postid=$postfetch[id]"; ?>><?php echo $postfetch["title"]; ?></a></td>
       <td><a href=<?php echo "editepost.php?postid=$postfetch[id]"; ?>>ویرایش</a></td>
       <td><a href=<?php echo "check.php?delpost=$postfetch[id]"; ?>>حذف</a></td>
     </tr>
 <?php
 }
 ?>
   </tbody>
 </table>

</div>
</body>
</html>
