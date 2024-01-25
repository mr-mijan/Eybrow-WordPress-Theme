<?php get_header(); ?>

	<!-- Page Header Section Start -->
	<div class="page-header">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-8 order-md-1 order-2">
					<!-- Page Heading Start -->
					<div class="page-header-box">
						<h1 class="text-anime">Page Not Found</h1>
						<ol class="breadcrumb wow fadeInUp" data-wow-delay="0.25s">
							<li class="breadcrumb-item"><a href="<?php echo get_home_url();?>">Home >></a></li>
							<li class="breadcrumb-item active" aria-current="page">404 Error</li>
						</ol>
					</div>
					<!-- Page Heading End -->
				</div>

				<div class="col-md-4 order-md-2 order-1">
					<!-- Page Header Right Icon Start -->
					<div class="page-header-icon-box wow fadeInUp" data-wow-delay="0.5s">	
						<div class="page-header-icon">
							<img src="<?php echo esc_url(get_template_directory_uri().'/images/icon-notfound.svg');?>" alt="">
						</div>
					</div>
					<!-- Page Header Right Icon End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header Section End -->

	<!-- Page FAQs Start -->
	<div class="page-not-found">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Page Not Found Box Start -->
					<div class="page-not-found-box wow fadeInUp" data-wow-delay="0.25s">
						<div class="not-found-image">
							<img src="<?php echo esc_url (get_template_directory_uri().'/images/image-404.svg'); ?>" alt="">
						</div>

						<h3>Page Not Found!</h3>
						<p>The page you are looking for might have been removed, had its name changed,<br> or is temporarily unavailable.</p>

						<a href="<?php echo get_home_url();?>" class="btn-default">Back To Home</a>
					</div>
					<!-- Page Not Found Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page FAQs End -->
	
	<?php get_footer(); ?>