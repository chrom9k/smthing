<?php

	$x = $_POST["x"];
	$y = $_POST["y"];

	switch ($_POST["operation"]) {
		case 'plus':
			$res = $x + $y;
			break;
		case 'minus':
			$res = $x - $y;
			break;
		case 'mul':
			$res = $x * $y;
			break;
		case 'div':
			$res = $x / $y;
			break;
		default:
			# code...
			break;
	}
	
	echo "<title>3.4(R)</title>";
	echo "Ответ: $res\n";

?>
