<?php
session_start();
if(empty($_SESSION["user"]))
  header("Location:index.php");
  
include "connection.php";
$frm=$_POST["frm"];
$to=$_POST["to"];
if($to=="")
{
  $to=$frm;
}

$query="SELECT * FROM `cancel_app`";
$qu=mysqli_query($connection,$query);
$count=mysqli_num_rows($qu);
$count++;

$sql="INSERT INTO `cancel_app`(`id`,`from`, `to`) VALUES ('$count','$frm','$to')";
if(!mysqli_query($connection,$sql))
{
  echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
else {
  header("Location:doctor.php");
}
 ?>
