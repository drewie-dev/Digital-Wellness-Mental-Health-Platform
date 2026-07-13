<?php
$pageTitle = "Home";
include "includes/data.php"; // brings in $resources and $tips

// date('N') returns 1 (Monday) through 7 (Sunday).
// Subtract 1 so it lines up with our 0-indexed $tips array.
$dayIndex = date('N') - 1;
$todayTip = $tips[$dayIndex];

include "includes/header.php";
?>

<section class="hero">
    <div class="hero-content">
        <h1>You don't have to have everything figured out today.</h1>

        <p>
            Wellness Hub is a calm space created to help college students
            find trusted mental health resources, take a quick mood
            check-in, and practice simple self-care activities.
        </p>

        <div class="hero-buttons">
            <a class="primary-btn" href="checkin.php">
                Check In
            </a>

            <a class="secondary-btn" href="resources.php">
                Browse Resources
            </a>
        </div>
    </div>
</section>

<section class="daily-tip">
    <h2>Today's Tip</h2>
    <p><?php echo htmlspecialchars($todayTip); ?></p>
</section>

<section class="home-links">
    <div class="link-card">
        <h3>Resources</h3>
        <p>Crisis lines, campus counseling, apps, and articles in one place.</p>
        <a href="resources.php">Browse Resources &rarr;</a>
    </div>
    <div class="link-card">
        <h3>Mood Check-In</h3>
        <p>Take thirty seconds to log how you're feeling today.</p>
        <a href="checkin.php">Check In &rarr;</a>
    </div>
    <div class="link-card">
        <h3>Self-Care</h3>
        <p>A short breathing exercise, an affirmation, and a self-care checklist.</p>
        <a href="selfcare.php">Take a Break &rarr;</a>
    </div>
</section>

<?php include "includes/footer.php"; ?>
