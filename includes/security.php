<?php
if(!isset($_SESSION['login']) || !isset($_SESSION['password'])){
	header("location:login.php");
	exit;
}