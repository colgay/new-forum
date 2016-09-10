<?php
require_once("../config/config.php");
require_once("db_connect.php");

$data = array();

$sql = "SELECT * FROM users WHERE email = :email";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(":email", $_POST["name"], PDO::PARAM_STR);
$stmt->execute();
$row = $stmt->fetch(PDO::FETCH_ASSOC);

if ($row) {
	if (password_verify($_POST["password"], $hashAndSalt)) {

	} else {
		$data["error"] = 'Your password is incorrect.';
		
	}
}
?>