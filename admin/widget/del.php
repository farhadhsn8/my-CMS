<?php
$id=$_GET['id'];
deletewidget($id);
header("location:dashbord.php?m=widget&p=list");
?>