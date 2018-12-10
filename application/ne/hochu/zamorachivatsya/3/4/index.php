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
            <div>Введите первое число: <input type="text" name="x"></div>
            <div>Введите второе число: <input type="text" name="y"></div>
            <div>Операция: <select name="operation">
                <option disabled>Операция</option>
                <option value="plus">+</option>
                <option value="minus">-</option>
                <option value="mul">*</option>
                <option value="div">/</option>
            </select></div>
            <div><button type="submit">Отправить</button></div>
        </form>
    </body>
</html>

<style>
    form div {
        margin: 5px;
    }
</style>