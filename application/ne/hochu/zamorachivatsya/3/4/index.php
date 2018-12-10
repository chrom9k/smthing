<?php
	
	# Написать программу-калькулятор, которая позволит пользователю передать два числа и указать арифметическую операцию, выполняемую над ними.

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="windows-1251">
	<title>Form</title>
</head>
<body>
	<form action="calc.php" method="POST">
		Введите первое число: <input type="text" name="x"><br>
		Введите второе число: <input type="text" name="y"><br>
		Операция: <select name="operation">
			<option disabled>Операция</option>
			<option value="plus">+</option>
			<option value="minus">-</option>
			<option value="mul">*</option>
			<option value="div">/</option>
		</select><br>
		<button type="submit">Отправить</button>
	</form>
</body>
</html>