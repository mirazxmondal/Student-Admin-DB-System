<?php
require 'connect1.php';
require 'session-check.php';
$sql="select date,name,course,pay from student";
$q=mysqli_query($conn,$sql);
?>
<html>
    <style>
        td{
            font-style: italic;
        }
    </style>
    <body>
    <table>
<?php
while($x=mysqli_fetch_array($q))
{
?>
        <tr>
        <h1 style="display:inline;"><?php echo($_SESSION['FIEM']['date']);?></h1>
        <h1 style="display:inline;"><?php echo($_SESSION['FIEM']['name']);?></h1><br>
        <h1 style="display:inline;"><?php echo($_SESSION['FIEM']['course']);?></h1><br>
        <h1 style="display:inline;"><?php echo($_SESSION['FIEM']['pay']);?></h1><br>
        <!-- <td><a href="edit.php?id=<?php echo($x['id'])?>">Edit</a></td> -->
        <h3><a href="./logout.php">Log out</a></h3> 
        </tr>
<?php   
}
?>
    </table>
    </body>
</html>
