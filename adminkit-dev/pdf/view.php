<?php
// This script handles the PDF viewing

// Check if filename is provided
if (isset($_GET['file'])) {
    $filename = $_GET['file'];
    $uploadDir = "uploads/";
    $filepath = $uploadDir . $filename;
    
    // Check if file exists and is readable
    if (file_exists($filepath) && is_readable($filepath)) {
        // Check if file is a PDF
        $fileInfo = pathinfo($filepath);
        if (strtolower($fileInfo['extension']) === 'pdf') {
            // Set headers for displaying PDF
            header('Content-Type: application/pdf');
            header('Content-Disposition: inline; filename="' . basename($filepath) . '"');
            header('Content-Transfer-Encoding: binary');
            header('Accept-Ranges: bytes');
            
            // Output the file
            @readfile($filepath);
            exit;
        } else {
            echo "This file is not a PDF.";
        }
    } else {
        echo "File not found or not readable.";
    }
} else {
    echo "No file specified.";
}
?>