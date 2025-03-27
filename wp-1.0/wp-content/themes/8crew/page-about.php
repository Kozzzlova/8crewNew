<?php /*
 Template name: Про нас
 */ get_header(); ?>


<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <main class="main">
            <div class="container">
                <section class='about common-section'>
                    <div class="about__image">
						<?php echo get_the_post_thumbnail(); ?>
                        <h4 class='about__title heading-4'><?php the_title(); ?></h4>
                        <div class="about__logo">
                            <a href='<?php bloginfo('url'); ?>/' class="logo">
                                <img src="<?php bloginfo('template_directory'); ?>/public/img/logo/logo.svg" alt="Logo">
                            </a>
                        </div>

                    </div>
                    <div class="about__text"><?php the_content(); ?></div>
                </section>
            </div>
        </main>
<?php endwhile; else : endif; ?>


<?php get_footer(); ?>