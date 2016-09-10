<?php
function passwordHash($password, $salt) {
	$options = ['cost' => 10, 'salt' => $salt];
	$hash = password_hash($password, PASSWORD_DEFAULT, $options);

	return $hash;
}

function passwordVerify($password, $hash, $salt) {
	$options = ['cost' => 10, 'salt' => $salt];
	$hash2 = password_hash($password, PASSWORD_DEFAULT, $options);

	return ($hash == $hash2) ? true : false;
}
?>