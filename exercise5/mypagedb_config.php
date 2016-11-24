
<!--DATABASE CONFIGURATION-->
<?php
$host = "localhost";
$user = "root";
$password = "";
$datbase = "mypage";
$con = mysqli_connect($host,$user,$password);
mysqli_select_db($con,$datbase);
?>