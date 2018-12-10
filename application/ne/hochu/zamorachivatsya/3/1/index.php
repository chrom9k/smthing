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
            <div>ФИО: <input type="text" name="fio"></div>
            <div>E-mail: <input type="text" name="email"></div>
            <div>Телефон: <input type="text" name="phone"></div>

            <div><button type="submit">Send</button></div>
        </form>
    </body>
</html>