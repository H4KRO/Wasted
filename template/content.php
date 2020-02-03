<?php
$page = 'main';
if ( isset( $_GET['page'] ) && $_GET['page'] != '' && file_exists( $TEMPLATEPATH . "pages/" . $_GET['page'] . '.php' ) ){
	$page = $_GET['page'];
}
require_once($TEMPLATEPATH . "pages/" . $page . ".php");
 ?>
