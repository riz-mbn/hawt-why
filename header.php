<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php echo bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="icon" type="image/png" href="<?php echo MBN_ASSETS_URI ?>/img/favicon.png"> -->
    <!-- <title><?php bloginfo('title') ?></title> -->

    <?php wp_head() ?>

</head>
<body <?php body_class() ?>>

<div id="wrapper"> 
    
    <header id="header">
        <div class="grid-container text-center">
            <a href="<?php echo get_home_url(); ?>"> 
                <figure id="logo"><img src="<?php echo MBN_ASSETS_URI ?>/img/logo.png" alt="" width="194" height="48"></figure>        
            </a>
        </div>     
    </header>
    <main id="content" class="content">