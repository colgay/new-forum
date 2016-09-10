<?php
$end = new DateTime("now");
$start = new DateTime("now");
$start->modify("-130 years");
$date = DateTime::createFromFormat("Y/m/d", $_POST["dob"]);

if ($date >= $start && $date <= $end) {
	echo json_encode(true);
} else {
	echo json_encode(false);
}
?>