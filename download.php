<?php
// Path to the image file
$imagePath = $_GET["image"];

// Check if the file exists
if (file_exists($imagePath)) {
    // Set the appropriate headers
    header('Content-Description: File Transfer');
    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($imagePath).'"');
    header('Expires: 0');
    header('Cache-Control: must-revalidate');
    header('Pragma: public');
    header('Content-Length: ' . filesize($imagePath));

    // Read the file and output it to the browser
    readfile($imagePath);
    exit;
} else {
    // If the file does not exist, redirect or display an error message
    echo 'File not found.';
}
?>
