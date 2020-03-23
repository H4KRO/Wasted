<!DOCTYPE html>
<html>
<head>
  <title>Wasted!</title>
  <link href="https://fonts.googleapis.com/css?family=Bungee+Shade|Luckiest+Guy&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Baloo+2&display=swap" rel="stylesheet"> 
  <link rel="stylesheet" type="text/css" href="<?php echo $STYLEPATH; ?>style.css">
</head>
<body>
  <?php
  if(isset($error)){
    ?>
  <div id="error">
    <p><?php echo $error; ?></p>
  </div>
  <?php
  }
   ?>
