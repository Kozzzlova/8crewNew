<?php /*
 Template name: Обмін та повернення
 */ get_header(); ?>


<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <div class="main">
            <div class="container">
                <section class="articles-section common-section">
                    <h4 class="articles-section__title heading-4"><?php the_title(); ?></h4>
                    <div class="articles-section__articles">

                        <div class="articles-section__article article">
							<?php $image = get_field('cancel_usa_icon'); ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="article__icon">
                            <div class="article__title"><?php the_field('cancel_usa_title'); ?></div>
                            <div class="article__text"><?php the_field('cancel_usa_text'); ?></div>
                        </div>

                        <div class="payment__article article">
							<?php $image = get_field('cancel_isset_icon'); ?>
							<img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="payment__icon">
                            <div class="article__title"><?php the_field('cancel_isset_title'); ?></div>
							<?php the_field('cancel_isset_text'); ?>
                        </div>
                    </div>
                </section>
            </div>
        </div>
<?php endwhile; else : endif; ?>


<?php get_footer(); ?>