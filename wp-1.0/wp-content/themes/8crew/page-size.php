<?php /*
 Template name: Розмір
 */ get_header(); ?>


<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <main class="main">

            <div class="container">
                <div class="common-section size-section">
                    <div class="heading-4"><?php the_title(); ?></div>
                    <div class="size-section__content">
                        <div class="size-section__text">
                            <div class="size-section__paragraphs"><?php the_content(); ?></div>
                            <button type='button' class="size-section__button size-button button"><?php pll_e('Розмірна сітка'); ?></button>
                        </div>
                        <div class="size-section__image">
							<?php echo get_the_post_thumbnail(); ?>
                        </div>

                    </div>
                </div>
            </div>
        </main>
<?php endwhile; else : endif; ?>


<?php get_footer(); ?>