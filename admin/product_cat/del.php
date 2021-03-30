<?php
$id=$_GET['id'];
delete_category($id);
header("location:dashbord.php?m=product_cat&p=list");
?>