<?php get_header(); ?>
	<!-- Page Header Section Start -->
	<div class="page-header">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-8 order-md-1 order-2">
					<!-- Page Heading Start -->
					<div class="page-header-box">
						<h1 class="text-anime">Our Services</h1>
						<ol class="breadcrumb wow fadeInUp" data-wow-delay="0.25s">
							<li class="breadcrumb-item"><a href="<?php echo get_home_url();?>">Home >></a></li>
							<li class="breadcrumb-item active" aria-current="page">Services</li>
						</ol>
					</div>
					<!-- Page Heading End -->
				</div>

				<div class="col-md-4 order-md-2 order-1">
					<!-- Page Header Right Icon Start -->
					<div class="page-header-icon-box wow fadeInUp" data-wow-delay="0.5s">	
						<div class="page-header-icon">
							<img src="<?php echo esc_url(get_template_directory_uri().'/images/icon-services.svg'); ?>" alt="">
						</div>
					</div>
					<!-- Page Header Right Icon End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header Section End -->

	<!-- Services Lists Start -->
	<div class="services-lists">
		<div class="container">
			<div class="row">
                <?php 
                   $args = array(
                    'post_type' => 'services',
                    'posts_per_page' => -1,
                    );
                     $query = new WP_Query( $args );
                
                    if ($query-> have_posts() ) : 
                    while($query-> have_posts()  ) : $query-> the_post();
                    ?>
				<div class="col-lg-4 col-md-6">
					<!-- Service Item Start -->
					<div class="service-item-layout2 wow fadeInUp">
						<div class="service-image">
							<figure class="hover-anime">
								<img src="<?php the_post_thumbnail_url(); ?>" alt="">
							</figure>
						</div>

						<div class="service-content">
							<h3><?php the_title(); ?></h3>
							<?php the_excerpt(); ?>
							<a href="<?php the_permalink(); ?>" class="service-readmore">Read More</a>
						</div>
					</div>
					<!-- Service Item End -->
				</div>
                    <?php
                        endwhile; else: _e('No post found' ,'eybrow');
                        endif;
                        wp_reset_postdata();
                    ?>
			</div>
		</div>
	</div>
	<!-- Services Lists End -->

	<?php get_footer(); ?>