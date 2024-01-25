<?php get_header(); ?>
	<!-- Page Header Section Start -->
	<div class="page-header">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-md-9 order-md-1 order-2">
					<!-- Page Heading Start -->
					<div class="page-header-box">
						<h1 class="text-anime"><?php the_title(); ?></h1>
						<div class="post-meta wow fadeInUp text-capitalize" data-wow-delay="0.25s">
							<ul>
								<li>On <?php echo get_the_date(); ?></li>
                                <?php global $post; $author_id = $post->post_author;?>
								<li>By <?php echo get_the_author_meta( 'display_name', $author_id ); ?></li>
								<li><?php the_category(); ?></li>
							</ul>
						</div>
					</div>
					<!-- Page Heading End -->
				</div>

				<div class="col-md-3 order-md-2 order-1">
					<!-- Page Header Right Icon Start -->
					<div class="page-header-icon-box wow fadeInUp" data-wow-delay="0.5s">	
						<div class="page-header-icon">
							<img src="<?php echo esc_url(get_template_directory_uri(  ). '/images/icon-blog.svg')?>" alt="">
						</div>
					</div>
					<!-- Page Header Right Icon End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header Section End -->

	<!-- Blog Single Start -->
	<div class="blog-single-page">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<!-- Post Featured Image Start -->
					<div class="post-featured-image wow fadeInUp" data-wow-delay="0.25s">
						<figure class="hover-anime">
							<img src="<?php the_post_thumbnail_url(); ?>" alt="">
						</figure>
					</div>
					<!-- Post Featured Image End -->

					<!-- Post Content Start -->
					<div class="post-content wow fadeInUp mt-5" data-wow-delay="0.5s">
						<!-- Post Entry Start -->
						<div class="post-entry">
						    <?php the_content(); ?>
                        </div>
						<!-- Post Entry End -->

						<!-- Post Extra Info Start -->
						<div class="row">
							<div class="col-lg-8">
								<!-- Post Tags Start -->
								<div class="post-tags">
                                    <?php
                                        $before = '<span class="text-bold">Tags: </span>';
                                        $seperator = ''; // blank instead of comma
                                        $after = '';
                                        the_tags( $before, $seperator, $after );
                                    ?>
								</div>
								<!-- Post Tags End -->
							</div>

							<div class="col-lg-4">
								<!-- Post Sharing Links Start -->
								<div class="post-social-sharing">
									<ul>
                                        <?php if (function_exists('display_custom_social_share')) : ?>
                                            <?php display_custom_social_share(); ?>
                                        <?php endif; ?>
									</ul>
								</div>
								<!-- Post Sharing Links End -->
							</div>
						</div>
						<!-- Post Extra Info End -->
					</div>
					<!-- Post Content End -->

                    <!-- Post Comment Start -->
					<div class="post-comment wow fadeInUp" data-wow-delay="0.5s">
                        <?php
                        //If comments are open or we have at least one comment, load up the comment template.
                            if ( comments_open() || get_comments_number() ) :
                                comments_template();
                            endif;
                        ?>
					</div>
					<!-- Post Content End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Blog Single End -->	

	<?php get_footer(); ?>