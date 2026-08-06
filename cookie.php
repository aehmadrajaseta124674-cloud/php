<!DOCTYPE html>
<html>
<head>
    <title>Create Cookie</title>
</head>
<body>

<h2>Create Cookie</h2>

<form action="" method="post">
    Enter Your Name:
    <input type="text" name="username" required>
    <input type="submit" name="submit" value="Create Cookie">
</form>

<?php
if (isset($_POST['submit'])) {
    $username = $_POST['username'];

    // Create cookie (expires in 1 hour)
    setcookie("username", $username, time() + 3600, "/");

    echo "<p>Cookie has been created successfully.</p>";
    echo "<p>Please refresh the page to see the cookie value.</p>";
}

// Display cookie value
if (isset($_COOKIE['username'])) {
    echo "<h3>Cookie Value: " . $_COOKIE['username'] . "</h3>";
}
?>

</body>
</html>