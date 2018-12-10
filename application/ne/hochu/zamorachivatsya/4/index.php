<?php
	session_start();

	# ���������� �� ����� PHP ����������� ���������� ������� ������������ � ����������� ��������� ����������:
	# 1. �� ������� �������� ���������� ����������� ������ ����� ������������. ��� ��� ������ ����� ���������� �� ���� ��������� � �������.
	# 2. ���������� ������� ������� 10 ��������. ������� ������ ���� ��������� �����: ������ � ����� ���������� �������, ������ � ����������� ����������� ��������, ������ �� ������ ������� �������� ������.
	# 3. ����� ������ �� ��� ������� ������ ���������� �������� � ������������ ������������. �� ��� ������ ������������ ��������� ���������� ����������: ���������� ���������� �������, ������ ��������, � ������� ���� �������� ������, ����� ����������� �����.


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
				if ($_POST["text"] == "�����") {
					$_SESSION["true"]++;
				} else {
					$_SESSION["errors"][$_SESSION["count_errors"]] = $_SESSION["number"];
					$_SESSION["count_errors"]++;
				}
				break;
			case 8:
				if ($_POST["text"] == "�����") {
					$_SESSION["true"]++;
				} else {
					$_SESSION["errors"][$_SESSION["count_errors"]] = $_SESSION["number"];
					$_SESSION["count_errors"]++;
				}
				break;
			case 9:
				if ($_POST["text"] == "�����") {
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
	<title>������� ������������</title>
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
				<div style="float:left" id="ptitle"><?php if (empty($_SESSION["username"])) { echo "����"; } else { echo $_SESSION["username"]; } ?></div>
				<div style="float:right">
					<?php if (!empty($_SESSION["username"]) && ($_SESSION["number"] <= 10)) { echo "������ �".$_SESSION["number"]; } ?>
				</div>

			</div>
		</div>
		<div class="main">
			<div class="right-panel">
				<div class="rp-content">
					<!-- <div class="news-box">�������</div> -->
					<div id="content-box">
						<center>
						<?php
							if (empty($_SESSION["username"])) {
								?>
								<form action="index.php" method="POST">
									<p>������� ���: <input type="text" name="username">
									<button type="submit">������ ������������</button></p>
								</form>
						<?php
							} else {
								switch ($_SESSION["number"]) {
									case 1:
										?>
										<form action="index.php" method="POST">
											<p><b>������ ����� ����?</b></p>
											<p><input name="var1" type="radio" value="var1">�����</p>
											<p><input name="var2" type="radio" value="var2">�������</p>
											<p><input name="var3" type="radio" value="var3">�������</p>
											<p><input type="submit" value="���������"></p>
										</form>
										<?php
										break;
									case 2:
										?>
										<form action="index.php" method="POST">
											<p><b>������ ����� ���?</b></p>
											<p><input name="var1" type="radio" value="var1">�����</p>
											<p><input name="var2" type="radio" value="var2">�������</p>
											<p><input name="var3" type="radio" value="var3">�������</p>
											<p><input type="submit" value="���������"></p>
										</form>
										<?php
										break;
									case 3:
										?>
										<form action="index.php" method="POST">
											<p><b>������ ����� ���?</b></p>
											<p><input name="var1" type="radio" value="var1">�����</p>
											<p><input name="var2" type="radio" value="var2">�������</p>
											<p><input name="var3" type="radio" value="var3">�������</p>
											<p><input type="submit" value="���������"></p>
										</form>
										<?php
										break;
									case 4:
										?>
										<form action="index.php" method="POST">
											<p><b>������ ����� ������?</b></p>
											<input type="checkbox" id="var1" name="var1" value="var1"/>
											<label for="var1">�������</label>
											<input type="checkbox" id="var2" name="var2" value="var2"/>
											<label for="var2">�����</label>
											<input type="checkbox" id="var3" name="var3" value="var3"/>
											<label for="var3">�����</label>
											<p><input type="submit" value="���������"></p>
										</form>
										<?php
										break;
									case 5:
										?>
										<form action="index.php" method="POST">
											<p><b>������ ����� ����?</b></p>
											<input type="checkbox" id="var1" name="var1" value="var1"/>
											<label for="var1">�������</label>
											<input type="checkbox" id="var2" name="var2" value="var2"/>
											<label for="var2">�����</label>
											<input type="checkbox" id="var3" name="var3" value="var3"/>
											<label for="var3">�����</label>
											<p><input type="submit" value="���������"></p>
										</form>
										<?php
										break;
									case 6:
										?>
										<form action="index.php" method="POST">
											<p><b>������ ����� �����?</b></p>
											<input type="checkbox" id="var1" name="var1" value="var1"/>
											<label for="var1">�������</label>
											<input type="checkbox" id="var2" name="var2" value="var2"/>
											<label for="var2">�����</label>
											<input type="checkbox" id="var3" name="var3" value="var3"/>
											<label for="var3">�����</label>
											<p><input type="submit" value="���������"></p>
										</form>
										<?php
										break;
									case 7:
										?>
										<form action="index.php" method="POST">
											<p><b>������ ����� ����?</b></p>
											<p><textarea rows="10" cols="45" name="text"></textarea></p>
											<p><input type="submit" value="���������"></p>
										</form>
										<?php
										break;
									case 8:
										?>
										<form action="index.php" method="POST">
											<p><b>������ ����� ������?</b></p>
											<p><textarea rows="10" cols="45" name="text"></textarea></p>
											<p><input type="submit" value="���������"></p>
										</form>
										<?php
										break;
									case 9:
										?>
										<form action="index.php" method="POST">
											<p><b>������ ����� ������?</b></p>
											<p><textarea rows="10" cols="45" name="text"></textarea></p>
											<p><input type="submit" value="���������"></p>
										</form>
										<?php
										break;
									case 10:
										?>
										<form action="index.php" method="POST">
											<p><b>������ ����� ������?</b></p>
											<p><input name="var1" type="radio" value="var1">�����</p>
											<p><input name="var2" type="radio" value="var2">�������</p>
											<p><input name="var3" type="radio" value="var3">�������</p>
											<p><input type="submit" value="���������"></p>
										</form>
										<?php
										break;
									case 11:
										?>
											<p><h1>����������</h1></p>
											<p>���������� ������ �������: <?php echo $_SESSION["true"]; ?></p>
											<p>���������� ������ � ��������: <?php
												if ($_SESSION["count_errors"] == 0) {
													echo "������ ���!";
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
											<p>����� ����������� �����: <?php
												$now = new DateTime("now");
												$interval = $_SESSION["time"]->diff($now);
												echo $interval->format("%h �����, %i ����� �  %s ������");
											?>
											</p>
											<a href="/">�������</a>
										<?php
											session_destroy();
										break;
									default:

										break;
								}
							}
						?>
						</center>	
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="cr">&copy; <a href="http://vk.com/id58853410" style="color: #555;">igorek1794</a>, 2018<br>��� ����� �������� �������������� �������</div>
</body>
</html>