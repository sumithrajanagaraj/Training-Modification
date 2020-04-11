<!DOCTYPE html>
<html>
<head>
	<title>PRACTICE IF CONDITIONS and loops</title>
</head>
<body>
<?php 
$signal = 1;
if($signal == 0){
	?>
<div class="container"style="height: 150px; background-color: red;"></div>
<?php 
} 
elseif ($signal==1){
	?>
<div class="container"style="height: 150px; background-color: green;"></div>
<?php }
else{ ?>
<div class="container"style="height: 150px; background-color: orange;"></div><?php }?>
</body>
</html>