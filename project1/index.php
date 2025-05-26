<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tech Careers Inc.</title>
    <link rel="stylesheet" href="../styles/styles.css"> <!-- Adjust if needed -->
</head>

<?php
$pageTitle = "LVSJ | Home Page";
$headerTitle = "Home Page";
$bodyClass = "home-page";
include "header.inc";
?>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <h1>Join Our Team & Build the Future of Tech</h1>
            <p>Explore exciting IT career opportunities with Tech Careers Inc.</p>
            <a href="apply.php" class="button">Apply Now</a>
        </div>
    </section>

    <!-- About Section -->
    <section class="about">
    <h2>Who We Are</h2>
    <div class="about-box">
        <p>
            Tech Careers Inc. is an Australian based recruitment platform focused on empowering talent in software, data, and cybersecurity. 
            We connect skilled individuals to forward thinking tech companies seeking innovation and growth. 
            Our mission is to simplify the job search process by bridging the gap between passionate professionals and industry-leading employers. 
            With a strong focus on career development and long term success, we are committed to helping people thrive in the fast-paced world of technology.
        </p>
    </div>
</section>

    <!-- Featured Jobs -->
    <section class="jobs-preview">
    <h2>Featured Roles</h2>
    <div class="jobs-box">
        <ul>
            <li>Software Developer</li>
            <li>Network Administrator</li>
            <li>Data Analyst</li>
            <li>Cybersecurity Specialist</li>
        </ul>
    </div>
    <a href="jobs.php" class="button">View All Jobs</a>
</section>

<?php include "footer.inc"; ?>
