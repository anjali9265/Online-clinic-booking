<?php
session_start();
if(empty($_SESSION["user"]))
  header("Location:index.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Medilab Clinic</title>
  <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
  <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">

  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Candal">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/raj.css">

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
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
  <!--banner-->
  <section id="banner" class="banner">
    <div class="bg-color">
      <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
          <div class="col-md-12">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
              <a class="navbar-brand" href="#"><img src="img/logo.png" class="img-responsive" style="width: 140px; margin-top: -16px;"></a>
            </div>
            <div class="collapse navbar-collapse navbar-right" id="myNavbar">
              <ul class="nav navbar-nav">
                <li class="active"><a href="logout.php">Logout</a></li>
              </ul>
            </div>
          </div>
        </div>
      </nav>
      <div class="container">
        <div class="row">
          <div class="banner-info">
            <div class="banner-logo text-center">
              <img src="img/logo.png" class="img-responsive">
            </div>

  <div class="agile-form">
    <form action="can_action.php" method="POST">
      <ul class="field-list">
        <li><center>
          <label class="form-label">
          <div class="form-input">
            <div class="styled-select black rounded">
            <select name="cancel"  id="date" onchange="showFunc(this.value)">
              <option>&nbsp;</option>
              <option value="1">Single appointment</option>
              <option value="0">Multiple appointment</option>
             </select>
           </div>
          </div>
        </label></center>
        </li>

<center>
<div id="txtHint">
<label class="form-label">

</label>
  </div>
<br><br>
  <input type ="submit" class="btn btn-appoint">
  </center>
  </form>

<script src="js/jquery-latest.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/wow.min.js"></script>
<script src="js/materialize.min.js"></script>
<script src="js/custom.js"></script>
<script type="text/javascript">

function showFunc(date){
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
xmlhttp.open("GET","cancel.php?q="+date,true);
xmlhttp.send();
}


</script>

<br>
</body>
</html>
