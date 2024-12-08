<?php
function test_input($username) {
  $data = trim($username);
  $data = stripslashes($username);
  $data = htmlspecialchars($username);
  return $data;
}
?>
