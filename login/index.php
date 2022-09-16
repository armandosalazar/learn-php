<?php
include_once 'includes/user.php';
include_once 'includes/user_session.php';

$userSession = new UserSession();
$user = new User();

if (isset($_SESSION['username'])) {
  // echo 'Hay sesión';
  $user->setUser($userSession->getCurrentUser());
  include_once 'views/home.php';
} else if (isset($_POST['username']) && isset($_POST['password'])) {
  // echo 'Validación de login<br>';
  $username = $_POST['username'];
  $password = $_POST['password'];
  if ($user->userExists($username, $password)) {
    // echo 'Usuario validado';
    $userSession->setCurrentUser($username);
    $user->setUser($username);
    include_once 'views/home.php';
  } else {
    $errorLogin = 'Usuario y/o password incorrecto';
    include_once 'views/login.php';
  }
} else {
  // echo 'Login';
  include_once 'views/login.php';
}