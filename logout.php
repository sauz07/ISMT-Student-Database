<?php
include('./includes/authentication.php'); // Include the authentication file to ensure only authenticated users access this page.
session_start(); // Start the PHP session.

// Check if the user is currently logged in (session variables for 'username' and 'type' are set).
if (isset($_SESSION['username']) && isset($_SESSION['type'])) {
    // If the user is logged in, proceed with the logout process.

    // Destroy the current session, clearing all session data for the user.
    session_destroy();

    // Unset specific session variables for 'username' and 'type'.
    unset($_SESSION['username']);
    unset($_SESSION['type']);

    // Redirect the user to the login page (assuming the login page is located at "../testmis/").
    header("location: ../testmis/");
    exit(); // Terminate the script to prevent any further execution.
}

// If the user is not logged in (no 'username' and 'type' session variables set),
// this script won't do anything, and the user remains on the current page.
// Note that this script should be accessible only to authenticated users.
// Unauthorized access might be prevented through the 'authentication.php' file.
?>
