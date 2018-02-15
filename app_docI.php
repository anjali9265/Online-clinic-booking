<?php
 include "connection.php";
 $today=date("Y-m-d");
 $tomorrow=date('Y-m-d', strtotime(' +1 day'));

 //canceled slotes
 $sql="SELECT * FROM `cancel_app` WHERE '$today' between `from` and `to` and '$tomorrow' between `from` and `to`";
 $result=mysqli_query($connection,$sql);
 $temp=mysqli_fetch_array($result);
	if(!empty($temp['id']))
	{
	 header("Location:http://localhost:81/clinic_booking/page.html");
	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta tags -->
	<title>Appointment</title>
	<meta name="keywords" content="Appoint My Doctor Form Responsive widget, Flat Web Templates, Android Compatible web template,
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- stylesheets -->
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/style1.css">

	<!-- google fonts  -->
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:300,400,400i,700" rel="stylesheet">
</head>

<body background="http://localhost:81/clinic_booking/img/banner9.jpg">
	<div class="w3ls-banner">
	<div class="heading">
		<h1>Get My Appointment</h1>
	</div>
		<div class="container">
			<div class="heading">
				<h2>Please Enter Patients Details</h2>
			</div>

      <!--Patient details-->
			<div class="agile-form">
				<form action="app.php" method="post">
					<ul class="field-list">
						<li>
							<label class="form-label">
								Full Name
								<span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="name" placeholder="Enter Patients Name" required >
							</div>
						</li>
						<li>
							<label class="form-label">
							   Gender
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<select class="form-dropdown" name="gender" required>
									<option value="">&nbsp;</option>
									<option value="Male"> Male </option>
									<option value="Female"> Female </option>
									<option value="Transgender"> Transgender </option>
								</select>
							</div>
						<li>
						<li>
							<label class="form-label">
							   Mobile Number
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="text" name="mobile" placeholder="Mobile Number" required >
							</div>
						</li>
						<li>
							<label class="form-label">
							   Age
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input dob">
								<span class="form-sub-label">
     						<input type="text" name="age">
							</div>
						</li>
						<li>
							<label class="form-label">
							   Address
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input add">
								<span class="form-sub-label">
									<textarea rows="4" cols="50" name="address">
									</textarea>
								</span>
              </div>
						</li>
						<li>
							<label class="form-label">
							   E-Mail Address
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input">
								<input type="email" name="email" placeholder="myname@example.com" required>

							</div>
						</li>

					</ul>

					<!--slot booking-->
					<label class="form-label1">
						Select time slot.
					</label><br>
					<div class="form-input dob">
						<span class="form-sub-label">
							<span class="form-sub-label">
								<select name="date"  id="day" onchange="myFunc(this.value)">
									<option>&nbsp;</option>

								<?php
								$sql1="SELECT * FROM `cancel_app` WHERE  `from`='$tomorrow'";
								$result1=mysqli_query($connection,$sql1);
								$temp1=mysqli_fetch_array($result1);
								if(!empty($temp1['id']))
								{
									echo "<option  value='".date("Y-m-d")."'>".$today."</option>";
								}
								else {
								$sql2="SELECT * FROM `cancel_app` WHERE  `to`='$today'";
								$result2=mysqli_query($connection,$sql2);
								$temp2=mysqli_fetch_array($result2);
								if(!empty($temp2['id']))
								{
								echo "<option  value='".date('Y-m-d', strtotime(' +1 day'))."'>".date('Y-m-d', strtotime(' +1 day'))."</option>
								<option value='".date('Y-m-d', strtotime(' +2 day'))."'>".date('Y-m-d', strtotime(' +2 day'))."</option>";
								}
								else{
									echo "<option  value='".date("Y-m-d")."'>".date("Y-m-d")."</option>
									<option value='".date('Y-m-d', strtotime(' +1 day'))."'>".date('Y-m-d', strtotime(' +1 day'))."</option>";
								}
							}
							?>

					 </select>
<div id="txtHint">
</div>

<input type='submit' value='Book Appointment'>
</form>

			</div>
		</div>

	</div>

  <script src="js/jquery-latest.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/materialize.min.js"></script>
	<script src="js/custom.js"></script>
  <script type="text/javascript">
 function myFunc(date){
	 if (date=="") {
	 document.getElementById("txtHint").innerHTML="";
	 return;
 }
 if (window.XMLHttpRequest) {
	 // code for IE7+, Firefox, Chrome, Opera, Safari
	 xmlhttp=new XMLHttpRequest();
 } else { // code for IE6, IE5
	 xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
 }
 xmlhttp.onreadystatechange=function() {
	 if (this.readyState==4 && this.status==200) {
		 document.getElementById("txtHint").innerHTML=this.responseText;
	 }
 }
 xmlhttp.open("GET","hide.php?q="+date,true);
 xmlhttp.send();
}


	</script>
</body>
</html>
