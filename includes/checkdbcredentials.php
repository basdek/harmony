<?php
$dbcredentials = 'conf/dbcredentials'; // Default location of dbcredentials

if (!file_exists($dbcredentials)) { // We assume the user doesn't edit files manually, so this should be reliable
    $dbcredentials_filehandler = fopen($dbcredentials, 'a+') or die("Permission error on /conf."); // Open the operation
    fclose($dbcredentials_filehandler); // Close it
    chmod($dbcredentials, 0777); // This should be changed to read-only post-install
    header('Location: ../install.php'); // Redirect to install.php to finish installation
}
?>
