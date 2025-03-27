<?php /*
 Template name: Доставка
 */ get_header(); ?>


<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <main class="main">
            <div class="container">
                <div data-aos="fade-up" class="common-section delivery-section ">
                    <div class="delivery-section__image">
                        <h4 class="delivery-section__title heading-4"><?php the_title(); ?></h4>
                        <div class="delivery-section__text"><?php the_field('delivery_text_on_photo'); ?></div>
						<?php echo get_the_post_thumbnail(); ?>
                    </div>
                    <div class="delivery-section__content">
                        <p class="delivery-section__paragraph"><?php the_field('delivery_start'); ?></p>
						<?php if( have_rows('delivery_list') ): ?>
                        <div class="delivery-section__accordion">
							<?php $i = 1;
							while( have_rows('delivery_list') ): the_row(); ?>
                            <div class='accordion<?php if( $i != 1 ) { echo ' hidden'; } ?>'>
                                <div class="accordion__head">
									<?php $image = get_sub_field('delivery_item_icon');
									if( $image ) { ?>
									<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="accordion__icon" />
									<?php } ?>
                                    <h5 class="accordion__title"><?php the_sub_field('delivery_item_title'); ?>
                                        <svg class='accordion__arrow'>
                                            <use xlink:href="#arrow-tab"></use>
                                        </svg>
                                    </h5>
                                </div>
                                <div class="accordion__body"><?php the_sub_field('delivery_item_text'); ?></div>

                            </div>
							<?php $i++;
							endwhile; ?>
                        </div>
						<?php endif; ?>

                    </div>

                </div>
            </div>
        </main>
<?php endwhile; else : endif; ?>


<?php get_footer(); ?>