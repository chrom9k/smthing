<?php

	# Создайте форму ввода данных о пользователе (ФИО, e-mail, телефон). Напишите скрипт, который проверяет заполнение полей формы.

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="windows-1251">
	<title>Form</title>
</head>
<body>
	<form action="validate.php" method="POST">
		ФИО: <input type="text" name="fio"><br>
		E-mail: <input type="text" name="email"><br>
		Телефон: <input type="text" name="phone">

		<button type="submit">Send</button>
	</form>
</body>
</html>