<?php
$server = "localhost";
$user = "root";
$pass  ="";
$db="capture_it";
$con = mysqli_connect($server,$user,$pass,$db);
if(!$con)
{
    echo "Error in connection" .mysqli_error($con);
}
?>