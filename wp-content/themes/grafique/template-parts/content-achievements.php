<?php
$achievements_section_title = get_field('achievements_section_title');
$achievements = new WP_Query(
    array(
        'post_type' => 'achievements',
        'order_by' => 'post_id',
        'order' => 'ASC',
    )
)
?>
    <section class="section achievements">
        <header class="text-center">
            <h2 class="section__header">
                <?=$achievements_section_title?>
            </h2>
        </header>
        <div class="container">
            <div class="row">
                <?php while ($achievements->have_posts()): $achievements->the_post()?>
                <div class="col-sm-12 col-lg-4">
                    <div class="achievements__item">
                        <p class="achievements__item-number" data-from="0" data-to="<?=get_field('achievements_count')?>" data-speed="5000">
                            <?=get_field('achievements_count')?>
                        </p>
                        <p class="achievements__item-text">
                            <?=the_title()?>
                        </p>
                    </div>
                </div>
                <?php endwhile; wp_reset_query();?>
            </div>
        </div>
    </section>
