<?php
require('config.php');
$password = $_POST['password'];

if($password == 'something'){
	
	// Success
	session_start();

	$_SESSION['logged_in'] = 1;

	header("Location:/");

}else{
	unset($_SESSION['logged_in']);
}
// do the query
