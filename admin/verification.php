<?php

if (!isset($_SESSION)) session_start();

if (!isset($_SESSION['userEmail'])) {
	session_destroy();
	header("Location: ./login.html"); exit;
}
?>