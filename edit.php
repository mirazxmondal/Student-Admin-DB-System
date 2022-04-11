<?php
require 'connect.php';
$x=$_GET['id'];
$sql="select * from student where id='$x'";
$a=mysqli_query($conn,$sql);
$v=mysqli_fetch_array($a);
?>
<html>
    <body>
        <form action="edcode.php">
            <tr><td></td></tr><input type="text" name="a1" value="<?php echo($v['firstname'])?>"></td></tr>
            <tr><td></td></tr><input type="text" name="a2" value="<?php echo($v['lastname'])?>"></td></tr>
            <tr><td></td></tr><input type="text" name="a3" value="<?php echo($v['email'])?>"></td></tr>
            <tr><td></td></tr><input type="hidden" name="a4" value="<?php echo($v['id'])?>"></td></tr>
            <tr><td><input type="submit"></td></tr>
        </form>
    </body>
</html>