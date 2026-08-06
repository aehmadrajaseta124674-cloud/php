<?php
// Check if the cookie exists
if (isset($_COOKIE["username"])) {
    echo "<h2>Cookie Found!</h2>";
    echo "Username: " . $_COOKIE["username"];
} else {
    echo "<h2>Cookie Not Found!</h2>";
}
?>