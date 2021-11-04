<?php

/**
 * Template Name: LP Thank You Page template
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title();?></title>
    <link rel=icon href='<?php bloginfo('template_url'); ?>/lander/img/favicon.jpg' />
    <!-- <title><?php bloginfo('title') ?></title> -->
    
    <?php wp_head(); ?>
    
    <!--  CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/lander/css/plugins.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/lander/css/main.css?v=1.0.1" />

    <!-- jQuery, plugins JS -->
    <script src="<?php bloginfo('template_url'); ?>/lander/js/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/lander/js/plugins.js"></script>

</head>

<body <?php body_class() ?>> 
    <div id="wrapper"> 
        <header id="header">
            <div class="grid-container text-center">
                <a href="<?php echo get_home_url(); ?>"> 
                    <figure id="logo"><img src="<?php bloginfo('template_url'); ?>/lander/img/logo.png" alt="" width="194" height="48"></figure>        
                </a>
            </div>     
        </header>

        <main id="content">
            <section id="hero" class="hero hero-s5">            
                <!-- <figure class="bg">
                    <img src="<?php bloginfo('template_url'); ?>/lander/img/hero-banner.gif" alt="" width="1920" height="829">
                </figure> -->
                <div class="grid-container text-center">
                    <div class="sec-ty text-block">
                        <h1>Thank You!</h1>
                        <p>Thank you for contacting us, we will get back to you as soon as we can.</p>

                        <p><a class="button primary" href="<?php echo home_url() ?>">Go back to Homepage</a></p>
                    </div>
                </div>    
            </section>
        </main>
        <footer id="footer">            
            <div class="grid-container">
                <div class="footbot">
                    <div class="col-1">
                        <figure id="logo"><img src="<?php bloginfo('template_url'); ?>/lander/img/logo.png" alt="" width="134" height="33"></figure>
                    </div>
                    <div class="col-2">
                        <div class="copyright"><a href="https://www.mybizniche.com/phoenix-web-design/" target="_blank">Website</a> created by: <strong>hawt agency</strong></span></div>                        
                        <div class="bar">|</div>
                        <div class="follow_us">
                            <span class="social_icon fb_icon">
                                <a href="#" target="_blank">
                                    <figure>
                                        <img src="<?php bloginfo('template_url'); ?>/lander/img/icn-fb.svg" alt="" width="9" height="18" />
                                    </figure>
                                </a>
                            </span>
                            <span class="social_icon ig_icon">
                                <a href="#" target="_blank">
                                    <figure>
                                        <img src="<?php bloginfo('template_url'); ?>/lander/img/icn-ig.svg" alt="" width="14" height="18" />
                                    </figure>
                                </a>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <script>$(document).foundation();</script>

    <?php wp_footer(); ?>
    <script src="<?php bloginfo('template_url'); ?>/lander/js/custom.js"></script>
</body>

</html>