<?php get_header(); ?>
        <main class="main">
            <div class="container">
                <section class="article-page">
                    <h1 class="article-page__title heading-3"><?php $category = get_the_category(); echo $category[0]->cat_name; ?></h1>

                    <ul class="article-page__grid">
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						<li data-aos="fade-up">
						<?php if (file_exists(TEMPLATEPATH.'/template-parts/blog-item.php')) {
							require(TEMPLATEPATH.'/template-parts/blog-item.php');
						}; ?>
						</li>
					<?php endwhile; else : endif; ?>
                    </ul>

					<?php
					echo '<div class=" article-page__pagination pagination">';
					$args = array(
						'base'      => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
						'total'     => $wp_query->max_num_pages,
						'current'   => max(1, get_query_var('paged')),
						'format'    => '/page/%#%',
						'prev_next' => false,
					);
					echo paginate_links($args);
					echo '</div>';
					?>
                </section>
            </div>
        </main>
<?php get_footer(); ?>