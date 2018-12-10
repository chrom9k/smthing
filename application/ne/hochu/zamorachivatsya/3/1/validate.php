<?php

	$res = "";
	
	if (empty($_POST["fio"])) {
		$res .= "Ошибка! Вы не ввели имя.<br>";
	}

	if (empty($_POST["email"])) {
		$res .= "Ошибка! Вы не ввели e-mail.<br>";
	}

	if (empty($_POST["phone"])) {
		$res .= "Ошибка! Вы не ввели телефон.";
	}

	if ($res == "") {
		$res = "Hello, ".$_POST["fio"];
	}

	echo $res;
	
?>