<?php
$id=$_GET['id'];
deletecomment($id);
header("location:dashbord.php?m=contacts&p=list");
?>