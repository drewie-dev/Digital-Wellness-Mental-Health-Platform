<?php
$pageTitle = "Resources";
include "includes/data.php";

// Group resources by type so they appear in categories.
$grouped = [];

foreach ($resources as $resource) {
    $grouped[$resource["type"]][] = $resource;
}

include "includes/header.php";
?>

<section class="page intro">
    <h1>Resources</h1>
    <p>
        A curated collection of mental health resources organized by category,
        making it easier to find the support you need.
    </p>
</section>

<?php foreach ($grouped as $category => $items): ?>

<section class="resource category">

    <h2><?php echo htmlspecialchars($category); ?></h2>

    <div class="resource grid">

        <?php foreach ($items as $item): ?>

        <article class="resource card">

            <div class="resource icon">🌿</div>

            <h3>
                <?php echo htmlspecialchars($item["title"]); ?>
            </h3>

            <p>
                <?php echo htmlspecialchars($item["description"]); ?>
            </p>

            <a
                href="<?php echo htmlspecialchars($item["link"]); ?>"
                target="_blank"
                rel="noopener noreferrer"
            >
                Learn More →
            </a>

        </article>

        <?php endforeach; ?>

    </div>

</section>

<?php endforeach; ?>

<?php include "includes/footer.php"; ?>