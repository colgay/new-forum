<?php
require_once("config/config.php");
require_once("includes/db_connect.php");

if ($pdo) {
	$sql = "CREATE TABLE IF NOT EXISTS `users` (
		`id` INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		`name` VARCHAR(64) NOT NULL,
		`nickname` VARCHAR(16) NOT NULL,
		`email` VARCHAR(64) NOT NULL,
		`password` VARCHAR(64) NOT NULL,
		`gender` ENUM('male', 'female', 'other') NOT NULL,
		`dob` DATE NOT NULL,
		`ip` VARCHAR(15),
		`reg_date` DATETIME)";

	$pdo->exec($sql);
	echo "table 'users' created.";
}
?>