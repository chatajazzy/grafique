<div class="hero">
<?php
$slides = new WP_Query(
    array(
        'post_type' => 'hero_slider_slides',
        'order_by' => 'post_id',
        'order' => 'ASC',
    )
)
?>
<div class="hero-slider">
    <?php while ($slides->have_posts()): $slides->the_post()?>
				        <div class="hero__item">
				            <img src="<?=get_field('hero_image')['url']?>" alt="<?=get_field('hero_image')['alt']?>" class="hero__img">
				            <div class="container">
				                <div class="hero__text-box">
				                    <p class="hero__text"><?=get_field('hero_subtitle_thin')?>
				                        <strong><?=get_field('hero_subtitle_bold')?></strong>
				                    </p>
				                    <p class="hero__text"><?=get_field('hero_text')?></p>
				                </div>
				            </div>
				        </div>
		    <?php endwhile;
wp_reset_query();?>
</div>
<div class="container">
    <div class="hero-slider__nav">
        <?php while ($slides->have_posts()): $slides->the_post()?>
				            <div class="hero-slider__nav-item">
				                <span class="hero-slider__nav-bar"></span>
				            </div>
				        <?php endwhile;
wp_reset_query();?>
    </div>
</div>


</div>
