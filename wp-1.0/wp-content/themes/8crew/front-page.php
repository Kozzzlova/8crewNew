<?php /*
 Template name: Головна
 */ get_header(); ?>


<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<main class="main">
		<div class="container">
			<div class="main__container">
				<section class="first-section">
					<div class="first-section__column">
						<div class="first-section__header">
							<h1 class="heading-1"><?php the_field('hero_head'); ?></h1>
							<a href='<?php the_field('hero_cat_link'); ?>' class="first-section__content">
								<div class="first-section__image">
									<?php $image = get_field('hero_cat_photo');
									if( $image['id'] ) {echo wp_get_attachment_image( $image['id'], 'full' ); } ?>
								</div>
								<div class="section-label">
									<span class="section-label__title"><?php the_field('hero_cat_head'); ?></span>
									<span class="section-label__amount"><?php the_field('hero_cat_desc'); ?></span>

								</div>
								<button type='button' class="main-arrow button-small">
									<svg class="icon">
										<use href="#arrow"></use>
									</svg>
								</button>
							</a>

						</div>

					</div>

					<div class="first-section__column">
						<?php if( have_rows('hero_slider') ): ?>
						<div class="first-section__slider">
							<div class="swiper main-swiper">
								<!-- Additional required wrapper -->
								<div class="swiper-wrapper main-swiper-wrapper">
									<!-- Slides -->
									<?php while( have_rows('hero_slider') ): the_row(); ?>
									<a href='<?php the_sub_field('hero_slide_link'); ?>' class="swiper-slide main-swiper-slide">
										<?php $image = get_sub_field('hero_slide_img');
										if( $image['id'] ) {echo wp_get_attachment_image( $image['id'], 'full' ); } ?>
										<div class="section-label">
											<span class="section-label__title"><?php the_sub_field('hero_slide_name'); ?></span>
											<span class="section-label__amount"><?php the_sub_field('hero_slide_desc'); ?></span>
										</div>
										<button type='button' class="main-arrow button-small">
											<svg class="icon">
												<use href="#arrow"></use>
											</svg>
										</button>
									</a>
									<?php endwhile; ?>
								</div>
								<!-- If we need pagination -->
								<div class="swiper-pagination main-swiper-pagination">
								</div>


							</div>

						</div>
						<?php endif; ?>

					</div>

				</section>



				<section class="basic-section">
					<div class="basic-section__block">
						<h2 class="basic-section__title heading-3"><?php the_field('main_new_head'); ?></h2>
						<div data-aos="fade-up" class="basic-section__slider">
							<?php $post_objects = get_field('main_new_product');
							if( $post_objects ): ?>
							<div class="swiper arrivals-swiper">
								<!-- Additional required wrapper -->
								<div class="swiper-wrapper arrivals-swiper-wrapper">
									<!-- Slides -->
								<?php foreach( $post_objects as $post): setup_postdata($post); ?>
									<div class="swiper-slide arrivals-swiper-slide">
										<?php wc_get_template_part( 'content', 'product' ); ?>
									</div>
									<?php endforeach;
									wp_reset_postdata(); ?>
								</div>
								<!-- If we need scrollbar -->
								<div class="swiper-scrollbar arrivals-swiper-scrollbar"></div>

							</div>

							<!-- If we need navigation buttons -->
							<button type='button' class="swiper-button-prev arrivals-swiper-btn-prev">
								<svg width='20' height='20' viewBox="0 0 20 20">
									<use xlink:href="#arrow-next"></use>
								</svg>
							</button>
							<button type='button' class="swiper-button-next arrivals-swiper-btn-next">
								<svg width='20' height='20' viewBox="0 0 20 20">
									<use xlink:href="#arrow-next"></use>
								</svg>
							</button>
							<?php endif; ?>

							<a href="/shop/" class="basic-section__link bordered-button"><?php pll_e('Показати усе'); ?></a>
						</div>

					</div>



					<div class="basic-section__block">
						<h2 class="basic-section__title heading-3"><?php the_field('main_collection_head'); ?></h2>
						<?php if( have_rows('main_collection_list') ): ?>
						<div data-aos="fade-up" class="swiper collection-swiper">
							<!-- Additional required wrapper -->
							<div class="swiper-wrapper collection-swiper-wrapper">
								<!-- Slides -->
								<?php while( have_rows('main_collection_list') ): the_row(); ?>
								<div class="swiper-slide collection-swiper-slide">
									<a href='<?php the_sub_field('main_collection_item_link'); ?>' class="collection-card">
										<button type='button' class="collection-card__arrow button-small">
											<svg class="icon">
												<use href="#arrow"></use>
											</svg>
										</button>
										<div class="collection-card__label">
											<div class="collection-card__title"><?php the_sub_field('main_collection_item_name'); ?></div>
											<div class="collection-card__amount"><?php the_sub_field('main_collection_item_desc'); ?></div>

										</div>
										<div class="collection-card__small-img">
											<?php $image = get_sub_field('main_collection_item_photo_min_1');
											if( $image['id'] ) {echo wp_get_attachment_image( $image['id'], 'full' ); } ?>
										</div>
										<div class="collection-card__small-img">
											<?php $image = get_sub_field('main_collection_item_photo_min_2');
											if( $image['id'] ) {echo wp_get_attachment_image( $image['id'], 'full' ); } ?>
										</div>
										<div class="collection-card__big-img">
											<?php $image = get_sub_field('main_collection_item_photo_big');
											if( $image['id'] ) {echo wp_get_attachment_image( $image['id'], 'full' ); } ?>
										</div>

									</a>
								</div>
								<?php endwhile; ?>
							</div>
							<!-- If we need pagination -->
							<div class="swiper-pagination collection-swiper-pagination"></div>



						</div>
						<?php endif; ?>
					</div>




					<div class="basic-section__block">
						<h2 class="basic-section__title heading-3"><?php the_field('main_recomend_head'); ?></h2>
						<div data-aos="fade-up" class="basic-section__slider">
							<?php $post_objects = get_field('main_recomend_list');
							if( $post_objects ): ?>
							<div class="swiper season-swiper">
								<!-- Additional required wrapper -->
								<div class="swiper-wrapper season-swiper-wrapper">
									<!-- Slides -->
									<?php foreach( $post_objects as $post): setup_postdata($post); ?>
										<div class="swiper-slide season-swiper-slide">
											<?php wc_get_template_part( 'content', 'product' ); ?>
										</div>
									<?php endforeach;
									wp_reset_postdata(); ?>
								</div>
								<!-- If we need scrollbar -->
								<div class="swiper-scrollbar season-swiper-scrollbar"></div>

							</div>
							<!-- If we need navigation buttons -->
							<button type='button' class="swiper-button-prev season-swiper-btn-prev">
								<svg width='20' height='20' viewBox="0 0 20 20">
									<use xlink:href="#arrow-next"></use>
								</svg>
							</button>
							<button type='button' class="swiper-button-next season-swiper-btn-next">
								<svg width='20' height='20' viewBox="0 0 20 20">
									<use xlink:href="#arrow-next"></use>
								</svg>
							</button>
							<?php endif; ?>

							<a href="/shop/" class="basic-section__link bordered-button"><?php pll_e('Показати усе'); ?></a>
						</div>

					</div>



					<div class="basic-section__block">
						<h2 class="basic-section__title heading-3"><?php pll_e('Блог'); ?></h2>
						<div data-aos="fade-up" class="basic-section__blog ">
							<?php $args = array( 'posts_per_page' => 3, 'cat' => 26, 'post_status' => 'publish' );
							$query = new WP_Query( $args );
							if ( $query->have_posts() ) { while ( $query->have_posts() ) { $query->the_post(); ?>
								<?php if (file_exists(TEMPLATEPATH.'/template-parts/blog-item.php')) {
									require(TEMPLATEPATH.'/template-parts/blog-item.php');
								}; ?>
							<?php } } else {
								// Not found
							} wp_reset_postdata(); ?>
						</div>

					</div>
				</section>
			</div>

		</div>
	</main>
<?php endwhile; else : endif; ?>


<?php get_footer(); ?>