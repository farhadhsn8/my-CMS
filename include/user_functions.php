<?php
// session_start();
include_once 'functions.php';
function user_login($data)
{
    $connection=config();
    $sql="SELECT * FROM admin_tbl WHERE username='$data[username]'";
    $row=mysqli_query($connection,$sql);
    $res=mysqli_fetch_assoc($row);
    //var_dump($res);
    if( $data['password'] == $res['password'])
    {
        
        $_SESSION['username']=$res['name'];
        header("location:dashbord.php?m=index&p=index");
    }
    else
    {
         header("location:index.php?login=error");
    }
}
