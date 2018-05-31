<?php get_header(); ?>

<section id="primary" class="content-area">
    <main id="main" class="site-main search-results">
        <?php if (have_posts()): ?>
        <header class="entry-header entry-meta">
            <div class="entry-header__info">
                <div class="container">
                    <h3 class="entry-title entry-title--top">
                        <?php printf(esc_html__('Search Results for: %s', 'grafique'), '<span>' . get_search_query() . '</span>');
                                ?>
                    </h3>
                    <?php if (function_exists('yoast_breadcrumb')) {
                                    yoast_breadcrumb('
                                <p id="breadcrumbs" class="breadcrumbs">', '</p>
                                ');
                            } ?>
                </div>
            </div>
        </header>
        <!-- .page-header -->
        <div class="container">
            <div class="row">
                <?php while (have_posts()): 
                            the_post();
                            get_template_part('template-parts/content', 'search');

                endwhile;

                the_posts_navigation();

                else:
                    get_template_part('template-parts/content', 'none');
                endif; ?>
            </div>
        </div>
    </main>
    <!-- #main -->
</section>
<!-- #primary -->

<?php get_footer();
