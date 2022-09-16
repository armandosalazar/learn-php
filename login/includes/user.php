<?php
include_once 'database.php';

class User extends DataBase
{
  private $username;
  private $password;

  function insertUser($username, $password)
  {
    $md5password = md5($password);
    $query = $this->connect()->prepare('INSERT INTO user (username, password) VALUES (?, ?)');
    echo $query->execute([$username, $md5password]);
    echo $query->rowCount();
  }

  public function userExists($username, $password)
  {
    $md5password = md5($password);
    $query = $this->connect()->prepare('SELECT * FROM user WHERE username = :username AND password = :password');
    $query->execute(['username' => $username, 'password' => $md5password]);
    return (bool)$query->rowCount();
  }

  public function setUser($username)
  {
    $query = $this->connect()->prepare('SELECT * FROM user WHERE  username = :username');
    $query->execute(['username' => $username]);
    foreach ($query as $currentUser) {
      $this->username = $currentUser['username'];
      $this->password = $currentUser['password'];
    }
  }

  public function getUser()
  {
    return $this->username;
  }
}