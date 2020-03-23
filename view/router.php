<?php

if(isset($_GET['controller']) && isset($_GET['method']) && method_exists($_GET['controller'], $_GET['method'])) {
	$controller = $_GET['controller'];
	$method = $_GET['method'];
	$controller::$method();
}else{
	$error = "TEST";
	$page = "main";
	require_once("view/main.php");
}

?>
