<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Wellness Hub provides mental health resources and simple self-care tools for college students.">
    <title><?php echo isset($pageTitle) ? htmlspecialchars($pageTitle) . " - Wellness Hub" : "Wellness Hub"; ?></title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header class="site-header">
    <div class="header-inner">
        <a href="index.php" class="logo" aria-label="Wellness Hub home">
            <span class="logo-mark" aria-hidden="true">🌿</span>
            <span>Wellness Hub</span>
        </a>

        <nav class="main-nav" aria-label="Main navigation">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="resources.php">Resources</a></li>
                <li><a href="checkin.php">Mood Check In</a></li>
                <li><a href="selfcare.php">Self Care</a></li>
            </ul>
        </nav>
    </div>
</header>

<main class="site-main">
