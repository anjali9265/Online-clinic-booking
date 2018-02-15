<?php
session_start();
if(empty($_SESSION["user"]))
  header("Location:index.php");
?>

<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/themes/smoothness/jquery-ui.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>

  <script>
  $(document).ready(function() {
    $("#datepicker1").datepicker();
    $("#datepicker2").datepicker();
  });
  </script>
</head>
<body>
  <?php
include "connection.php";

$date = $_GET['q'];

if (!$connection) {
    die('Could not connect: ' . mysqli_error($con));
}
else {

if($date=='1')
{

    echo"<input type='date' name='frm' id='datepicker1' placeholder='select date' />";
    echo"<input type='hidden' name='to' value=''>";
}
else if($date=='0')
{
      echo"From:<br>";
      echo"<input type='date' name='frm' id='datepicker1' placeholder='select date' />";
      echo"<br><r>To:<br>";
       echo"<input  type='date' name='to' id='datepicker2' placeholder='select date' />";

}
}

?>

</form>
</body>
</html>
