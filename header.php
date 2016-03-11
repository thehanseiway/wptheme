<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php wp_title(); ?></title>

    <?php wp_head(); ?>

</head>
<body>
    <header>
        <div class="container">
            <h1>
                <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>
            </h1>
        </div>
    </header>
