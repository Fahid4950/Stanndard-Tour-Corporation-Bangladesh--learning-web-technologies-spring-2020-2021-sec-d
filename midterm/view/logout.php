<?php
session_start();
	$_SESSION["valid"] = false;
	header('location: ../view/home.html');
?>