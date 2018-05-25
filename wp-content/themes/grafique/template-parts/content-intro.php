<?php
// Advanced Custom Fields
$intro_title = get_field('intro_title');
$intro_description = get_field('intro_description');
$intro_subtitle_thin = get_field('intro_subtitle_thin');
$intro_subtitle_bold = get_field('intro_subtitle_bold');
?>
<section class="section intro">
    <div class="container">
        <div class="intro__years-box">
            <p class="intro__years-box-title">19</p>
            <p class="intro__years-box-title2">Years</p>
            <p class="intro__years-box-title3">of experience</p>
        </div>
        <div class="intro__welcome">
            <header>
                <h2 class="section__header section__header--intro">
                    <?=$intro_title?>
                </h2>
            </header>
            <div class="intro__welcome-container">
                <div class="intro__welcome-box">
                    <p class="section__subtitle">
                        <?=$intro_subtitle_thin?>
                    </p>
                    <p class="section__subtitle section__subtitle--bold">
                        <?=$intro_subtitle_bold?>
                    </p>
                </div>
                <p class="section__text section__text--intro">
                    <?=$intro_description?>
                </p>
            </div>
        </div>
    </div>
</section>
