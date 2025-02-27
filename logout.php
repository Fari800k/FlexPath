<?php
session_start();
session_unset();
session_destroy();

// Prevent going back after logout
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Expires: Thu, 01 Jan 1970 00:00:00 GMT");
header("Pragma: no-cache");

header("Location: login.html");
exit;
?>

