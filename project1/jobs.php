<!DOCTYPE html>
<?php 
$pageTitle = "Job Descriptions";
$headerTitle = "Job Descriptions";
$bodyClass = "job-page";
include 'header.inc'; 
require_once("settings.php");

$conn = mysqli_connect($host, $user, $pwd, $sql_db);
$query = "SELECT * FROM `jobs`";
$result = mysqli_query($conn, $query);
?>

<main class="job-main-content">
    <section class="job-section-container">
        <section class="job-row">
<?php
if (mysqli_num_rows($result) > 0) {
    $count = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        if ($count > 0 && $count % 2 == 0) {
            echo '</section><section class="job-row">';
        }

        $id = strtolower(str_replace(' ', '-', $row['position_title']));
        //Used chatGPT to help make use of HEREDOC, the original one that was just PHP looked terrible and was hard to read
        echo <<<HTML
            <section class="job-section">
                <input type="checkbox" id="toggle-$id" class="toggle-box">
                <label for="toggle-$id" class="job-header">
                    <img src="{$row['image_path']}" alt="{$row['position_title']}" class="job-image">
                    <h2>{$row['position_title']}</h2>
                </label>
                <div class="job-description">
                    <p><strong>Position Reference:</strong> {$row['position_reference']}</p>
                    <p><strong>Position Title:</strong> {$row['position_title']}</p>
                    <h3>Position Overview</h3>
                    <p>{$row['position_overview']}</p>
                    <h3>Salary Range</h3>
                    <p>{$row['salary_range']}</p>
                    <h3>Reports To</h3>
                    <p>{$row['reports_to']}</p>
                    <h3>Key Responsibilities</h3>
                    {$row['key_responsibilities']}
                    <h3>Required Qualifications</h3>
                    <h4>Essential:</h4>
                    {$row['essential_qualifications']}
                    <h4>Preferable:</h4>
                    {$row['preferable_qualifications']}
                </div>
            </section>
HTML;
        $count++;
    }
} else {
    echo "<p>No job listings found.</p>";
}
?>
        </section>
    </section>
</main>

<?php include 'footer.inc'; ?>
</body>
</html>
