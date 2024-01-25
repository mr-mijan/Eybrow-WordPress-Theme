<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
	<!-- Meta -->
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head() ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

	<!-- Preloader Start -->
	<div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="<?php echo esc_url (get_template_directory_uri(). '/images/loader.svg'); ?>" alt=""></div>
		</div>
	</div>
	<!-- Preloader End -->

	<!-- Header Start -->
	<header class="main-header">
		<div class="header-sticky">
			<nav class="navbar navbar-expand-lg">
				<div class="container">
					<!-- Logo Start -->
                        <?php if(has_custom_logo( 'custom-logo' )){
                            the_custom_logo();
                            }else{
                            ?>
                            <a href="<?php echo get_home_url(); ?>" class="text-logo text-uppercase text-white h2"><?php bloginfo(); ?></a>
                        <?php
                        } ?>
					<!-- Logo End -->

					<button class="navbar-toggler" type="button" data-bs-toggle="collapse"
						data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
						aria-label="Toggle navigation">
						<i class="fa-solid fa-bars text-white"></i>
					</button>

					<!-- Main Menu start -->
					<div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'Header_Menu',
                            'container' => '',
                            'menu_class' => 'navbar-nav mr-auto',
                            'fallback_cb' => 'WP_Bootstrap_Navwalker::fallback',
                            'items_wrap' => '<ul id=" menu %1$s" class=" %2$s">%3$s</ul>',
                            'depth' => 3,
                            'walker' => new bootstrap_5_wp_nav_menu_walker()
                        ));
                        ?>
					</div>
					<!-- Main Menu End -->
			</nav>
	</header>
