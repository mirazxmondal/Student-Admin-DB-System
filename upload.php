<?php
require 'connect.php';
$a=$_GET['a1'];
$b=$_GET['a2'];
$c=$_GET['a3'];
$d=$_GET['a4'];
$e=$_GET['a5'];
$f=$_GET['a6'];
$g=$_GET['a7'];
$sql="insert into student (name,rnumber,email,course,pnumber,date,pay) values('$a','$b','$c','$d','$e','$f','$g')";
$x=mysqli_query($conn,$sql);
if($x==1)
{
    header("location:index.html?msg=Done");
}
else
{
    header("location:index.html?msg=Not Done");
}
?>
