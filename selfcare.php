<?php
$pageTitle = "Self-Care";
include "includes/header.php";
?>

<section class="page-intro">
    <h1>Self Care</h1>
    <p>A few small tools to help you reset. No signup, just take a minute.</p>
</section>

<!-- CSS-only affirmation carousel using the :checked radio pattern.
     Each radio button "selects" one affirmation slide. No JavaScript
     is used; CSS sibling selectors in style.css handle the display logic. -->
<section class="carousel-section">
    <h2>Affirmations</h2>
    <div class="carousel">
        <input type="radio" name="slide" id="slide1" class="carousel-radio" checked>
        <input type="radio" name="slide" id="slide2" class="carousel-radio">
        <input type="radio" name="slide" id="slide3" class="carousel-radio">

        <div class="carousel-track">
            <div class="carousel-slide slide1">You are allowed to take up space and rest.</div>
            <div class="carousel-slide slide2">Progress doesn't have to be perfect to count.</div>
            <div class="carousel-slide slide3">This moment is temporary, and so is this stress.</div>
        </div>

        <div class="carousel-dots">
            <label for="slide1" class="dot"></label>
            <label for="slide2" class="dot"></label>
            <label for="slide3" class="dot"></label>
        </div>
    </div>
</section>

<!-- CSS-only checklist. Checking a box visually strikes through
     the item using the :checked selector. No JavaScript involved. -->
<section class="checklist-section">
    <h2>Self Care Checklist</h2>
    <div class="checklist">
        <label class="checklist-item">
            <input type="checkbox" class="checklist-box">
            Drink a glass of water
        </label>
        <label class="checklist-item">
            <input type="checkbox" class="checklist-box">
            Step outside for a few minutes
        </label>
        <label class="checklist-item">
            <input type="checkbox" class="checklist-box">
            Text a friend or family member
        </label>
        <label class="checklist-item">
            <input type="checkbox" class="checklist-box">
            Stretch for two minutes
        </label>
    </div>
</section>

<!-- CSS @keyframes breathing animation. Purely visual, guides
     the user through a slow inhale/exhale cycle. -->
<section class="breathing-section">
    <h2>Breathing Exercise</h2>
    <p>Follow the circle: breathe in as it grows, breathe out as it shrinks.</p>
    <div class="breathing-circle"></div>
</section>

<?php include "includes/footer.php"; ?>
