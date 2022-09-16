<?php

class UserSession
{

  public function __construct()
  {
    session_name('username');
    session_start();
  }

  function setCurrentUser($username)
  {
    $_SESSION['username'] = $username;
  }

  function getCurrentUser()
  {
    return $_SESSION['username'];
  }

  function closeSession()
  {
    session_unset();
    session_destroy();
  }
}