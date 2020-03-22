<?php
class logger {

  static $logs = [];

  static function log($text){
    $timeDay = date("Y-m-d");
    $timeHour = date("H:i:s");
    $log_raw = $timeHour . " : " . $text;
    array_push(Logger::$logs, $log_raw);
    $GLOBALS['pdo']->query("
      INSERT INTO `logger`(`id`, `time`, `log`)
      VALUES (NULL, '" . $timeDay . " " . $timeHour .  "', '" . $text . "');"
    );
  }

  static function logSimple($text){
    array_push(Logger::$logs, $text);
  }

  static function logArray($array){
    ob_start();
    print_r($array);
    $log_raw = "<pre>" . ob_get_contents() . "</pre>";
    ob_end_clean();
    array_push(Logger::$logs, $log_raw);

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
