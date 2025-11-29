<?php
require "config.php";
$fileKey = isset($_GET['file']) ? $_GET['file'] : 'free';
if ($fileKey === 'free') {
    $path = $pdf_path_free;
} else if ($fileKey === 'paid') {
    $path = $pdf_path_paid;
} else {
    http_response_code(400);
    die("Invalid file parameter.");
}
if (!file_exists($path)) {
    http_response_code(404);
    die("File not found.");
}
header('Content-Type: application/pdf');
header('Content-Disposition: attachment; filename="' . basename($path) . '"');
header('Content-Length: ' . filesize($path));
readfile($path);
exit;
?>
