<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Adding all things in head np. CSS.main declarete in functioncs.php -->
    <?php wp_head(); ?>
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="<?php echo get_stylesheet_directory_uri(); ?>/img/favicon.ico">
    
</head>

<!-- Add current site as class np. "home" -->
<body <?php body_class(); ?> >
    <header>
        <h2>Header section</h2>
    </header>