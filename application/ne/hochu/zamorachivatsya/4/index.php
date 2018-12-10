<?php
	session_start();

	# Необходимо на языке PHP реализовать простейшую систему тестирования с выполнением следующих требований:
	# 1. На главной странице необходимо реализовать запрос имени тестируемого. Это имя должно далее появляться на всех страницах с тестами.
	# 2. Необходимо сделать минимум 10 вопросов. Вопросы должны быть следующих видов: вопрос с одним правильным ответом, вопрос с несколькими правильными ответами, вопрос со вводом прямого варианта ответа.
	# 3. После ответа на все вопросы должна появляться страница с результатами тестирования. На ней должна отображаться следующая правильная информация: количество правильных ответов, номера вопросов, в которых были допущены ошибки, время прохождения теста.


	if (!empty($_POST["username"])) {
		$_SESSION["username"] = $_POST["username"];
		$_SESSION["number"] = 0;
		$_SESSION["true"] = 0;
		$_SESSION["count_errors"] = 0;
		$_SESSION["errors"] = array();
		$_SESSION["time"] = new DateTime("now");
	}

	if (!empty($_SESSION["username"])) {
		switch ($_SESSION["number"]) {
			case 1:
				if (isset($_POST["var1"])) {
					$_SESSION["true"]++;
				} else {
					$_SESSION["errors"][$_SESSION["count_errors"]] = $_SESSION["number"];
					$_SESSION["count_errors"]++;
				}
				break;
			case 2:
				if (isset($_POST["var1"])) {
					$_SESSION["true"]++;
				} else {
					$_SESSION["errors"][$_SESSION["count_errors"]] = $_SESSION["number"];
					$_SESSION["count_errors"]++;
				}
				break;
			case 3:
				if (isset($_POST["var1"])) {
					$_SESSION["true"]++;
				} else {
					$_SESSION["errors"][$_SESSION["count_errors"]] = $_SESSION["number"];
					$_SESSION["count_errors"]++;
				}
				break;
			case 4:
				if (isset($_POST["var2"]) && isset($_POST["var3"]) && !isset($_POST["var1"])) {
					$_SESSION["true"]++;
				} else {
					$_SESSION["errors"][$_SESSION["count_errors"]] = $_SESSION["number"];
					$_SESSION["count_errors"]++;
				}
				break;
			case 5:
				if (isset($_POST["var2"]) && isset($_POST["var3"]) && !isset($_POST["var1"])) {
					$_SESSION["true"]++;
				} else {
					$_SESSION["errors"][$_SESSION["count_errors"]] = $_SESSION["number"];
					$_SESSION["count_errors"]++;
				}
				break;
			case 6:
				if (isset($_POST["var2"]) && isset($_POST["var3"]) && !isset($_POST["var1"])) {
					$_SESSION["true"]++;
				} else {
					$_SESSION["errors"][$_SESSION["count_errors"]] = $_SESSION["number"];
					$_SESSION["count_errors"]++;
				}
				break;
			case 7:
				if ($_POST["text"] == "верно") {
					$_SESSION["true"]++;
				} else {
					$_SESSION["errors"][$_SESSION["count_errors"]] = $_SESSION["number"];
					$_SESSION["count_errors"]++;
				}
				break;
			case 8:
				if ($_POST["text"] == "верно") {
					$_SESSION["true"]++;
				} else {
					$_SESSION["errors"][$_SESSION["count_errors"]] = $_SESSION["number"];
					$_SESSION["count_errors"]++;
				}
				break;
			case 9:
				if ($_POST["text"] == "верно") {
					$_SESSION["true"]++;
				} else {
					$_SESSION["errors"][$_SESSION["count_errors"]] = $_SESSION["number"];
					$_SESSION["count_errors"]++;
				}
				break;
			case 10:
				if (isset($_POST["var1"])) {
					$_SESSION["true"]++;
				} else {
					$_SESSION["errors"][$_SESSION["count_errors"]] = $_SESSION["number"];
					$_SESSION["count_errors"]++;
				}
				break;
			
			default:
				# code...
				break;
		}

		$_SESSION["number"]++;
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Система тестирования</title>
	<link href="css/style.css" rel="stylesheet" type="text/css" />
	<link rel="icon" type="image/png" href="favicon.ico">
	<style type="text/css">
		#content {
			width: 75%;
			min-width: 1000px;
			max-width: 1350px;
			min-height: 300px;
			margin: 2% auto 0 auto;
			padding: 0;
		}
	</style>
</head>
<body>
	<div id="content">
		<div class="top-panel">
			<div style="padding: 5px 5px;">
				<div style="float:left" id="ptitle"><?php if (empty($_SESSION["username"])) { echo "Тест"; } else { echo $_SESSION["username"]; } ?></div>
				<div style="float:right">
					<?php if (!empty($_SESSION["username"]) && ($_SESSION["number"] <= 10)) { echo "Вопрос №".$_SESSION["number"]; } ?>
				</div>

			</div>
		</div>
		<div class="main">
			<div class="right-panel">
				<div class="rp-content">
					<div id="content-box">
						<?php
							if (empty($_SESSION["username"])) {
								?>
								<form action="index.php" method="POST">
									<p>Введите имя: <input type="text" name="username">
									<button type="submit">Начать тестирование</button></p>
								</form>
						<?php
							} else {
								switch ($_SESSION["number"]) {
									case 1:
										?>
										<form action="index.php" method="POST">
											<p><b>Вопрос номер один?</b></p>
											<p><input name="var1" type="radio" value="var1">Верно</p>
											<p><input name="var2" type="radio" value="var2">Неверно</p>
											<p><input name="var3" type="radio" value="var3">Неверно</p>
											<p><input type="submit" value="Отправить"></p>
										</form>
										<?php
										break;
									case 2:
										?>
										<form action="index.php" method="POST">
											<p><b>Вопрос номер два?</b></p>
											<p><input name="var1" type="radio" value="var1">Верно</p>
											<p><input name="var2" type="radio" value="var2">Неверно</p>
											<p><input name="var3" type="radio" value="var3">Неверно</p>
											<p><input type="submit" value="Отправить"></p>
										</form>
										<?php
										break;
									case 3:
										?>
										<form action="index.php" method="POST">
											<p><b>Вопрос номер три?</b></p>
											<p><input name="var1" type="radio" value="var1">Верно</p>
											<p><input name="var2" type="radio" value="var2">Неверно</p>
											<p><input name="var3" type="radio" value="var3">Неверно</p>
											<p><input type="submit" value="Отправить"></p>
										</form>
										<?php
										break;
									case 4:
										?>
										<form action="index.php" method="POST">
											<p><b>Вопрос номер четыре?</b></p>
											<input type="checkbox" id="var1" name="var1" value="var1"/>
											<label for="var1">Неверно</label>
											<input type="checkbox" id="var2" name="var2" value="var2"/>
											<label for="var2">Верно</label>
											<input type="checkbox" id="var3" name="var3" value="var3"/>
											<label for="var3">Верно</label>
											<p><input type="submit" value="Отправить"></p>
										</form>
										<?php
										break;
									case 5:
										?>
										<form action="index.php" method="POST">
											<p><b>Вопрос номер пять?</b></p>
											<input type="checkbox" id="var1" name="var1" value="var1"/>
											<label for="var1">Неверно</label>
											<input type="checkbox" id="var2" name="var2" value="var2"/>
											<label for="var2">Верно</label>
											<input type="checkbox" id="var3" name="var3" value="var3"/>
											<label for="var3">Верно</label>
											<p><input type="submit" value="Отправить"></p>
										</form>
										<?php
										break;
									case 6:
										?>
										<form action="index.php" method="POST">
											<p><b>Вопрос номер шесть?</b></p>
											<input type="checkbox" id="var1" name="var1" value="var1"/>
											<label for="var1">Неверно</label>
											<input type="checkbox" id="var2" name="var2" value="var2"/>
											<label for="var2">Верно</label>
											<input type="checkbox" id="var3" name="var3" value="var3"/>
											<label for="var3">Верно</label>
											<p><input type="submit" value="Отправить"></p>
										</form>
										<?php
										break;
									case 7:
										?>
										<form action="index.php" method="POST">
											<p><b>Вопрос номер семь?</b></p>
											<p><textarea rows="10" cols="45" name="text"></textarea></p>
											<p><input type="submit" value="Отправить"></p>
										</form>
										<?php
										break;
									case 8:
										?>
										<form action="index.php" method="POST">
											<p><b>Вопрос номер восемь?</b></p>
											<p><textarea rows="10" cols="45" name="text"></textarea></p>
											<p><input type="submit" value="Отправить"></p>
										</form>
										<?php
										break;
									case 9:
										?>
										<form action="index.php" method="POST">
											<p><b>Вопрос номер девять?</b></p>
											<p><textarea rows="10" cols="45" name="text"></textarea></p>
											<p><input type="submit" value="Отправить"></p>
										</form>
										<?php
										break;
									case 10:
										?>
										<form action="index.php" method="POST">
											<p><b>Вопрос номер десять?</b></p>
											<p><input name="var1" type="radio" value="var1">Верно</p>
											<p><input name="var2" type="radio" value="var2">Неверно</p>
											<p><input name="var3" type="radio" value="var3">Неверно</p>
											<p><input type="submit" value="Отправить"></p>
										</form>
										<?php
										break;
									case 11:
										?>
											<p><h1>Результаты</h1></p>
											<p>Количество верных ответов: <?php echo $_SESSION["true"]; ?></p>
											<p>Количество ошибок в вопросах: <?php
												if ($_SESSION["count_errors"] == 0) {
													echo "Ошибок нет!";
												} else {
													for ($i = 0; $i < $_SESSION["count_errors"]; $i++) {
														if ($i == 0) {
															echo " ".$_SESSION["errors"][$i];
														} else {
															echo ", ".$_SESSION["errors"][$i];
														}
													}
												}
											?>
											</p>
											<p>Время прохождения теста: <?php
												$now = new DateTime("now");
												$interval = $_SESSION["time"]->diff($now);
												echo $interval->format("%h часов, %i минут и  %s секунд");
											?>
											</p>
											<a href="/application/ne/hochu/zamorachivatsya/4/index.php">Возврат</a>
										<?php
											session_destroy();
										break;
									default:

										break;
								}
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>