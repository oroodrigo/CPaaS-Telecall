<?php
session_start();
$_SESSION = array();
session_destroy();

if (empty($_SESSION)) {
  echo json_encode(["success" => true, "response" => 'Session destroyed.']);
}
exit;
