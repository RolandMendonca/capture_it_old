<?php 
 
 //importing dbDetails file 
require_once 'dbconfig.php';

$_fname= $_POST['name'];
$_email= $_POST['email'];
$_pass= $_POST['pass'];
$_mno= $_POST['mno'];

 
$_query = mysqli_query($con, "INSERT INTO `images`(`a_fname`, `a_mno`, 'a_pass', 'a_email') VALUES ('$_fname','$_mno','$_pass', '$_email')");


?>