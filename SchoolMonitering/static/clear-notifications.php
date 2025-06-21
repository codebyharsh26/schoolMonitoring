<?php
$file = '../BMC_announce/documents.json';  // JSON file path

// JSON file read 
$jsonData = file_get_contents($file);
$data = json_decode($jsonData, true);

// Add a flag to mark notifications as read instead of clearing them
$data['notifications_viewed'] = true;  

// Updated JSON file for write
file_put_contents($file, json_encode($data, JSON_PRETTY_PRINT));

echo json_encode(["success" => true]);  // send response
?>