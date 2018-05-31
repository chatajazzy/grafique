<?php get_header(); ?>
<div id="primary" class="content-area">
    <main id="main" class="site-main">
        <section class="error-404 not-found">
            <header class="page-header">
                <div class="container">
                    <h1 class="page-title">
                        <?php esc_html_e('Oops! That page can&rsquo;t be found.', 'grafique');?>
                    </h1>
                </div>
            </header>
            <!-- .page-header -->
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-content">
                            <p>
                                <?php esc_html_e('It looks like nothing was found at this location. Maybe try a search?', 'grafique'); ?>
                            </p>
                        </div>
                        <!-- .page-content -->
                    </div>
                </div>
            </div>
        </section>
        <!-- .error-404 -->
    </main>
    <!-- #main -->
</div>
<!-- #primary -->

<?php get_footer();
