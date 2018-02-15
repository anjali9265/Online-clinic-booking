<?php
include 'connection.php';
$u=$_POST["uname"];
$p=$_POST["pass"];

$q1="SELECT * FROM `doctor` WHERE `uname` LIKE '$u' AND `pass` LIKE '$p'";
$result1=mysqli_query($connection, $q1);
$result=mysqli_num_rows($result1);
if($result>0)
 {session_start();
  $_SESSION["user"]="$u";
   header("Location:doctor.php");
   }
 else {
  echo "<a href='login.html'>
         <script>
         alert('Incorrect username or password!! :(');
         window.location.href = 'login.html';</script>
         </a>";
 }

?>
