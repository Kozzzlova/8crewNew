<a href='<?php the_permalink(); ?>' class="blog-card">
	<div class="blog-card__image">
		<?php echo get_the_post_thumbnail(); ?>
		<div class="blog-card__data"><?php echo get_the_date('M d, Y'); ?></div>
		<div class="blog-card__title"><?php the_title(); ?></div>
	</div>
	<div class="blog-card__content">
		<div class="blog-card__text"><?php global $more; $more = 0; echo wp_trim_words(get_the_excerpt(), 25, '...'); ?></div>
		<span class="blog-card__arrow button-small">
			<svg class="icon">
				<use href="#arrow"></use>
			</svg>
		</span>
	</div>
</a>