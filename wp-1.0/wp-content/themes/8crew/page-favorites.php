<?php /*
 Template name: Обране
 */ get_header(); ?>


<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
	<main class="main">
		<div class="container">
			<section class="main-section">
				<h3 class="heading-3"><?php the_title(); ?></h3>

				<?php the_content(); ?>
				<div class="grid-block favorite">



				</div>
			</section>
		</div>
	</main>
<?php endwhile; else : endif; ?>


<?php get_footer(); ?>