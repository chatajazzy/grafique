<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main post-view">
        <?php while (have_posts()):
   		 			the_post();
						get_template_part('template-parts/content', 'single');
						echo '<div class="container">
						<div class="row">
						<div class="col-sm-12 col-md-8 offset-md-2">';
						the_post_navigation();
						echo '</div></div></div>';

				endwhile; ?>
</div>
</div>
</div>

</main>
<!-- #main -->
</div>
<!-- #primary -->

<?php get_footer();
