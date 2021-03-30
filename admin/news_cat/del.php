<?php
$id=$_GET['id'];
delete_newscategory($id);
header("location:dashbord.php?m=news_cat&p=list");
?>