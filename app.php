<?php
include "connection.php";
$name=$_POST["name"];
$gender=$_POST["gender"];
$mob=$_POST["mobile"];
$age=$_POST["age"];
$add=$_POST["address"];
$mail=$_POST["email"];
$slot_date=$_POST["date"];
$slot_time=$_POST["slot"];

//deleting prev day's records
$today=date("Y-m-d");
$del="DELETE FROM `patient` WHERE `slot_date` < '$today'";
if (!mysqli_query($connection, $del))
 {
 echo "Error: " . $del . "<br>" . mysqli_error($connection);
}
$del1="DELETE FROM `cancel_app` WHERE `from` < '$today'";
if (!mysqli_query($connection, $del1))
 {
 echo "Error: " . $del1 . "<br>" . mysqli_error($connection);
}


$query="SELECT count(*) FROM `patient`";
$result=mysqli_query($connection,$query);
$count=mysqli_fetch_array($result);
$count[0]++;

//inserting into db
$sql="INSERT INTO `patient`(`id`,`name`,`gender`, `mobile`, `age`, `address`, `email`, `slot_date`,`slot`) VALUES ('$count[0]','$name', '$gender', '$mob', '$age', '$add', '$mail','$slot_date','$slot_time')";
if (!mysqli_query($connection, $sql))
 {
 echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}
else {
  echo '<script type="text/javascript">
alert("Appointment confirmed.");
window.location.href = "index.php";
</script>';
}

?>
