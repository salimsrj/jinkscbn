<?php
/*
 * Template Name: Mercy
 * 
*/
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header('mercy');
?>
<section class="page_header"  style="background: linear-gradient(rgba(0, 0, 0, 0.8),rgba(0, 0, 0, 0.8) ), url('<?php echo get_stylesheet_directory_uri(); ?>/images/mercy_banner.png'); background-size: cover; ">
    <div class="container">
        <div class="row">
            <div class="col-12 banner-content">
                <div>
                    <span class="pre-title">COMING NOVEMBER 12TH</span>
                    <h1 class="title">MERCY</h1>
                    <div class="social-share-icons">
                        <span>Share</span><?php echo sharethis_inline_buttons(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="preview-stream">
    <div class="container">
        <div class="row">
            <div class="col-md-5 preview">
                <article>
                    <div class="image-container">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cody_jinks.jpg" alt="cody jinks">
                    </div>
                    <div class="pre-order">
                        <ul>
                            <li>
                                <a target="_blank" href="https://codyjinks.ffm.to/mercy">
                                    <span>PRE-ADD:</span>
                                    <div class="image-container">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/apple_music_white.png" alt="apple_music">                                       
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://codyjinks.ffm.to/mercy">
                                    <span>PRE-SAVE:</span>
                                    <div class="image-container">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sportify-add.png" alt="sportify">
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a target="_blank" href="https://codyjinks.ffm.to/mercy">
                                    <span>PRE-ORDER:</span>
                                    <div class="image-container">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/amazon-order.png" alt="sportify">
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </article>
            </div>
            <div class="col-md-7 stream">
                <h2 class="title">PREVIEW & STREAM THE SINGLES TODAY</h2>
                <div class="steream-list">
                    <div class="item">
                        <article>
                            <div class="image-container">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stream_1.jpg" alt="stream_1">
                                <audio id="track">
                                    <source src="https://p.scdn.co/mp3-preview/2346c53d14deebf5f936758705f5a967ce7397d9?cid=774b29d4f13844c495f206cafdad9c86" type="audio/mpeg" />
                                </audio>

                                <div id="player-container" class="play_btn">
                                    <div id="play-pause" class="play">Play</div>
                                </div>
                                <!-- <a href="https://p.scdn.co/mp3-preview/2346c53d14deebf5f936758705f5a967ce7397d9?cid=774b29d4f13844c495f206cafdad9c86" target="_blank" class="play_btn"><span><i class="fa fa-play" aria-hidden="true"></i></span></a> -->
                            </div>
                            <h3 class="title">ALL IT COST ME WAS EVERYTHING</h3>
                            <div class="listen-on">
                                <ul>
                                    <li>
                                        <a target="_blank" href="https://music.apple.com/us/album/all-it-cost-me-was-everything/1578725571?i=1578725585">
                                            <div class="image-container">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/apple_music.png" alt="apple_music">
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://open.spotify.com/track/1DUaW1loQrhR7WIIRtxehF?si=0ea242d0f9ec4b74">
                                            <div class="image-container">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sportify.png" alt="sportify">
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>

                    <div class="item">
                        <article>
                            <div class="image-container">
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/stream_1.jpg" alt="stream_1">
                                <a href="https://p.scdn.co/mp3-preview/62ba615c60f8bf2e84a459ec0d035a40d65aa57e?cid=774b29d4f13844c495f206cafdad9c86" target="_blank" class="play_btn"><span><i class="fa fa-play" aria-hidden="true"></i></span></a>
                            </div>
                            <h3 class="title">I Don't Trust My Memories Anymore</h3>
                            <div class="listen-on">
                                <ul>
                                    <li>
                                        <a target="_blank" href="https://music.apple.com/us/album/i-dont-trust-my-memories-anymore/1578725571?i=1578726106">
                                            <div class="image-container">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/apple_music.png" alt="apple_music">
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://open.spotify.com/track/415m60kJ5pIMZRWljhLvwk?si=43e0e07866cd47ff">
                                            <div class="image-container">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sportify.png" alt="sportify">
                                            </div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="explore">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2 class="title">EXPLORE THE MERCH</h2>
            </div>
            <div class="col-md-6 text-right mobile-hide">
                <a class="view_all_merch" href="https://cody-jinks.myshopify.com/collections/mercy" target="_blank">VIEW ALL MERCH</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="product-list">
                    <ul>
                        <li>
                            <div class="item">
                                <article>
                                    <a target="_blank" href="https://cody-jinks.myshopify.com/products/mercy-cd-1">
                                        <div class="image-container">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/product_1.png" alt="product_1">
                                        </div>
                                        <h3 class="title">MERCY CD</h3>
                                        <span class="price">$10</span>
                                    </a>
                                </article>
                            </div>
                        </li>

                        <li>
                            <div class="item">
                                <article>
                                    <a target="_blank" href="https://cody-jinks.myshopify.com/products/mercy-vinyl-black">
                                        <div class="image-container">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/product_2.png" alt="product_1">
                                        </div>
                                        <h3 class="title">MERCY BLACK VINYL - BLACK 180G</h3>
                                        <span class="price">$25</span>
                                    </a>
                                </article>
                            </div>
                        </li>

                        <li>
                            <div class="item">
                                <article>
                                    <a target="_blank" href="https://cody-jinks.myshopify.com/products/mercy-vinyl-translucent-blue-with-black-swirls-180g">
                                        <div class="image-container">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/product_3.png" alt="product_1">
                                        </div>
                                        <h3 class="title">MERCY TRANSLUCENT BLUE VINYL W/ BLACK SWIRLS 180G</h3>
                                        <span class="price">$25</span>
                                    </a>
                                </article>
                            </div>
                        </li>

                        <li>
                            <div class="item">
                                <article>
                                    <a target="_blank" href="https://cody-jinks.myshopify.com/products/mercy-vinyl-opaque-white-180g">
                                        <div class="image-container">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/product_4.png" alt="product_1">
                                        </div>
                                        <h3 class="title">MERCY OPAQUE WHITE VINYL 180G</h3>
                                        <span class="price">$25</span>
                                    </a>
                                </article>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-12 text-center desktop-hide pt-10">
                <a class="view_all_merch" href="https://cody-jinks.myshopify.com/collections/mercy" target="_blank">VIEW ALL MERCH</a>
            </div>
        </div>
    </div>
</section>
<section class="cta_with_logo" style="background: linear-gradient(rgba(14, 14, 14, .8),rgba(14, 14, 14, .8) ), url('<?php echo get_stylesheet_directory_uri(); ?>/images/cbn_bg.jpg'); background-size: cover; ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 cta_box">
                <div>
                <div class="logo-container">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cbn_logo.png" alt="cbn_logo">
                </div>
                    <a href="/cbn" class="explore_link">EXPLORE NONE THE WISER</a>
                </div>                
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
