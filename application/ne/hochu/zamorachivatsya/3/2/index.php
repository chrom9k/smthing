<?php
	
# Составить программу выравнивания заданной строки текста по ширине экрана.
# Группы символов, разделенные пробелами и не содержащие пробелов внутри себя, будем называть словами.
# Выравнивание строки заключается в том, что между ее отдельными словами дополнительно вносятся пробелы так,
# чтобы длина строки стала равной заданной длине(предполагается, что требуемая длина не меньше исходной),
# а последнее слово строки сдвинулось к ее правому краю. (В текстовом режиме экран монитора компьютера обычно разбивается на 25 строк по 80 символов на строке.)

# Если речь идет о сервере, невольно всплывает в памяти понятие клиента. Все потому, что эти два понятия неразрывно связаны. Объединяет их компьютерная архитектура клиент-сервер. Обычно, когда говорят «сервер», имеют в виду сервер в архитектуре клиент-сервер, а когда говорят «клиент» – имеют в виду клиент в этой же архитектуре. Суть клиент-серверной архитектуры в том, чтобы разделить функции между двумя подсистемами: клиентом, который отправляет запрос на выполнение каких-либо действий, и сервером, который выполняет этот запрос. Взаимодействие между клиентом и сервером происходит посредством стандартных специальных протоколов, таких как TCP/IP и z39.50. На самом деле протоколов очень много, они различаются по уровням.
?>

<?php
	$str ="";
	$new_str = "";

	if (!empty($_POST["text"])) {

		$str = $_POST["text"];
		$words = explode(' ', $str);
		$line = array();
		$linesymbols = 0;
		$spaces = 0;
		$linespaces = 0;
		
		for ($i = 0; $i<count($words); $i++) {
			if ($linesymbols +  iconv_strlen($words[$i]) < 81) {
				array_push($line, $words[$i]);
				$linesymbols += iconv_strlen($words[$i]) + 1;
			} else {
				$i--;
				$linesymbols -= 1;
				$spaces = 80 - $linesymbols;
				$linespaces = count($line) - 1;
				for ($j = 0; $j<count($line); $j++) {
					if ($j < count($line) - 1) {
						$new_str .= $line[$j] . " ";
					} else {
						$new_str .= $line[$j];
					}
					if ($spaces > 0) {
						for ($k = 0; $k < ceil($spaces / $linespaces); $k++) {
							$new_str .= " ";
						}
						$spaces -= ceil($spaces / $linespaces);
						$linespaces -= 1;
					}
				}
				$new_str .= "\n";
				$linesymbols = 0;
				$line = array();
			}
		}
		
		if (count($line) > 0) {
			$linesymbols -= 1;
			$spaces = 80 - $linesymbols;
			$linespaces = count($line) - 1;
			for ($j = 0; $j<count($line); $j++) {
					if ($j < count($line) - 1) {
						$new_str .= $line[$j] . " ";
					} else {
						$new_str .= $line[$j];
					}
					if ($spaces > 0) {
						for ($k = 0; $k < ceil($spaces / $linespaces); $k++) {
							$new_str .= " ";
						}
						$spaces -= ceil($spaces / $linespaces);
						$linespaces -= 1;
					}
				}
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>3.2</title>
</head>
<body>
	<center>
		<h1>Обработка строки</h1>
		<form action="index.php" method="POST">
			<textarea name="text" rows="25" cols="82" placeholder="Введите строку..."><?php if ($new_str != "") { echo $new_str; } ?></textarea><br>
			<button type="submit">Обработать</button>
		</form>
	</center>
</body>
</html>
