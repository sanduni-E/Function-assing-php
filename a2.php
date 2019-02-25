<html>
<head>
<body>
<?php
	$x=10;
	function assignAnotherValue(){
		$x=15;
		echo "Inside value of \$x is $x<br>";
	}
assignAnotherValue();
echo "Outside value of \$x is $x";
?>
</body>
</head>
</html>