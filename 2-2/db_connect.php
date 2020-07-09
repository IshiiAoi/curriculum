<?php
define('DB_DATABSASE','YIGroupBlog');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('PDO_DSN', 'mysql:dbname=YIGroupBlog;host=localhost;charset=utf8'.DB_DATABSASE);

function db_connect() {
  try {
      $pdo = new PDO(PDO_DSN, DB_USERNAME, DB_PASSWORD);
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $pdo;
  }catch (PDOException $e) {
      echo 'Error: ' . $e->getMessage();
      die();
  }
}