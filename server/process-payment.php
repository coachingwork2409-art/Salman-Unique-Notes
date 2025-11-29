<?php
require "config.php";
// Demo: simulate payment and redirect to verify
$token = "success123";
header("Location: verify-payment.php?token=" . urlencode($token));
exit;
?>
