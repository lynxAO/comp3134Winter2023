<!DOCTYPE html>
<html>
<head>
	<title>Weak Password</title>
</head>
<body>
	<h1>Weak Password</h1>
	<form method="post">
		<label>Password</label>
		<input type="password" name="password">
		<br>
		<input type="submit">
	</form>
</body>
</html>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (isset($_POST['password'])) {
    $password = $_POST['password'];
    $username = $_POST['username'];

    // check password
    if ($password === "password123") {
        echo "<h1>Welcome $username to Your Portal</h1>";
    } else {
        echo "<h1>Invalid Password</h1>";
    }
} else {
    // display form
    echo "<h1>Weak Password</h1>";
    echo "<form method='post'>";
    echo "<label>Password</label>";
    echo "<input type='password' name='password'>";
    echo "<input type='hidden' name='username' value='johndoe'>";
    echo "<br/>";
    echo "<input type='submit'>";
    echo "</form>";
}
?>

