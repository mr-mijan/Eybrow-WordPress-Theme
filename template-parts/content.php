<div class="page-blog-archive" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<div class="container">
			<div class="row">
                <?php 
                    if ( have_posts() ) :
                    while ( have_posts() ) : the_post();
                ?>
				<div class="col-lg-4">
					<!-- Post Item Start -->
					<div class="post-item wow fadeInUp">
						<!-- Post Featured Image Start -->
						<div class="post-featured-image">
							<a href="<?php the_permalink(); ?>">
								<figure class="hover-anime">
									<img src="<?php the_post_thumbnail_url(); ?>" alt="">
								</figure>
							</a>
						</div>
						<!-- Post Featured Image End -->

						<!-- Post Header Start -->
						<div class="post-header">
							<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
							<div class="post-meta">
								<ul>
									<li><?php echo get_the_date(); ?></li>
								</ul>
							</div>
						</div>
						<!-- Post Header End -->

						<!-- Post Read More Button Start -->
						<div class="post-readmore">
							<a href="<?php the_permalink(); ?>"><img src="<?php echo esc_url(get_template_directory_uri(  ). '/images/icon-readmore.svg');?>" alt=""></a>
                            
						</div>
						<!-- Post Read More Button End -->
					</div>
					<!-- Post Item End -->
				</div>
                <?php endwhile; else: _e('No post found','eybrow');
                    endif; 
                ?>
			</div>

			<div class="row">
				<div class="col-md-12">
					<!-- Post Pagination Start -->
					<div class="post-pagination wow fadeInUp" data-wow-delay="1s">
						<ul class="pagination">
                            <?php the_posts_pagination( array(
                                'mid_size'  => 2,
                                'prev_text' => __( '<i class="fa-solid fa-arrow-left-long"></i>', 'eybrow' ),
                                'next_text' => __( '<i class="fa-solid fa-arrow-right-long"></i>', 'eybrow' ),
                            ) ); ?>
						</ul>
					</div>
					<!-- Post Pagination End -->
				</div>
			</div>
		</div>
	</div>