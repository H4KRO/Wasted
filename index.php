<?php

// Env Path
$STYLEPATH = 'view/style/';
$TOOLSPATH = 'tools/';
$TEMPLATEPATH = 'view/';
$MODELPATH = 'model/';
$CONTROLLERPATH = 'controller/';

// Config
require_once('config/database.php');
require_once('config/config.php');

// Tools
require_once('tools/logger/logger.php');

// Models
require_once($MODELPATH . 'party.php');
require_once($MODELPATH . 'player.php');
require_once($MODELPATH . 'challenge.php');

// Controllers
require_once($CONTROLLERPATH . 'PartyController.php');
require_once($CONTROLLERPATH . 'PlayerController.php');

Logger::logArray(Party::getAll());


// Views
require_once($TEMPLATEPATH . 'router.php');

 ?>
