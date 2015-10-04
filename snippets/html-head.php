<?php include_once('includes/functions.php'); ?>

<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="nl-NL"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="nl-NL"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="nl-NL"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>

    <!--
    Copyright 2015 (C) Rokit
    Made by Rodesk BV
    Jasper Rooduijn, Bart van der Waerden, Miljan Janjetovic
    E-mail  : interactie@rodesk.nl
    Website : http://www.rodesk.nl
    -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Rodesk BV">
    <meta name="description" content="Rokit. The one and only frontend toolkit to take over the world">
    <meta name="robots" content="index, follow">
    <meta name="apple-mobile-web-app-title" content="Rokit">
    <title>Rokit</title>

    <?php include_once('favicons.php'); ?>

    <link rel="dns-prefetch" href="//ajax.googleapis.com">
    <link rel="dns-prefetch" href="//www.google-analytics.com">

    <?php if( rodesk_is_mobile() ): ?>
        <link rel="stylesheet" href=" <?php echo rodesk_asset_path('styles/style-mobile.css' ); ?>">
    <?php else: ?>
        <!--[if (gt IE 8)]><!-->
        <link rel="stylesheet" href="<?php echo rodesk_asset_path('styles/style.css' ); ?>">
        <!---<![endif]-->

        <!--[if (lt IE 9)]>
        <link rel="stylesheet" href="<?php echo rodesk_asset_path('styles/style-ie.css' ); ?>">
        <![endif]-->

        <link rel="stylesheet" href=" <?php echo rodesk_asset_path('styles/print.css' ); ?>" media="print">

        <link rel="stylesheet" href=" <?php echo rodesk_asset_path('styles/debug.css' ); ?>">
    <?php endif; ?>

    <script src="<?php echo rodesk_load_modernizr(); ?>"></script>

    <?php //include('snippets/webfont.php'); ?>

</head>
<body>