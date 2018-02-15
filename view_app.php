<?php
session_start();
if(empty($_SESSION["user"]))
  header("Location:index.php");
?>

<!DOCTYPE html>
<html>
<head>
  <script type="text/javascript">
  $(".btn[data-target='#myModal']").click(function() {
       var columnHeadings = $("thead th").map(function() {
                 return $(this).text();
              }).get();
       columnHeadings.pop();
       var columnValues = $(this).parent().siblings().map(function() {
                 return $(this).text();
       }).get();
  var modalBody = $('<div id="modalContent"></div>');
  var modalForm = $('<form role="form" name="modalForm" action="putYourPHPActionHere.php" method="post"></form>');
  $.each(columnHeadings, function(i, columnHeader) {
       var formGroup = $('<div class="form-group"></div>');
       formGroup.append('<label for="'+columnHeader+'">'+columnHeader+'</label>');
       formGroup.append('<input class="form-control" name="'+columnHeader+i+'" id="'+columnHeader+i+'" value="'+columnValues[i]+'" />');
       modalForm.append(formGroup);
  });
  modalBody.append(modalForm);
  $('.modal-body').html(modalBody);
});
$('.modal-footer .btn-primary').click(function() {
   $('form[name="modalForm"]').submit();
});
</script>
<title>Appointments</title>
<!--Navigation bar-->
<style>
.modal iframe {
    width: 100%;
    height: 100%;
}
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}
</style>
<!--end of nav-->
<meta charset="utf-8">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>



</head>
<body>
  <ul>
  <li><a class="active" href="doc_slot.php">Back</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>
<br>
<br><center>
<h1>Appointments</h1></center>
<br>
<br>
<table class="table table-bordered table-striped">
    <thead>
        <tr>
            <th class="">Slot</th>
            <th class="">Name</th>
            <th class="">Age</th>
            <th class="">Details</th>
        </tr>
    </thead>
    <tbody>
      <?php
       include "connection.php";
       $date=$_GET['varname'];
       $sql="SELECT `id`, `name`,`age`,`slot` FROM `patient` WHERE `slot_date`='$date' ORDER BY `slot`";
       $result=mysqli_query($connection,$sql);
       if(($var=mysqli_num_rows($result))==0){
         echo'<script type="text/javascript">
         alert("No record found");
         window.location.href = "doc_slot.php";
         </script>';
       }
       while ($temp=mysqli_fetch_array($result)){
          $id=$temp['id'];	 ?>
        <tr>
        <td>
          <?php echo $temp['slot'];?>
        </td>
        <td>
          <?php echo $temp['name'];?>
        </td>
        <td>
          <?php echo $temp['age'];?>
        </td>
        <td style="text-align:center;">
            <button class="btn btn-success" data-toggle="modal" data-target="#myModal" contenteditable="false">Edit</button>
        </td>
        </tr>
        <?php

        } ?>


    </tbody>
</table>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content"></div>
    </div>
    <div class="modal-dialog">
        <div class="modal-content"></div>
    </div>
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"> <span aria-hidden="true" class="">×   </span><span class="sr-only">Close</span>

                </button>
                 <h4 class="modal-title" id="myModalLabel">Modal title</h4>

            </div>
            <div class="modal-body">
               <iframe src="view.php?id=<?php echo $id ?>" />
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
        </div>
    </div>
</div>
</body>
</html>
