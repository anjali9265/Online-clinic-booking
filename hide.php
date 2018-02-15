<!DOCTYPE html>
<html>
<head>
</head>
<body>
<?php
include "connection.php";

$date = $_GET['q'];
if (!$connection) {
    die('Could not connect: ' . mysqli_error($con));
}

$sql="SELECT `slote`,`time` FROM `slot` where NOT EXISTS(SELECT `slot` FROM `patient` WHERE `slot_date`='$date' AND `slot`=`slote`) ORDER BY `time`";
$result = mysqli_query($connection,$sql);

   echo'<br><select name="slot">
    <option>&nbsp;</option>';
$count=1;
    while($temp=mysqli_fetch_array($result))
    {
     echo"	<option value='".$temp['slote']."'?dd='".$q."'>".$count.")".$temp['time']." PM</option>";
     $count++;

    }


    echo"	</select>";
?>
</body>
</html>
