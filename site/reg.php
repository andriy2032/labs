<?php
$name = $_POST['username'];
$pass = $_POST['pass'];
if (isset($name) && isset($pass)) {
	$name = filter_var(trim($name), FILTER_SANITIZE_STRING);
	$pass = filter_var(trim($pass), FILTER_SANITIZE_STRING);
	$mysql = new mysqli('localhost', 'root', 'usbw', 'users');
	$mysql->query("INSERT INTO `data` (`name`, `pass`)
	VALUES('$name', '$pass')");
	echo 'Вітаю ви зареєструвались!';
}
else {
	echo 'Помилка реєстрації!';
}
?>