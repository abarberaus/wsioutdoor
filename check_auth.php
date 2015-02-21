<?php

session_start();

if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == 1){
	// They are good!
}else{
	// they are not good, redirect them to the login page.
	header('Location: /?message=1');
}
