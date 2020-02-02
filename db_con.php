<?php
  $user = 'root';
  $password = '';
  $dsn = 'mysql:host=localhost;dbname=doctor';
  try{
  	$con = new PDO($dsn, $user, $password);
  //echo 'Connected...';
  }catch(PDOException $e) {
  	echo 'Error: ' . $e->getMessage();
  }