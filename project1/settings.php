<?php
$host = "localhost";
$user = "root";
$pwd  = "";

if (!isset($skip_main_db)) {
    $main_db = "lsvj_db";
    $conn_main = mysqli_connect($host, $user, $pwd, $main_db);
    if (!$conn_main) {
        die("Connection to lsvj_db failed: " . mysqli_connect_error());
    }
}

if (!isset($skip_jobs_db)) {
    $jobs_db = "jobs_db";
    $conn_jobs = mysqli_connect($host, $user, $pwd, $jobs_db);
    if (!$conn_jobs) {
        die("Connection to jobs_db failed: " . mysqli_connect_error());
    }

    //do (In your code right before require):
    //$skip_jobs_db = true; 
}
