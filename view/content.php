<?php
/*
$page = 'main';
if ( isset( $_GET['page'] ) && $_GET['page'] != '' && file_exists( $TEMPLATEPATH . "pages/" . $_GET['page'] . '.php' ) )
{
	$page = $_GET['page'];
}
require_once($TEMPLATEPATH . "pages/" . $page . ".php");
*/

if(isset($_GET['controller']) && isset($_GET['method']) && method_exists($_GET['controller'], $_GET['method'])) {
	$controller = $_GET['controller'];
	$method = $_GET['method'];
	$controller::$method();
}else{
	require_once($TEMPLATEPATH . "pages/main.php");
}

 ?>
