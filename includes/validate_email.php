<?php
require_once("../config/config.php");
require_once("db_connect.php");

$sql = "SELECT COUNT(*) from users WHERE email=:email LIMIT 1";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(":email", $_POST["email"], PDO::PARAM_STR);
$stmt->execute();

if ($stmt->fetchColumn()) {
	echo json_encode(false);
} else {
	echo json_encode(true);
}
?>