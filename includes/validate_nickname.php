<?php
require_once("../config/config.php");
require_once("db_connect.php");

$sql = "SELECT COUNT(*) FROM users WHERE nickname = :nickname LIMIT 1";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":nickname", $_POST["nickname"], PDO::PARAM_STR);
$stmt->execute();

if ($stmt->fetchColumn()) {
	echo json_encode(false);
} else {
	echo json_encode(true);
}
?>