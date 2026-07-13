<?php
$pageTitle = "Resources";
include "includes/data.php"; // brings in $resources

// Group resources by "type" so the page can show category
// headings instead of one long unsorted list. This grouping
// is what makes this page count as the Information Design
// secondary feature (Requirement 2).
$grouped = [];
foreach ($resources as $resource) {
    $grouped[$resource["type"]][] = $resource;
}

include "includes/header.php";
?>

<section class="page-intro">
    <h1>Resources</h1>
    <p>A curated list of support options, organized so you can find what you need quickly.</p>
</section>

<?php foreach ($grouped as $category => $items): ?>
    <section class="resource-category">
        <h2><?php echo htmlspecialchars($category); ?></h2>
        <div class="resource-grid">
            <?php foreach ($items as $item): ?>
                <div class="resource-card">
                    <h3><?php echo htmlspecialchars($item["title"]); ?></h3>
                    <p><?php echo htmlspecialchars($item["description"]); ?></p>
                    <a href="<?php echo htmlspecialchars($item["link"]); ?>">Learn more &rarr;</a>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
<?php endforeach; ?>

<?php include "includes/footer.php"; ?>
