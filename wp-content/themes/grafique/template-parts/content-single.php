<article id="post-<?php the_ID();?>" <?php post_class();?>>
<header class="entry-header entry-meta">
    <div class="entry-header__info">
        <div class="container">

            <?=the_title('<h3 class="entry-title entry-title--top">', '</h3>')?>
            <?php
if (function_exists('yoast_breadcrumb')) {
    yoast_breadcrumb('
<p id="breadcrumbs" class="breadcrumbs">', '</p>
');
}
?>        </div>
    </div>
<div class="container">
	<div class="row">
<div class="col-sm-12 col-md-8 offset-md-2">
	<header class="entry-header">
		<?php

if ('post' === get_post_type()):
?>

			<div class="entry-meta">
				<header class="entry-header entry-meta">
          

                                <span class="post__date">
																<a href="<?=get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j'));?>" class="post__date-link"><?php the_time('F j, Y')?></a>
                                </span>
                                <span class="posted-by">by
                                    <a href="<?=get_the_author_link()?>" class="posted-by__author" rel="author"><?=get_the_author_link();?></a>
                                </span>
                                <span class="post__cats">in
                                    <a href="" rel="tag"><?=the_category(', ');?></a>
                                </span>
                            </header>
                            

			</div><!-- .entry-meta -->
		<?php endif;?>
	</header><!-- .entry-header -->


<div class="entry-content">
	<?=the_title('<h3 class="entry-title">', '</h3>')?>
    <figure class="post-thumbnail">
                            <a href="<?=esc_url(get_permalink())?>" class="post-thumbnail__link">
                                <img class="post-thumbnail__img" src="/wp-content/themes/grafique/img/image1.jpg" alt="cos">
                            </a>
                        </figure>
<?=the_content()?>
                            </div>

	<footer class="entry-footer">
                                <div class="entry-footer-bottom">
                                    <div class="entry-meta-container">
                                        <span class="post__tags">
                                            <a href="" rel="tag">
																							<?=the_tags('', ', ', '')?>
																						</a>
                                        </span>
                                    </div>

                                </div>
                                <!-- .entry-footer-bottom -->
                            </footer>

</div></div></div>
</article><!-- #post-<?php the_ID();?> -->
