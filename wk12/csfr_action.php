<?php
session_start();

// get the session variable named "confirmation"
$sessionConfirmation = isset($_SESSION['confirmation']) ? $_SESSION['confirmation'] : '';

// get the POST value named "confirmation"
$postConfirmation = isset($_POST['confirmation']) ? $_POST['confirmation'] : '';

// ensure that the session variable and POST value are equal
if ($sessionConfirmation === $postConfirmation) {
  // CSRF validation succeeded
  echo 'CSRF validation succeeded!';
} else {
  // CSRF validation failed
  echo 'CSRF validation failed!';
}
?>
