<?php
if($_SESSION["FIEM"]==null)
    {
        header("location:admin.html?msg=loginfirst");
    }
?>