<?php
// Delete the cookie by setting its expiration time to the past
setcookie("username", "", time() - 3600, "/");

echo "Cookie deleted successfully!";
?>