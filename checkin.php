<?php
// session_start() must run before any HTML output, so this stays at the very top of the file, above the header
session_start();

$pageTitle = "Mood Check-In";
$error = "";

// Handle the form submission
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Required field check on the server side
    if (empty($_POST["mood"])) {
        $error = "Please select a mood before submitting.";
    } else {
        // Sanitize input before storing or echoing it anywhere
        $mood = htmlspecialchars(trim($_POST["mood"]));
        $note = htmlspecialchars(trim($_POST["note"] ?? ""));

        // Store in the session so it persists across the reload
        $_SESSION["mood"] = $mood;
        $_SESSION["note"] = $note;
        $_SESSION["checkin_time"] = date("g:i A");
    }
}

include "includes/header.php";
?>

<section class="page-intro">
    <h1>Mood Check-In</h1>
    <p>Take a moment to notice how you're feeling.</p>
</section>

<?php if ($error): ?>
    <p class="form-error"><?php echo htmlspecialchars($error); ?></p>
<?php endif; ?>

<?php if (isset($_SESSION["mood"]) && $_SERVER["REQUEST_METHOD"] === "POST" && !$error): ?>
    <section class="checkin-confirmation">
        <h2>Thanks for checking in.</h2>
        <p>You logged your mood as <strong><?php echo $_SESSION["mood"]; ?></strong> at <?php echo $_SESSION["checkin_time"]; ?>.</p>
        <?php if (!empty($_SESSION["note"])): ?>
            <p>Note: <?php echo $_SESSION["note"]; ?></p>
        <?php endif; ?>
    </section>
<?php endif; ?>

<form class="checkin-form" method="POST" action="checkin.php">
    <fieldset>
        <legend>How are you feeling right now?</legend>

        <label class="radio-option">
            <input type="radio" name="mood" value="Great" required>
            Great
        </label>
        <label class="radio-option">
            <input type="radio" name="mood" value="Okay">
            Okay
        </label>
        <label class="radio-option">
            <input type="radio" name="mood" value="Stressed">
            Stressed
        </label>
        <label class="radio-option">
            <input type="radio" name="mood" value="Struggling">
            Struggling
        </label>
    </fieldset>

    <label for="note">Want to add a quick note? (optional)</label>
    <textarea id="note" name="note" rows="3"></textarea>

    <button type="submit">Check In</button>
</form>

<?php include "includes/footer.php"; ?>
