<?php

class DataBase
{
  private $host;
  private $db;
  private $user;
  private $password;
  private $charset;

  public function __construct()
  {
    $this->host = "127.0.0.1";
    $this->db = "php_db";
    $this->user = "root";
    $this->password = "root";
    $this->charset = "utf8mb4";
  }

  public function connect()
  {
    try {
      $dsn = "mysql:host=" . $this->host . ";dbname=" . $this->db . ";charset=" . $this->charset;
      $options = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false
      ];
      return new PDO($dsn, $this->user, $this->password, $options);
    } catch (PDOException $ex) {
      print_r("Error connection: " . $ex->getMessage());
    }
  }

}