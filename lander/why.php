<?php
/**
 * Template Name: LP HAWT - Why  
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title><?php wp_title();?></title>
    <link rel=icon href='<?php echo MBN_ASSETS_URI ?>/img/icon/favicon.jpg' />
    
    <?php wp_head(); ?>
    
    <!--  CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/lander/css/plugins.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/lander/css/main.css" />

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

        <section id="hero" class="hero hero-s5">            
            <!-- <figure class="bg">
                <img src="<?php bloginfo('template_url'); ?>/lander/img/hero-banner.gif" alt="" width="1920" height="829">
            </figure> -->
            <div class="grid-container">
                <div class="grid-x grid-padding-x">
                    <div class="cell large-12 align-self-middle large-order-1">   
                        
                    </div>  
                </div> 
            </div>    
        </section> 
        <main id="content">
            <section class="section-1">
                <div class="grid-container">
                    <div class="grid-x grid-padding-x">
                        <div class="cell large-6 col-image">
                        </div>
                        <div class="cell large-6 col-copy">
                            
                        </div>
                    </div>
                </div>
            </section>
            <section class="section-2">
                <div class="grid-container">
                    <div class="grid-x grid-padding-x">
                        <div class="cell large-6 large-order-2 col-image">
                        </div>
                        <div class="cell large-6 col-copy">
                            
                        </div>
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
    <div class="reveal large" id="popup-video" data-reveal>
        <div class="responsive-embed">
            <iframe id="ytplayer" width="560" height="315" src="" frameborder="0" allowfullscreen allow=" autoplay;"></iframe>
        </div>
        <button class="close-button" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <script>$(document).foundation();</script>

    <?php wp_footer(); ?>
    <script src="<?php bloginfo('template_url'); ?>/lander/js/custom.js"></script>
</body>

</html>
