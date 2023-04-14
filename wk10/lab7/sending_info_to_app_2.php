<!DOCTYPE html>
<html>

<head>
    <title>Sending Information to Application - Part 2</title>
</head>

<body>
    <?php
    if (isset($_GET['q'])) {
        $input = $_GET['q'];
        echo "You entered: ";
        echo htmlspecialchars($input, ENT_QUOTES, 'UTF-8');
    }
    ?>
    <form method="get">
        <input name="q" placeholder="Enter Text">
        <br />
        <input type="submit" value="Go">
    </form>
</body>

</html>