<?php get_header(); ?>

	<!-- Page Header Section Start -->
	<div class="page-header">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-8 order-md-1 order-2">
					<!-- Page Heading Start -->
					<div class="page-header-box">
						<h1 class="text-anime">Search resultats for : <?php echo get_search_query()?></h1>
						<ol class="breadcrumb wow fadeInUp" data-wow-delay="0.25s">
							<li class="breadcrumb-item"><a href="<?php echo get_home_url();?>">Home >></a></li>
                            <li class="text-white"><?php $allsearch = new WP_Query("s=$s&showposts=-1"); $key = esc_html($s, 1); $count = $allsearch->post_count; echo $count . ' - '; wp_reset_query(); ?> Articles were found for keyword  <strong> <?php echo get_search_query()?></a></li>
						</ol>
					</div>
					<!-- Page Heading End -->
				</div>

				<div class="col-md-4 order-md-2 order-1">
					<!-- Page Header Right Icon Start -->
					<div class="page-header-icon-box wow fadeInUp"  data-wow-delay="0.5s">
						<div class="page-header-icon">
							<img src="<?php echo esc_url (get_template_directory_uri(  ). '/images/icon-blog.svg'); ?>" alt="">
						</div>
					</div>
					<!-- Page Header Right Icon End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header Section End -->

	<!-- Blog Archive Page Start -->
	<?php get_template_part('template-parts/content'); ?>
	<!-- Blog Archive Page End -->

	<?php get_footer(); ?>