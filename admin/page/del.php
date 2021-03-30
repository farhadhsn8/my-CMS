<?php
$id=$_GET['id'];
delete_page($id);
header("location:dashbord.php?m=page&p=list");
?>