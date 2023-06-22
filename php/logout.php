<?php
  if('/ideaprotect/index.php'==$_SERVER['PHP_SELF']){
    require 'php/connect.php';
  } else {
    require 'connect.php';
  }


// require 'connect.php';

$_SESSION = [];
session_unset();
session_destroy();
header("Location: php/login.php");
