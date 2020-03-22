<?php

// Env Path
$STYLEPATH = 'view/style/';
$TOOLSPATH = 'tools/';
$TEMPLATEPATH = 'view/';

// Config
require_once('config/database.php');
require_once('config/config.php');

// Tools
require_once('tools/logger/logger.php');

// Templating
require_once($TEMPLATEPATH . 'header.php');
require_once($TEMPLATEPATH . 'content.php');
require_once($TEMPLATEPATH . 'footer.php');
 ?>
