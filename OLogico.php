<html>
	<head><title>Operadores Logicos</title></head>
	<body bgcolor="#CCFFCC">
	<center><font color="green" size="15">Operadores Logicos</font></center>
<?php
$a = 8;
$b = 2;
$c = 2;
$d = 8;

echo "1) ";echo (($a == $b) && ($c > $b));echo "<br>";
echo "2) ";echo (($a == $b) || ($b == $c));echo "<br>";
echo "3) "; echo (!($b < $c));echo "<br>";
?>
</body>
</html>