<?php

// Env Path
$STYLEPATH = "template/style/";
$TOOLSPATH = 'tools/';

// Config
include('config/database.php');
include('config/config.php');

// Tools
include('tools/logger/logger.php');

// Templating
include('template/header.php');
include('template/content.php');
include('template/footer.php');
 ?>
