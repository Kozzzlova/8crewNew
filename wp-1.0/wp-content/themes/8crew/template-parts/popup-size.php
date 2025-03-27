<div class="modal">
	<div class="modal__body size-modal">
		<button type='button' class="modal__close">
			<svg class="icon">
				<use href="#close-circle"></use>
			</svg>
		</button>
		<div class="size-modal__title"><?php the_field('size_head', alao_current_lang() ); ?></div>
		<a href='<?php the_field('size_link_url', alao_current_lang() ); ?>' class="size-modal__link"><?php the_field('size_link_text', alao_current_lang() ); ?></a>

		<?php if( have_rows('size_table', alao_current_lang() ) ): ?>
		<div class="size-modal__table size-table">
			<?php while( have_rows('size_table', alao_current_lang() ) ): the_row(); ?>
				<?php if( have_rows('size_col', alao_current_lang() ) ): ?>
			<div class="size-table__row">
				<?php while( have_rows('size_col', alao_current_lang() ) ): the_row(); ?>
				<div class="size-table__cell<?php if( get_sub_field('size_row_bold', alao_current_lang() ) ) { echo ' bold'; } ?>"><?php the_sub_field('size_row', alao_current_lang() ); ?></div>
				<?php endwhile; ?>
			</div>
				<?php endif; ?>
			<?php endwhile; ?>
		</div>
	<?php endif; ?>

		<div class="size-modal__text">
			<div class="size-modal__title"><?php the_field('size_bottom_head', alao_current_lang() ); ?></div>
			<div class="size-modal__paragraphs"><?php the_field('size_bottom_text', alao_current_lang() ); ?></div>
		</div>
	</div>

</div>