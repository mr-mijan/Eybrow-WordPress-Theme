<!-- Footer Start -->
<footer class="footer">
		<!-- Footer Contact Information Section Start -->
		<div class="footer-contact-information">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<?php dynamic_sidebar( 'footer_1' ); ?>
					</div>

					<div class="col-md-4">
						<?php dynamic_sidebar( 'footer_2' ); ?>
					</div>

					<div class="col-md-4">
						<?php dynamic_sidebar( 'footer_3' ); ?>
					</div>
				</div>
			</div>
		</div>
		<!-- Footer Contact Information Section End -->

		<!-- Main Footer Start -->
		<div class="footer-main">
			<div class="container">
				<div class="row align-items-center">
					<div class="col-lg-2">
						<!-- Footer Logo Start -->
						<div class="footer-logo">
							<?php if(has_custom_logo( 'custom-logo' )){
								the_custom_logo();
								}else{
								?>
								<a href="<?php echo get_home_url(); ?>" class="text-logo text-uppercase text-white h2"><?php bloginfo(); ?></a>
							<?php
							} ?>
						</div>
						<!-- Footer Logo End -->
					</div>

					<div class="col-lg-6 col-md-12">
						<!-- Footer Menu Start -->
						<div class="footer-menu">
							<ul>
							<?php
								wp_nav_menu(array(
									'theme_location' => 'Footer_Menu',
								));
								?>
							</ul>
						</div>
						</div>
						<!-- Footer Menu End -->

						<!-- Footer Copyright Start -->
						<div class="copyright col-lg-4">
							<p>Copyright &copy; 2024 Eybrow. All Rights Reserved.</p>
						</div>
						<!-- Footer Copyright End -->
					</div>
				</div>
			</div>
		</div>
		<!-- Main Footer End -->
	</footer>
	<!-- Footer End -->
    <?php wp_footer(); ?>
</body>
</html>