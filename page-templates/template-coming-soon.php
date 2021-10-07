<?php
/*
 * Template Name: Coming Soon
 * 
*/
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
    <meta name="title" content="Coming November 12th — Caned by Nod / Cody Jinks">
</head>
<body class="coming-soon">
	<div class="container-fluid">
        <div class="row">
            <div class="col-md-12 page_title_box">
                <h1 class="page-title">COMING NOVEMBER 12TH</h1>
            </div>
            <div class="col-md-6 left-side" style="background: url(<?php echo get_stylesheet_directory_uri(); ?>/images/jinks_coming_bg.png); background-size: cover;">
            <div class="content">
                <div class="logo-container">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/jinks-cbn-logo-white.png" alt="jinks-cbn">
                </div>
                <div class="content-box">
                        <div class="image-container">
                            <a href="/mercy"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cody_jinks_comming.jpg" alt=""></a>
                        </div>
                        <a href="/mercy"><h2 class="title">MERCY — CODY JINKS</h2> </a>                   
                        <div class="bottom-cta">
                            <a href="/mercy" class="cta-link">PREVIEW THE ALBUM & LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 right-side" style="background: linear-gradient(rgba(0, 0, 0, 0.8),rgba(0, 0, 0, 0.8) ), url('<?php echo get_stylesheet_directory_uri(); ?>/images/cbn_coming_bg.png'); background-size: cover;">
                <div class="logo-container">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cbn_logo.png" alt="cbn_logo">
                </div>
                <div class="content-box">
                        <div class="image-container">
                        <a href="/cbn" ><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cbn_comming.jpg" alt="cbn_comming.jpg"></a>
                        </div>
                        <a href="/cbn"><h2 class="title">None the Wiser — Caned by Nod</h2></a>                    
                        <div class="bottom-cta">
                            <a href="/cbn" class="cta-link">PREVIEW THE ALBUM & LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
