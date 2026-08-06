<?php

session_start();

echo("Hello Class in the session of php".$_SESSION['username']);

session_destroy();
?>