<!DOCTYPE html>
<html>
<head>
	<title>Problem identifying..</title>
</head>
<body>
		<?php 
if(isset($_GET['c'])){
	$c = $_GET['c'];
}
else{
	$c = "c not set in GET method."
}
if(isset($_GET['co'])){
	$c = $_GET['co'];
}
else{
	$c = "co not set in GET method."
}
if(isset($_GET['cou'])){
	$c = $_GET['cou'];
}
else{
	$c = "cou not set in GET method."
}

echo $c;
echo $co;
echo $cou;
		 ?>
</body>
</html>