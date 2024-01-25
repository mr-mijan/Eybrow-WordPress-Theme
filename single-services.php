<?php get_header(); ?>

	<!-- Page Header Section Start -->
	<div class="page-header">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-8 order-md-1 order-2">
					<!-- Page Heading Start -->
					<div class="page-header-box">
						<h1 class="text-anime"><?php the_title(); ?></h1>
						<ol class="breadcrumb wow fadeInUp" data-wow-delay="0.25s">
							<li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>">Home >></a></li>
							<li class="breadcrumb-item"><a href="<?php echo get_post_type_archive_link('services');?>">Services >></a></li>
							<li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
						</ol>
					</div>
					<!-- Page Heading End -->
				</div>

				<div class="col-md-4 order-md-2 order-1">
					<!-- Page Header Right Icon Start -->
					<div class="page-header-icon-box wow fadeInUp" data-wow-delay="0.5s">	
						<div class="page-header-icon">
							<img src="<?php echo esc_url(get_template_directory_uri(). '/images/icon-service-single.svg'); ?>" alt="">
						</div>
					</div>
					<!-- Page Header Right Icon End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header Section End -->

	<!-- Page Service Single Start -->
	<div class="page-service-single">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<!-- Service Sidebar Start -->
					<div class="service-sidebar">
						<?php dynamic_sidebar( 'services_sidebar' ); ?>
					</div>
					<!-- Service Sidebar End -->
				</div>

				<div class="col-lg-8">
					<!-- Service Content Start -->
					<div class="service-content">
						<div class="service-image">
							<figure class="hover-anime">
								<img src="<?php the_post_thumbnail_url(); ?>" alt="">
							</figure>
						</div>

						<div class="service-entry">
							<h2><?php the_title(); ?></h2>
							<?php the_content(); ?>
						</div>
					</div>
					<!-- Service Content End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Service Single End -->

	<?php get_footer(); ?>