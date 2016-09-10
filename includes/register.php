<?php
require_once("../config/config.php");
require_once("functions.php");
require_once("db_connect.php");

$data = array();

$hash = passwordHash($_POST["password"], $config["salt"]);

$sql = "INSERT INTO users (`name`, `nickname`, `email`, `password`, `gender`, `dob`, `ip`, `reg_date`)
		VALUES (:name, :nickname, :email, :password, :gender, STR_TO_DATE(:dob, '%Y/%m/%d'), :ip, NOW())";

$stmt = $pdo->prepare($sql);
$stmt->bindParam(":name", $_POST["name"], PDO::PARAM_STR);
$stmt->bindParam(":nickname", $_POST["nickname"], PDO::PARAM_STR);
$stmt->bindParam(":email", $_POST["email"], PDO::PARAM_STR);
$stmt->bindParam(":password", $hash, PDO::PARAM_STR);
$stmt->bindParam(":gender", $_POST["gender"], PDO::PARAM_STR);
$stmt->bindParam(":dob", $_POST["dob"], PDO::PARAM_STR);
$stmt->bindParam(":ip", $_SERVER['REMOTE_ADDR'], PDO::PARAM_STR);

if ($stmt->execute()) {
	$data["success"] = true;
} else {
	$data["success"] = false;
	$data["error"] = 'An error occurred, please try again later.';
}

echo json_encode($data);
?>