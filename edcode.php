<?php
require 'connect.php';
$a=$_GET['a1'];
$b=$_GET['a2'];
$c=$_GET['a3'];
$d=$_GET['a4'];
$sql="update user set name='$a', course='$b', email='$c' where id='$d'";
$n=mysqli_query($conn,$sql);
if($n==1)
{
    header("location:fetch.php?msg=Done");
}
else
{
    header("location:fetch.php?msg=Not Done");
}
?>