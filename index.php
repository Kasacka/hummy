<?php
	error_reporting(0);

	require_once('UnhandledException.php');

	set_error_handler(function($errorNumber, $errorText) {
		throw new UnhandledException($errorNumber, $errorText);
	});

	try {
		echo 4 / 0;
	} catch (UnhandledException $exception) {
		echo $exception->getMessage();
	}