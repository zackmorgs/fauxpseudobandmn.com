<!doctype html>
<html class="no-js" lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <meta name="description" content="">

    <meta property="og:title" content="">
    <meta property="og:type" content="">
    <meta property="og:url" content="">
    <meta property="og:image" content="">
    <meta property="og:image:alt" content="">

    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" sizes="any">
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/icon.svg" type="image/svg+xml">
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/icon.png">

    <link rel="manifest" href="<?php echo get_template_directory_uri(); ?>/site.webmanifest.json">
    <meta name="theme-color" content="#f3f3f3">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Special+Elite&display=swap" rel="stylesheet">
</head>

<body>
    <nav id="nav_main">
        <div class="nav-bar">
            <div class="nav-logo">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/faux_pseudo-logo-crop.png"
                        alt="Faux Pseudo Logo">
                </a>
            </div>
            <button id="nav_toggle" onclick="handleNavClick(event)">
                Menu
            </button>

        </div>
        <ul class="nav-list">
            <li><a class="nav-link" href="/about/">About</a></li>
            <li><a class="nav-link" href="/listen/">Listen</a></li>
            <li><a class="nav-link" href="/blog/">Blog</a></li>
            <li><a class="nav-link" href="/contact/">Contact</a></li>
            <li><a class="nav-link" href="/shows/">Shows</a></li>
            <li><a class="nav-link" href="/gallery/">Gallery</a></li>
        </ul>
    </nav>