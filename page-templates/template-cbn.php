<?php
/*
 * Template Name: CBN
 * 
*/
// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header('cbn');
?>
<section class="page_header"  style="background: linear-gradient(rgba(0, 0, 0, 0.8),rgba(0, 0, 0, 0.8) ), url('<?php echo get_stylesheet_directory_uri(); ?>/images/cbn_banner.jpg'); background-size: cover; ">
    <div class="container">
        <div class="row">
            <div class="col-12 banner-content">
                <div>
                    <span class="pre-title">COMING NOVEMBER 12TH</span>
                    <h1 class="title">NONE THE WISER</h1>
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
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cbn_preview.jpg" alt="CBN">
                    </div>
                    <div class="pre-order">
                        <ul>
                            <li>
                                <a target="_blank" href="https://codyjinks.ffm.to/nonethewiser">
                                    <span>PRE-ADD:</span>
                                    <div class="image-container">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/apple_music_white.png" alt="apple_music">                                       
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a target="_blank" href="https://codyjinks.ffm.to/nonethewiser">
                                    <span>PRE-SAVE:</span>
                                    <div class="image-container">
                                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sportify-add.png" alt="sportify">
                                    </div>
                                </a>
                            </li>

                            <li>
                                <a target="_blank" href="https://codyjinks.ffm.to/nonethewiser">
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
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cbn_stream_1.jpg" alt="stream_1">
                                <a target="_blank" href="https://p.scdn.co/mp3-preview/231a123bfa0a35534473170b102fbcca3a24334d?cid=774b29d4f13844c495f206cafdad9c86" class="play_btn"><span><i class="fa fa-play" aria-hidden="true"></i></span></a>
                            </div>
                            <h3 class="title">MIDDLE FINGER</h3>
                            <div class="listen-on">
                                <ul>
                                    <li>
                                        <a target="_blank" href="https://music.apple.com/us/album/middle-finger/1578762059?i=1578762427">
                                            <div class="image-container">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/apple_music.png" alt="apple_music">
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://open.spotify.com/track/2LChzToKIunGbuJeSTf5HV?si=1fbb2a3978a64c38">
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
                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cbn_stream_2.jpg" alt="stream_1">
                                <audio id="track">
                                    <source src="https://p.scdn.co/mp3-preview/0b6e47abc137035debaba257bbb7afbae07ca76c?cid=774b29d4f13844c495f206cafdad9c86" type="audio/mpeg" />
                                </audio>

                                <div id="player-container" class="play_btn">
                                    <div id="play-pause" class="play">Play</div>
                                </div>
                                <!-- <a target="_blank" href="https://p.scdn.co/mp3-preview/0b6e47abc137035debaba257bbb7afbae07ca76c?cid=774b29d4f13844c495f206cafdad9c86" class="play_btn"><span><i class="fa fa-play" aria-hidden="true"></i></span></a> -->
                            </div>
                            <h3 class="title">DYING TRYING</h3>
                            <div class="listen-on">
                                <ul>
                                    <li>
                                        <a target="_blank" href="https://music.apple.com/us/album/dying-trying/1578762059?i=1578762431">
                                            <div class="image-container">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/apple_music.png" alt="apple_music">
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a target="_blank" href="https://open.spotify.com/track/5sgMJvewZoOcQAgElHlncO?si=11d61545465d4d67">
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
                <a target="_blank" class="view_all_merch" href="https://canedbynod.myshopify.com/">VIEW ALL MERCH</a>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="product-list">
                    <ul>
                        <li>
                            <div class="item">
                                <article>
                                    <a target="_blank" href="https://canedbynod.myshopify.com/products/caned-by-nod-none-the-wiser-black-vinyl">
                                        <div class="image-container">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cbn_1.png" alt="cbn_1">
                                        </div>
                                        <h3 class="title">NONE THE WISER CD</h3>
                                        <span class="price">$10</span>
                                    </a>
                                </article>
                            </div>
                        </li>

                        <li>
                            <div class="item">
                                <article>
                                    <a target="_blank" href="https://canedbynod.myshopify.com/products/caned-by-nod-none-the-wiser-translucent-black-vinyl-180g">
                                        <div class="image-container">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cbn_2.png" alt="cbn_2">
                                        </div>
                                        <h3 class="title">NONE THE WISER BLACK VINYL 180G</h3>
                                        <span class="price">$25</span>
                                    </a>
                                </article>
                            </div>
                        </li>

                        <li>
                            <div class="item">
                                <article>
                                    <a target="_blank" href="https://canedbynod.myshopify.com/products/caned-by-nod-none-the-wiser-translucent-orange-vinyl-180g">
                                        <div class="image-container">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cbn_3.png" alt="cbn_3">
                                        </div>
                                        <h3 class="title">NONE THE WISER TRANSLUCENT ORANGE VINYL 180G</h3>
                                        <span class="price">$25</span>
                                    </a>
                                </article>
                            </div>
                        </li>

                        <li>
                            <div class="item">
                                <article>
                                    <a target="_blank" href="https://canedbynod.myshopify.com/products/caned-by-nod-none-the-wiser-translucent-red-vinyl">
                                        <div class="image-container">
                                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/cbn_4.png" alt="cbn_4">
                                        </div>
                                        <h3 class="title">NONE THE WISER TRANSLUCENT RED VINYL 180G</h3>
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
<section class="cta_with_logo" style="background: linear-gradient(rgba(0, 0, 0, 0.8),rgba(0, 0, 0, 0.8) ), url('<?php echo get_stylesheet_directory_uri(); ?>/images/jinks_bg.jpg'); background-size: cover; ">
    <div class="container">
        <div class="row">
            <div class="col-md-12 cta_box">
                <div>
                    <div class="logo-container">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/jinks-cbn-logo-white.png" alt="jinks-cbn">
                    </div>
                    <a href="/mercy" class="explore_link">EXPLORE MERCY</a>
                </div>
                
            </div>
        </div>
    </div>
</section>

<?php
get_footer();
