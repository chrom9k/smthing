<?php

	if (!(empty($_POST["M"]))) {
		$M = $_POST["M"];

		$chet = 0;
		$nechet = 0;

		for ($i = 0; $i < $M; $i++) { 
			for ($j = 0; $j < $M; $j++) { 
				$arr[$i][$j] = rand(1, 100);
				if ($arr[$i][$j] % 2 == 0) {
					$chet++;
				} else {
					$nechet++;
				}
			}
		}
		?>
<html>
<head>
<title>Gen</title>
</head>
<body>
	<table border="1">
		<?php

			for ($i = 0; $i < $M; $i++) { 
				?>
				<tr>
				<?php
				for ($j = 0; $j < $M; $j++) {
					if ($i == $j) {
						?><td bgcolor="#00FF00"><?php
					} elseif (($i + $j) == ($M - 1)) {
						?><td bgcolor="#0000FF"><?php
					} elseif (($j > $i) || ($i > $j)) {
						?><td bgcolor="#555555"><?php
					} else {
						?><td bgcolor="#FFFFFF"><?php
					}

					echo $arr[$i][$j]; ?></td>
					<?php
				}
				?></tr>
				<?php
			}

		?>
	</table>
	<span>Количество чётных: <?php echo $chet; ?></span><br>
	<span>Количество нечётных: <?php echo $nechet; ?></span>
</body>
</html>

<?php


	}

?>