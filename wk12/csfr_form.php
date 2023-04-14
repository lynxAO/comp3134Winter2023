<?php
session_start();

// create a random value for the confirmation session variable
$confirmationValue = rand();

// store the confirmation value in the session variable
$_SESSION['confirmation'] = $confirmationValue;
?>

<!DOCTYPE html>
<html>
<head>
  <title>CSRF Form</title>
</head>
<body>
  <h1>CSRF Form</h1>
  <form action="csfr_action.php" method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username"><br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password"><br><br>
    <input type="hidden" name="confirmation" value="<?php echo $confirmationValue; ?>">
    <input type="submit" value="Submit">
  </form>
  <div id="splash"></div>
</body>
</html>
