<?php
$pageTitle = "Self-Care";
include "includes/header.php";
?>

<section class="page-intro">
    <h1>Self-Care</h1>
    <p>
        Use these simple activities to pause, reset, and take care of yourself.
    </p>
</section>

<section class="carousel-section">
    <h2>Daily Affirmations</h2>

    <div class="carousel">
        <input
            type="radio"
            name="slide"
            id="slide1"
            class="carousel-radio"
            checked
        >

        <input
            type="radio"
            name="slide"
            id="slide2"
            class="carousel-radio"
        >

        <input
            type="radio"
            name="slide"
            id="slide3"
            class="carousel-radio"
        >

        <div class="carousel-track">
            <div class="carousel-slide slide1">
                You are allowed to rest without feeling guilty.
            </div>

            <div class="carousel-slide slide2">
                Progress does not have to be perfect to matter.
            </div>

            <div class="carousel-slide slide3">
                One difficult moment does not define your entire day.
            </div>
        </div>

        <div class="carousel-dots">
            <label
                for="slide1"
                class="dot"
                aria-label="Show affirmation one"
            ></label>

            <label
                for="slide2"
                class="dot"
                aria-label="Show affirmation two"
            ></label>

            <label
                for="slide3"
                class="dot"
                aria-label="Show affirmation three"
            ></label>
        </div>
    </div>
</section>

<section class="checklist-section">
    <h2>Self-Care Checklist</h2>

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
            Stretch for two minutes
        </label>

        <label class="checklist-item">
            <input type="checkbox" class="checklist-box">
            Contact someone you trust
        </label>
    </div>
</section>

<section class="breathing-section">
    <h2>Breathing Exercise</h2>

    <p>
        Breathe in while the circle grows and breathe out while it shrinks.
    </p>

    <div
        class="breathing-circle"
        role="img"
        aria-label="Animated breathing guide"
    ></div>
</section>

<?php include "includes/footer.php"; ?>