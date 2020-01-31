<?php 
 
 //importing dbDetails file 
require_once 'dbconfig.php';

$_fname= $_POST['fname'];
$_sname= $_POST['sname'];
$_mno= $_POST['mno'];

 
$_query = mysqli_query($con, "INSERT INTO `images`(`fname`, `sname`, `mno`) VALUES ('$_fname','$_sname','$_mno')");


?>