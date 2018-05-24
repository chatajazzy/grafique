
<?php
/* Template Name: Home Page*/
get_header();

// Advanced Custom Fields
$intro_title = get_field('intro_title');
$intro_description = get_field('intro_description');
$intro_subtitle_thin = get_field('intro_subtitle_thin');
$intro_subtitle_bold = get_field('intro_subtitle_bold');

$about_section_title = get_field('about_section_title');
$about_section_description = get_field('about_section_description');
$about_section_subtitle_thin = get_field('about_section_subtitle_thin');
$about_section_subtitle_bold = get_field('about_section_subtitle_bold');
$about_image1 = get_field('about_image1');
$about_image2 = get_field('about_image2');

$team_section_title = get_field('team_section_title');
$team_section_subtitle_thin = get_field('team_section_subtitle_thin');
$team_section_subtitle_bold = get_field('team_section_subtitle_bold');

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

    <div class="hero">
        <?php include 'hero-slider.php';?>
    </div>
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
    <section class="section about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-6">
                    <header>
                        <h2 class="section__header"><?=$about_section_title?></h2>
                    </header>
                    <div class="about__welcome-box">
                        <p class="section__subtitle"><?=$about_section_subtitle_thin?></p>
                        <p class="section__subtitle section__subtitle--bold"><?=$about_section_subtitle_bold?></p>
                        <p class="section__text">
                           <?=$about_section_description?>
                        </p>
                    </div>
                </div>
                <div class="about__photos col-sm-12 col-md-6">
                  <?php if (!empty($about_image1)): ?>
                    <img class="about__photo about__photo--back" src="<?=$about_image1['url']?>"  alt="<?=$about_image2['alt']?>">
                  <?php endif;?>
                  <?php if (!empty($about_image2)): ?>
                    <img class="about__photo about__photo--front" src="<?=$about_image2['url']?>" alt="<?=$about_image2['alt']?>">
                  <?php endif;?>
                </div>
            </div>
        </div>
    </section>
    <section class="section achievements">
        <header class="text-center">
            <h2 class="section__header">Achievements</h2>
        </header>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4">
                    <div class="achievements__item">
                        <p class="achievements__item-number" data-from="0" data-to="185" data-speed="5000">185</p>
                        <p class="achievements__item-text">Projects</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="achievements__item">
                        <p class="achievements__item-number" data-from="0" data-to="17" data-speed="5000">17</p>
                        <p class="achievements__item-text">Employess</p>
                    </div>
                </div>
                <div class="col-sm-12 col-md-4">
                    <div class="achievements__item">
                        <p class="achievements__item-number" data-from="0" data-to="39" data-speed="5000">39</p>
                        <p class="achievements__item-text">Contractors</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
        <?php endwhile;?>
        </ul>
    </section>
    <section class="section team" id="team">
        <div class="container">
            <div class="row">
                <header class="text-sm-center text-md-left col-sm-12 col-md-4">
                    <h2 class="section__header">
                        <?=$team_section_title?>
                    </h2>
                    <p class="section__subtitle">
                        <?=$team_section_subtitle_thin?>
                    </p>
                    <p class="section__subtitle section__subtitle--bold section__subtitle--small">
                        <?=$team_section_subtitle_bold?>
                    </p>
                </header>
                <div class="team__member col-sm-12 col-md-4">
                    <img src="<?php bloginfo('stylesheet_directory')?>/img/architect-team1.jpg" alt="architect 2">
                    <p class="team__member-name">Adam
                        <strong class="team__member-lastname">Thomson</strong>
                    </p>
                    <p class="team__member-bio">His career started in the late 80s, when it wasn’t so easy to implement creative ideas, as it is today.
                        Adam has his own unique vision of architecture.</p>
                </div>
                <div class="team__member col-sm-12 col-md-4">
                    <img src="<?php bloginfo('stylesheet_directory')?>/img/architect-team2.jpg" alt="architect 1">
                    <p class="team__member-name">Perry
                        <strong class="team__member-lastname">Maverick</strong>
                    </p>
                    <p class="team__member-bio">Perry is the most creative architect in the company, involved in many commercial projects, as well as
                        in building exclusive wooden family homes.</p>
                </div>
            </div>
        </div>
    </section>
    <section class="section contact" id="contact">
        <div class="row">
            <div class="col-sm-12 col-md-7 contact__map" id="google-maps"></div>
            <div class="col-sm-12 col-md-3 contact__info">
                <header class="col-sm-12">
                    <h2 class="section__header">Contacts</h2>
                    <p class="section__subtitle">Contact</p>
                    <p class="section__subtitle section__subtitle--bold">with us</p>
                </header>
                <p class="contact__text">Glasgow</p>
                <p class="contact__text">4578 Marmora Road</p>
                <a href="tel:#" class="contact__link">+7-495-1234567</a>
                <a href="tel:#" class="contact__link">+7-495-1234567</a>
                <a href="mailto:info@demolink.org" class="contact__link contact__link--mail">info@demolink.org</a>
            </div>
        </div>
        <div class="container">
            <div class="row justify-content-md-center">
                <form class="col-sm-12 col-md-8 col-md contact__form">
                    <header class="text-center col-sm-12 contact__form-header">
                        <p class="section__subtitle">Ask</p>
                        <p class="section__subtitle section__subtitle--bold">a question</p>
                    </header>
                    <div class="form-group">
                        <input type="text" class="form-control contact__form-input" placeholder="Name:">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control contact__form-input" placeholder="E-mail address:">
                    </div>
                    <textarea class="form-control contact__form-textarea" rows="3" placeholder="Question:"></textarea>
                    <button type="submit" class="btn contact__form-submit">Send</button>
                </form>
            </div>
        </div>
    </section>

<?php
get_footer();
