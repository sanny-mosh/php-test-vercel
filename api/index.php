<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>PHP Test Page</title>
</head>

<body>
    <h1>PHP Test Page</h1>
    <p><strong>Message:</strong> Hello, World!</p>
    <p><strong>Server time:</strong> <?php echo date('Y-m-d H:i:s'); ?></p>
    <p><strong>PHP version:</strong> <?php echo PHP_VERSION; ?></p>
    <p><strong>Request URI:</strong> <?php echo htmlspecialchars($_SERVER['REQUEST_URI']); ?></p>
</body>

</html>