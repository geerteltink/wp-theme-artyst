<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title><?php echo get_bloginfo('name'); ?></title>
    <meta name="description" content="<?php echo get_bloginfo('description'); ?>" />
    <meta name="developer" content="@XtreamWayz" />
    <link rel="developer" href="https://xtreamwayz.github.io/" />

    <?php wp_head(); ?>

    <link rel="apple-touch-icon" href="apple-touch-icon.png" />
</head>
<body>
    <a class="skip-link sr-only" href="#content">Skip to content</a>

    <header class="container">
        <h1 class="blog-title">
            <a href="<?php bloginfo('wpurl'); ?>">
                <?php echo get_bloginfo('name'); ?>
            </a>
        </h1>
        <p class="lead blog-description">
            <?php echo get_bloginfo('description'); ?>
        </p>

        <nav class="blog-nav">
            <a class="blog-nav-item active" href="<?php bloginfo('wpurl'); ?>">Home</a>
            <?php wp_list_pages('&title_li='); ?>
        </nav>
    </header>

    <div id ="content" class="content">
