<?php
require_once 'settings.php';
$conn = mysqli_connect($host, $user, $pwd, $sql_db);

$id = $_GET['id'];
$status = $_GET['status'];

$sql = "UPDATE eoi SET status='$status' WHERE EOInumber=$id";
mysqli_query($conn, $sql);

header("Location: manage.php");
exit();
?>
