<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include "settings.php"; 

$conn = mysqli_connect("localhost", "root", "", "lvsj_db");
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

// --- Handle Mark Current ---
if (isset($_GET['action']) && $_GET['action'] == 'mark_current' && isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "UPDATE eoi SET status = 1 WHERE EOInumber = $id";
    mysqli_query($conn, $query);
    header("Location: manage.php");
    exit();
}

// --- Handle Delete ---
if (isset($_GET['action']) && $_GET['action'] == 'delete' && isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "DELETE FROM eoi WHERE EOInumber = $id";
    mysqli_query($conn, $query);
    header("Location: manage.php");
    exit();
}

// --- Handle Reset to New ---
if (isset($_GET['action']) && $_GET['action'] == 'reset' && isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "UPDATE eoi SET status = 0 WHERE EOInumber = $id";
    mysqli_query($conn, $query);
    header("Location: manage.php");
    exit();
}


// --- Fetch All EOIs ---
$query = "SELECT EOInumber, job_reference_number, first_name, last_name, email_address, status FROM eoi";
$result = mysqli_query($conn, $query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Manage EOIs</title>
</head>
<body>
    <h1>All Expressions of Interest</h1>
    <table border="1">
        <tr>
            <th>EOInumber</th>
            <th>Job Ref</th>
            <th>Name</th>
            <th>Email</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        <?php
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row['EOInumber'] . "</td>";
                echo "<td>" . $row['job_reference_number'] . "</td>";
                echo "<td>" . $row['first_name'] . " " . $row['last_name'] . "</td>";
                echo "<td>" . $row['email_address'] . "</td>";
                echo "<td>" . ($row['status'] == 1 ? 'Checked' : 'New') . "</td>";
                echo "<td>
                    <a href='manage.php?action=mark_current&id=" . $row['EOInumber'] . "'>Mark Current</a> |
                    <a href='manage.php?action=reset&id=" . $row['EOInumber'] . "'>Reset</a> |
                    <a href='manage.php?action=delete&id=" . $row['EOInumber'] . "'>Delete</a>
                </td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='6'>No EOIs found.</td></tr>";
        }
        ?>
    </table>
</body>
</html>
