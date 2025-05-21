<?php
session_start();
$pageTitle = "Application Page";
$headerTitle = "Application Successful!";
$bodyClass = "application-page";
include("header.inc");
?>
<main class="successful-application" style="flex: 1; padding: 2rem; text-align: center;">
    <?php if (isset($_SESSION['last_eoi_number'])): ?>
        <div class="application-number">
            <h1>Congratulations! Your application was successful. Expect an email from us soon.</h1>
            <h2>Your application number is: <?php echo htmlspecialchars($_SESSION['last_eoi_number']); ?></h2>
        </div>
        <?php
        session_unset();
        session_destroy();
        ?>
    <?php else: ?>
        <p class="error-message-eoi">Error. Please go back to the homepage!</p>
    <?php endif; ?>

    <a href="jobs.php" class="other-positions button">View Other Positions</a>
</main>

<?php
include("footer.inc");
?>
