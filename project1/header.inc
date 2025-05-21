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

<?php
include 'aside.inc';
?>