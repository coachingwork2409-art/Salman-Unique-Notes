<?php
require "config.php";
$token = isset($_GET['token']) ? $_GET['token'] : '';
if ($token === "success123") {
    // Payment OK — redirect to download paid file
    header("Location: download.php?file=paid");
    exit;
} else {
    http_response_code(400);
    echo "Payment verification failed.";
    exit;
}
?>
