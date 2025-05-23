<?php
session_start();
require_once 'settings.php'; 
$conn = mysqli_connect($host, $user, $pwd, $sql_db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>
<h2>All Expressions of Interest</h2>

<?php
$sql = "SELECT * FROM eoi";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1' cellpadding='5'>";
    echo "<tr>
        <th>EOInumber</th>
        <th>Job Ref</th>
        <th>Name</th>
        <th>Email</th>
        <th>Status</th>
        <th>Actions</th>
    </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>{$row['EOInumber']}</td>";
        echo "<td>{$row['job_reference_number']}</td>";
        echo "<td>{$row['first_name']} {$row['last_name']}</td>";
        echo "<td>{$row['email_address']}</td>";
        echo "<td>{$row['status']}</td>";
        echo "<td>
            <a href='status.php?id={$row['EOInumber']}&status=Current'>Mark Current</a> |
            <a href='delete.php?id={$row['EOInumber']}'>Delete</a>
        </td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No EOIs found.";
}
?>
