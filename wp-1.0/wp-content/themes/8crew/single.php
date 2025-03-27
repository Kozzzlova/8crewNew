<?php get_header(); ?>


<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <main class="main">
            <div class="container">
                <div class="blog-page">
                    <section class="blog-page__main">
                        <div class="blog-page__image">
							<?php echo get_the_post_thumbnail(); ?>
                            <div class="blog-page__heading">
                                <div class="blog-page__title heading-4"><?php the_title(); ?></div>
                                <div class="blog-page__date"><?php echo get_the_date('d M Y'); ?></div>

                            </div>
                            <q class="blog-page__citation">"Fashion is about dreaming and making other people dream."</q>

                        </div>
                        <div class="blog-page__content"><?php the_content(); ?></div>
                    </section>



                    <section class="blog-page__articles">
                        <div class="blog-page__subtitle heading-3">Інші статті</div>
                        <ul class="grid-block">
						<?php $args = array( 'posts_per_page' => 3, 'cat' => 26, 'post_status' => 'publish' );
						$query = new WP_Query( $args );
						if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
							<li>
							<?php if (file_exists(TEMPLATEPATH.'/template-parts/blog-item.php')) {
								require(TEMPLATEPATH.'/template-parts/blog-item.php');
							}; ?>
							</li>
						<?php } } else {
						// Not found
						} wp_reset_postdata(); ?>
                        </ul>
                    </section>
                </div>
            </div>
        </main>
<?php endwhile; else : endif; ?>


<?php get_footer(); ?>