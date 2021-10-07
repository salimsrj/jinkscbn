<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="newsletter" id="newsletter">
					<h2 class="title">STAY UP TO DATE</h2>
					
						<div class="row">
							<div class="col-md-6">
								<form action="#">
								<div class="input-group">
										<input type="text" class="form-control" placeholder="BY TEXT">
										<span class="input-group-btn">
											<button class="btn" type="submit"><span><i class="fa fa-angle-right"></i></span></button>
										</span>
									</div>
								</form>
							</div>
							<div class="col-md-6">
								<form action="#">
									
									<div class="input-group">
										<input type="email" class="form-control" placeholder="BY EMAIL">
										<span class="input-group-btn">
											<button class="btn" type="submit"><span><i class="fa fa-angle-right"></i></span></button>
										</span>
									</div>
								</form>
							</div>
						</div>					
					
				</div>
			</div>
			<div class="col-md-6">
				<div class="social-icons">
					<ul>
						<li><a href="https://facebook.com/CodyJinksMusic/" target="_blank"><span><i class="fa fa-facebook"></i></span></a></li>
						<li><a href="https://twitter.com/CodyJinksMusic" target="_blank"><span><i class="fa fa-twitter"></i></span></a></li>
						<li><a href="https://instagram.com/codyjinks/" target="_blank"><span><i class="fa fa-instagram"></i></span></a></li>
						<li><a href="https://youtube.com/channel/UCYVrBCMUcl56WlyhKNlj7-Q" target="_blank"><span><i class="fa fa-youtube-play"></i></span></a></li>
						<li><a href="https://open.spotify.com/artist/2v7wIbCkIzxOfT3GnqCexD?si=B0oLYrFBSlioedfF7sO8DQ" target="_blank"><span><i class="fa fa-spotify"></i></span></a></li>
						<li><a href="https://music.apple.com/us/artist/cody-jinks/363412711" target="_blank"><span><i class="fa fa-music"></i></span></a></li>
						<li><a href="https://amazon.com/codyjinks" target="_blank"><span><i class="fa fa-amazon"></i></span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</footer>
<div class="footer-bottom">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<span>© 2021 Copyright Cody Jinks / Caned by Nod. All rights reserved.</span>
			</div>
		</div>
	</div>
</div>



</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>

