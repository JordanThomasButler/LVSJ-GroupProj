<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $pageTitle ?? 'LVSJ - Web Systems' ?></title>
    <link rel="stylesheet" href="../styles/styles.css">
</head>
<body class="<?= $bodyClass ?? 'incl' ?>">
    
<header class="incl">
    <h1><?= $headerTitle ?? 'Template Header' ?></h1>
</header>

<aside class="job-links">
    <ul>
        <div class="application-page-logo">
            <img src="images/logo.png" class="logo-image" alt="Company Logo">
        </div>
        <li><a href="index.html">Home</a></li>
        <li><a href="jobs.html">Jobs</a></li>
        <li><a href="apply.html">Apply</a></li>
        <li><a href="about.html">About Us</a></li>
    </ul>
</aside>
