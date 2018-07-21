<?php

require 'config.php';
session_start();
$ID = $_SESSION["ID"];
session_destroy();
$head=$_POST['heading'];
$data=$_POST['newsbody'];
$statement="UPDATE test set heading='$head', summertext='$data' where id ='$ID' ";

if(mysqli_query($conn,$statement))
{
    header('location:home.php');
}
else
    mysqli_error($conn);

mysqli_close($conn);