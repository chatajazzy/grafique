<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
<span class="search-form__close"><i class="fa fa-times" aria-hidden="true"></i>
</span>
	<div class="search-form__elements-wrap">
		<div class="search-form__input-wrap">
			<span class="screen-reader-text"><?php echo esc_html_x('Search for:', 'label', 'grafique') ?></span>
			<input type="search" class="search-form__field" placeholder="<?php echo esc_attr_x('Search...', 'placeholder', 'grafique') ?>" value="<?php echo get_search_query() ?>" name="s" title="<?php echo esc_attr_x('Search for:', 'label', 'grafique') ?>" />
		</div>
		<button type="submit" class="search-form__submit"><i class="fas fa-search"></i></button>
	</div>
</form>
