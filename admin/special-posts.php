<?php
include("config.php");
include("header-panel.php");
$query="SELECT * FROM `welcome`";
$sqlquery=mysqli_query($conn,$query);
$welcome=mysqli_fetch_assoc($sqlquery);
?>

<h2>بخش خوشامدگویی صفحه اصلی</h2>
<br><br>
<h3><?php echo $welcome['title']; ?></h3>
<p><?php echo $welcome['content']; ?></p>
<br><br>


</div>
</body>
</html>
