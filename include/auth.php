<?php
require 'connect.php';
session_start();

if (!isset($_SESSION['SESS_MEMBER_USERNAME'])) {
  header('location: ../index.php');
  exit();
} else {
  // Retrieve session ariables
  $username  = $_SESSION['SESS_MEMBER_USERNAME'];
  $pass      = $_SESSION['SESS_MEMBER_PASS'];

  // require 'include/query.php';
}