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
    <link rel=icon href='<?php bloginfo('template_url'); ?>/lander/img/favicon.jpg' />
    <!-- <title><?php bloginfo('title') ?></title> -->
    
    <?php wp_head(); ?>
    
    <!--  CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/lander/css/plugins.css" />
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/lander/css/main.css?v=1.1.8" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">

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
                <video autoplay muted loop class="vid-bg">
                    <source src="<?php bloginfo('template_url'); ?>/lander/video/vid-trailer.mp4" type="video/mp4" autoplay>
                </video>
                <div class="grid-container text-center vid-content">
                    <?php
                        $video_1 = "https://youtu.be/nGxj0gtd6mU";
                        preg_match('#(?<=v=)[a-zA-Z0-9-]+(?=&)|(?<=v\/)[^&\n]+(?=\?)|(?<=v=)[^&\n]+|(?<=youtu.be/)[^&\n]+#', $video_1, $match_1);
                        $video_1 = $match_1[0];      
                    ?>
                    <figure class="movie_title"><img src="<?php bloginfo('template_url'); ?>/lander/img/img-title-hero.png" width="547" height="243" /></figure>
                    <div class="btn-play" data-video="<?php echo $video_1 ?>" ><span>Watch Trailer</span></div>
                </div>    
            </section> 
            <section class="divider text-center">
                <div class="grid-container">
                    <h2 class="type-sidelines custom-2"><span>STREAM NOW OUT NOW</span></h2>
                    <a href="https://amzn.to/31kidl8" target="_blank" class="show-for-medium">
                        <figure><img src="<?php bloginfo('template_url'); ?>/lander/img/img-prime-video.png" width="160" height="72"  /></figure>
                    </a>
                    <a href="https://amzn.to/31kidl8" target="_blank" class="hide-for-medium">
                        <figure><img src="<?php bloginfo('template_url'); ?>/lander/img/img-prime-video-mob.png" width="331" height="72"  /></figure>
                    </a>
                </div>
            </section>
            <section class="section-2">
                <div class="grid-container">
                    <figure class="text-center"><img src="<?php bloginfo('template_url'); ?>/lander/img/img-story.jpg" width="690" height="290"  /></figure>
                    <div class="story_section">
                        <div class="text-wrap">
                            <h3>Story</h3>
                            <p>Writer Blake Sinclair needs a break to cure her writer's block.</p>
                            <p>When her boyfriend offers his family cabin, it sounds like an idyllic weekend getaway. However, alone and deep in the woods, she soon finds herself in a desperate fight for her life to escape a bloodthirsty maniac who has been leaving multiple victims in his wake as he returns to the quaint mountain town of Northdale.</p>
                            <p>Can she survive?</p>
                        </div>
                        <hr/>
                        <div class="text-wrap">
                            <h3>About</h3>
                            <div class="info">
                                <div class="info_inner directed_by">
                                    <p>Directed By:</p><p class="name">Corbin Timbrook</p>    
                                </div>
                                <div class="info_inner starring">
                                    <p>Starring:</p>
                                    <p class="name">
                                     Lance Henriksen (<em>Aliens</em>), 
                                     Natasha Henstridge (<em>Species</em>), 
                                     Emma Bell (<em>The Walking Dead</em>), 
                                     Chris Browning (<em>Terminator Salvation</em>)
                                     </p>    
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="gallery">
                        <div class="gallery_slick">
                            <?php for( $i=1; $i <= 35; $i++ ) :
                                $img_url = get_template_directory_uri() .'/lander/img/gallery/'. $i .'.jpg';
                                ?>
                                <a href="<?php echo $img_url; ?>" class="gallery_item" rel="gallery1" data-bg="<?php echo $img_url; ?>" ><?php echo $i ?>
                                </a>
                            <?php endfor; ?>
                        </div>
                    </div>
                    <div class="logo_bottom text-center">
                        <figure><img src="<?php bloginfo('template_url'); ?>/lander/img/img-title-hero.png" width="318" height="141" /></figure>
                    </div>
                </div>
            </section>
        </main>

        <footer id="footer">            
            <div class="grid-container">
                <div class="footbot">
                    <div class="col-1">
                        <a href="<?php echo home_url() ?>"><img src="<?php bloginfo('template_url'); ?>/lander/img/logo.png" alt="" width="134" height="33"></figure></a>
                    </div>
                    <div class="col-2">
                        <div class="copyright"><a href="https://www.mybizniche.com/phoenix-web-design/" target="_blank">Website</a> created by: <strong>hawt agency</strong></span></div>                        
                        <!-- 
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
                        -->
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="reveal large" style="top: 20%;" id="popup-video" data-reveal data-v-offset="40">
        <div class="responsive-embed">
            <iframe id="ytplayer" width="560" height="315" src="" frameborder="0" allowfullscreen allow=" autoplay;"></iframe>
        </div>
        <button class="close-button" data-close aria-label="Close modal" type="button">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    <script>$(document).foundation();</script>

    <?php wp_footer(); ?>
    <script src="<?php bloginfo('template_url'); ?>/lander/js/custom.js?v=1.0.1"></script>
</body>

</html>
