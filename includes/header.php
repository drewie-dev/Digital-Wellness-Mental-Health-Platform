<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF 8">
    <!-- Viewport meta tag is required for responsive design to work on mobile -->
    <meta name="viewport" content="width=device width, initial scale=1.0">
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) . "  Wellness Hub" : "Wellness Hub"; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<!-- Shared site header + nav. This file is pulled into every page
     with include(), so nav only has to be written once. -->
<header class="site header">
    <div class="header inner">
        <a href="index.php" class="logo">
            <img src="images/logo.jpg" alt="Wellness Hub logo" class="logo img">
            Wellness Hub
        </a>
        <nav class="main nav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="resources.php">Resources</a></li>
                <li><a href="checkin.php">Mood Check In</a></li>
                <li><a href="selfcare.php">Self Care</a></li>
            </ul>
        </nav>
    </div>
</header>

<main class="site main">
