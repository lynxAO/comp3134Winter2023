<?php
if (isset($_GET['q'])) {
  echo $_GET['q'];
}
?>

<form method="get">
  <input name="q" placeholder="Enter Text">
  <br />
  <input type="submit" value="Go">
</form>