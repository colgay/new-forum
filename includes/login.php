<?php
require_once("../config/config.php");
require_once("functions.php");
require_once("db_connect.php");

if (!isset($_SESSION)) session_start();

$data = array();

if (empty($_POST["email"]) || empty($_POST["password"])) {
	$data["success"] = false;
} else {
	$sql = "SELECT * FROM users WHERE email = :email";

	$stmt = $pdo->prepare($sql);
	$stmt->bindParam(":email", $_POST["email"], PDO::PARAM_STR);
	$stmt->execute();
	$row = $stmt->fetch(PDO::FETCH_ASSOC);

	if ($row) {
		if (passwordVerify($_POST["password"], $row["password"], $config["salt"])) {
			$_SESSION["user_id"] = $row["id"];
			$_SESSION["user_email"] = $row["email"];
			$_SESSION["user_name"] = $row["nickname"];

			if (isset($_POST["remember"])) {
				setcookie("user_email", $row["email"], time()+3600*24*30);
				setcookie("user_password", $row["password"], time()+3600*24*30);
			}

			$data["success"] = true;
		} else {
			$data["success"] = false;
			$data["error"] = 'Your password is incorrect.';
		}
	} else {
		$data["success"] = false;
		$data["error"] = 'Your email address is invalid.';
	}
}

echo json_encode($data);
?>