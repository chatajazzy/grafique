<?php
$projects_section_title = get_field('projects_section_title');
$projects_section_subtitle_thin = get_field('projects_section_subtitle_thin');
$projects_section_subtitle_bold = get_field('projects_section_subtitle_bold');

$projects = new WP_Query(
    array(
        'post_type' => 'projects',
        'order_by' => 'post_id',
        'order' => 'ASC',
    )
)
?>
<section class="projects" id="projects">
    <header class="text-center">
        <h2 class="section__header">
            <?=$projects_section_title?>
        </h2>
        <p class="section__subtitle">
            <?=$projects_section_subtitle_thin?>
        </p>
        <p class="section__subtitle section__subtitle--bold">
            <?=$projects_section_subtitle_bold?>
        </p>
    </header>
    <ul class="projects__grid">
        <?php $index = 0;?>
        <?php while ($projects->have_posts()): $projects->the_post()?>
	            <?php if ($index == 0 || $index == 3): ?>
	                <div class="row no-gutters">
	            <?php endif;?>
            <li class="col-sm-12 col-md-6 col-lg-4 projects__grid-item">
                <a href="<?=the_post_thumbnail_url()?>">
                    <img class="projects__photo" src="<?=the_post_thumbnail_url()?>" alt="cos">
                </a>
            </li>
            <?php if ($index == 2 || $index == 5): ?>
                </div>
            <?php endif;?>
            <?php $index++;?>
        <?php endwhile;
wp_reset_query();?>
    </ul>
</section>
