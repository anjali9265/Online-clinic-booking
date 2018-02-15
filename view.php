<!DOCTYPE html>
<html lang="en">
<head>
	</head>
<body bgcolor="#bebee0">

<?php
include "connection.php";

$id=$_GET['id'];
$sql="SELECT `id`, `name`, `gender`, `mobile`, `age`, `address`, `email`, `slot_date`, `slot` FROM `patient` WHERE `id`='$id'";
$result=mysqli_query($connection,$sql);
$filled=mysqli_fetch_array($result);
        	echo '<form>
					  	 	Full Name:'.$filled["name"].'
  							<br>';
						echo'
							   Gender:'. $filled["gender"].'
								 <br>
								 Mobile:'.$filled["mobile"].'
								 <br>
								 Age:'. $filled["age"].'
								 <br>
							   Address:'.$filled["address"].'
								 <br>
								 E-Mail : '.$filled["email"].'';


						?>

							</div>
						</li>

					</ul>


				</form>

</body>
</html>
