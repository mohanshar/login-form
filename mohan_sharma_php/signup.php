
<!DOCTYPE html>
<html>
<head>
	<title>PHP - GET form</title>
</head>
<body>

<?php

$em = $_GET["E"];
$pass = $_GET["P"];
$date = $_GET["D"];
$range = $_GET["R"];
$hob = @$_GET["h"];
$hob1 = $_GET["ho"];
$hob2 = @$_GET["hobb"];
$color = $_GET["C"];
$c = @$_GET["ne"];
$co = @$_GET["us"];
$cou = @$_GET["au"];
$g = $_GET["m"];
$ge = @$_GET["f"];
$gen = @$_GET["o"];

echo " Your E-mail is : " . $em;
echo " Your password is : " . $pass;
echo " Your date of birth is : " . $date;
echo " Your range is : " . $range;
echo " Your hobbie is : " . $hob;
echo " Your hobbie is : " . $hob1;
echo " Your hobbie is : " . $hob2;
echo " Your color is : " . $color;
echo " Your country is : " . $c;
echo " Your country is : " . $co;
echo " Your country is : " . $cou;
echo " Your gender is : " . $g;
echo " Your gender is : " . $ge;
echo " Your gender is : " . $gen;

echo " Put '@' symbol before the variable which will suppress the error.<br><br>";
echo "By writing 'error_reporting() on the top of the script, it disables the error reporting.";
 ?>
</body>
</html>