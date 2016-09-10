<!DOCTYPE HTML>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/style.css">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap/bootstrap.min.js"></script>

		<title><?= isset($PageTitle) ? $PageTitle : "HKGSE"?></title>
		<?php if (function_exists('customPageHeader')) {customPageHeader();} ?>
	</head>
	<body>
		<div id="wrapper">