<?php
// File path
if (!isset($_SESSION["role"]) || $_SESSION["role"] != "admin") {
    header("Location: login.php");

}

$file_path = 'newfile.txt';

// ID to match for deletion

$id_to_delete = $_GET['id'];


// Read the file line by line
$file = file($file_path);

// Open the file for writing
$file_handle = fopen($file_path, 'w');

// Loop through the file
foreach ($file as $line) {
    // Explode the line to get the ID
    $parts = explode(',', $line);

    // Check if the ID matches
    if (isset($parts[0]) && trim($parts[0]) == $id_to_delete) {
        // If ID matches, do not write the line
        continue;
    }

    // Write the line back to the file
    fwrite($file_handle, $line);
}

// Close the file handle
fclose($file_handle);

// Display the alert

echo '<script language="javascript">';
echo 'alert("Role deleted successfully!");';
echo 'window.location = "roleManagement.php";';
echo '</script>';
?>