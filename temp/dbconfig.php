<?php
$server = "localhost";
$user = "root";
$pass  ="";
$db="test_upload";
$con = mysqli_connect($server,$user,$pass,$db);
if(!$con)
{
    echo "Error in connection" .mysqli_error($con);
}
?>