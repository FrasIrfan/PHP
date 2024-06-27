<?php
// Start or resume the session
session_start();

// Unset all session variables
// This removes all session variables currently set
session_unset();

// Destroy the session
// This deletes the session data on the server and invalidates the session ID
session_destroy();

// Redirect the user to the login page
// The Location header sends a raw HTTP header to the browser, instructing it to navigate to login.php
header("Location: login.php");

// Terminate the script
// This ensures that no further code is executed after the redirection
exit();
?>
