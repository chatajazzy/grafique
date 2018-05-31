<?php
global $post;
$about_section_title = get_field('about_section_title', $post->ID);
$about_section_description = get_field('about_section_description');
$about_section_subtitle_thin = get_field('about_section_subtitle_thin');
$about_section_subtitle_bold = get_field('about_section_subtitle_bold');
$about_image1 = get_field('about_image1');
$about_image2 = get_field('about_image2');
?>
    <section class="section about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <header>
                        <h2 class="section__header">
                            <?=$about_section_title?>
                        </h2>
                    </header>
                    <div class="about__welcome-box">
                        <p class="section__subtitle">
                            <?=$about_section_subtitle_thin?>
                        </p>
                        <p class="section__subtitle section__subtitle--bold">
                            <?=$about_section_subtitle_bold?>
                        </p>
                        <p class="section__text">
                            <?=$about_section_description?>
                        </p>
                    </div>
                </div>
                <div class="about__photos col-sm-12 col-md-6">
                    <?php if (!empty($about_image1)): ?>
                    <img class="about__photo about__photo--back" src="<?=$about_image1['url']?>" alt="<?=$about_image2['alt']?>">
                    <?php endif;?>
                    <?php if (!empty($about_image2)): ?>
                    <img class="about__photo about__photo--front" src="<?=$about_image2['url']?>" alt="<?=$about_image2['alt']?>">
                    <?php endif;?>
                </div>
            </div>
        </div>
    </section>
