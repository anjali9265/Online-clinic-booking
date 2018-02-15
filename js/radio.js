function idForm(){
  var selectvalue = $('input[name=choice]:checked', '#idForm').val();

if(selectvalue =="<?php echo date("Y-m-d") ?>" ){
window.location.href('trial.php?varname=<?php echo date("Y-m-d") ?>');
return true;
}
else if(selectvalue == "<?php echo date('Y-m-d', strtotime(' +1 day')) ?>"){
window.location.href('trial.php?varname=<?php echo date('Y-m-d', strtotime(' +1 day')) ?>');
return true;
}
