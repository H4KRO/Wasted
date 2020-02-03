<?php

// Env Path
$STYLEPATH = 'template/style/';
$TOOLSPATH = 'tools/';
$TEMPLATEPATH = 'template/';

// Config
require_once('config/database.php');
require_once('config/config.php');

// Tools
require_once('tools/logger/logger.php');

// Templating
require_once('template/header.php');
require_once('template/content.php');
require_once('template/footer.php');
 ?>
