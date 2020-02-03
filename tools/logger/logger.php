<?php
class logger {

  static $logs = [];

  static function init(){
    $GLOBALS['pdo']->query("
      CREATE TABLE `wasted`.`logger` IF NOT EXISTS (
        `id` INT NOT NULL AUTO_INCREMENT ,
        `time` DATETIME NOT NULL ,
        `log` VARCHAR(250) NOT NULL ,
        PRIMARY KEY (`id`)) ENGINE = MyISAM;"
    );
  }

  static function log($text){
    Logger::init(); 
    $timeDay = date("Y-m-d");
    $timeHour = date("H:i:s");
    $log_raw = $timeHour . " : " . $text;
    array_push(Logger::$logs, $log_raw);
    $GLOBALS['pdo']->query("
      INSERT INTO `logger` (`id`, `time`, `log`)
      VALUES (NULL, '" . $timeDay . " " . $timeHour .  "', '" . $text . "');"
    );
  }

  static function displayLogs(){
    if($GLOBALS['logger'] && count(Logger::$logs) > 0){
      echo "<div class=\"logger\">";
      foreach(Logger::$logs as $log){
        echo "<p>" . $log . "</p><br>";
      }
      echo "</div>";
    }
  }
}
 ?>
