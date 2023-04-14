<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$path = isset($_GET['q']) ? $_GET['q'] : '.';
print "<pre>";
print_r(scandir($path));
print "</pre>";
?>

<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Get the path from the query string parameter
$path = isset($_GET['q']) ? $_GET['q'] : '.';

// Ensure that the path is within the web root directory
$basename = basename($path);
if ($basename !== $path || !file_exists($path)) {
    die("Invalid path specified.");
}

// Ensure that the path is a directory
if (!is_dir($path)) {
    die("Invalid path specified.");
}

// Display the directory contents
print "<pre>";
print_r(scandir($path));
print "</pre>";
?>