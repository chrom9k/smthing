<?php

	$res = "";
	
	if (empty($_POST["fio"])) {
		$res .= "������! �� �� ����� ���.<br>";
	}

	if (empty($_POST["email"])) {
		$res .= "������! �� �� ����� e-mail.<br>";
	}

	if (empty($_POST["phone"])) {
		$res .= "������! �� �� ����� �������.";
	}

	if ($res == "") {
		$res = "Hello, ".$_POST["fio"];
	}

	echo $res;
	
?>