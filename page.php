<?php get_header(); ?>
	<!-- Page Header Section Start -->
	<div class="page-header">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-9 order-md-1 order-2">
					<!-- Page Heading Start -->
					<div class="page-header-box">
						<h1><?php the_title(); ?></h1>
                            <ol class="breadcrumb wow fadeInUp" data-wow-delay="0.25s">
                                <li class="breadcrumb-item"><a href="<?php echo get_home_url();?>">Home >></a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>
                            </ol>
					</div>
					<!-- Page Heading End -->
				</div>

				<div class="col-md-3 order-md-2 order-1">
					<!-- Page Header Right Icon Start -->
					<div class="page-header-icon-box wow fadeInUp" data-wow-delay="0.5s">	
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

    <div class="">
        <?php the_content(); ?>
    </div>

    <?php get_footer(); ?>