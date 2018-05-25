<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package grafique
 */

?>

<article class="col-sm-12 col-md-6 post" id="post-<?php the_ID();?>" <?php post_class();?>>
<figure class="post-thumbnail">
                            <a href="<?= esc_url(get_permalink())?>" class="post-thumbnail__link">
                                <img class="post-thumbnail__img" src="../wp-content/themes/grafique/img/image1.jpg" alt="cos">
                            </a>
                        </figure>
	<header class="entry-header">
		<?php

if ('post' === get_post_type()):
?>

			<div class="entry-meta">
				<header class="entry-header entry-meta">
				<span class="post__comments">
					<a href="<?= comments_link() ?>" class="post__comments-link">
					<i class="far fa-comment"></i>
					<?=comments_number(0, 1, '%')?>				
				</a>
			</span>
                                <span class="post__date">
																<a href="<?= get_day_link(get_post_time('Y'), get_post_time('m'), get_post_time('j'));  ?>" class="post__date-link"><?php the_time('F j, Y') ?></a>
                                </span>
                                <span class="posted-by">by
                                    <a href="<?= get_the_author_link()?>" class="posted-by__author" rel="author"><?=get_the_author_link();?></a>
                                </span>
                                <span class="post__cats">in
                                    <a href="" rel="tag"><?=the_category(', ');?></a>
                                </span>
                            </header>

			</div><!-- .entry-meta -->
		<?php endif;?>
	</header><!-- .entry-header -->


<div class="entry-content">
	<?=the_title('<h3 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h3>')?>

                                <p><?=the_excerpt()?></p>
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
                                    <!-- .entry-meta-container -->
                                    <div class="post__button-wrap">
                                        <a href="<?= esc_url(get_permalink())?>"
                                            class="post__button btn btn-accent-1">Learn more
                                            <i class="fa fa-angle-right" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                                <!-- .entry-footer-bottom -->
                            </footer>
</article><!-- #post-<?php the_ID();?> -->
