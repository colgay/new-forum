<?php
try {
	$pdo = new PDO("mysql:host=" . $config['db_host'] . ";dbname=" . $config['db_name'] . ";charset=utf8", $config['db_user'], $config['db_pass']);
	$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo "Connection failed: " . $e->getMessage();
}
?>