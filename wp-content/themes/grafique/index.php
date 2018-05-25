<?php
get_header();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
		<section class="blog-section">
			<div class="container">
					<header>
							<h2 class="blog-section__title">Blog</h2>
							<?= is_home() ? 'true': 'false'; ?>
							<?= is_front_page() ? 'true': 'false'; ?>
					</header>
					<?php
if (have_posts()):
    $index = 2;
    if (is_home() && !is_front_page()):
    ?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title();?></h1>
					</header>
					<?php
endif;

/* Start the Loop */
while (have_posts()):
    if ($index % 2 == 0) {
        echo '<div class="row">';
    }
    the_post();
    if ($index % 4 == 0) {
        echo '</div>';
    }
    get_template_part('template-parts/content', get_post_type());

    $index++;
endwhile;

the_posts_navigation();

else:

    get_template_part('template-parts/content', 'none');

endif;
?>

			</div>
		</section>


		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
