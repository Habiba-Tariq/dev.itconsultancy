<?php
// Simple PHP index file

// Set the page title
$title = "Welcome to My Website of IT Concultancy";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 50px;
        }
        h1 {
            color: #333;
        }
    </style>
</head>
<body>
    <h1><?php echo $title; ?></h1>
    <p>This is a simple PHP-powered index page.</p>
    <p>The current date and time is: <strong><?php echo date("Y-m-d H:i:s"); ?></strong></p>
</body>
</html>
