<?php
require_once 'settings.php';
$conn = mysqli_connect($host, $user, $pwd, $sql_db);

$id = $_GET['id'];
$sql = "DELETE FROM eoi WHERE EOInumber=$id";
mysqli_query($conn, $sql);

header("Location: manage.php");
exit();
?>
