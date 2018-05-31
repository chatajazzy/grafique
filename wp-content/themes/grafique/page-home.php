<?php
/* Template Name: Home Page*/
get_header();
?>

    <?php include locate_template('./template-parts/content-hero.php', false, false);
?>
    <?php include locate_template('./template-parts/content-intro.php', false, false);
?>
    <?php include locate_template('./template-parts/content-about.php', false, false);
?>
    <?php include locate_template('./template-parts/content-achievements.php', false, false);
?>
    <?php include locate_template('./template-parts/content-projects.php', false, false);
?>
    <?php include locate_template('./template-parts/content-team.php', false, false);
?>
    <?php include locate_template('./template-parts/content-contact.php', false, false);
?>

    <?php get_footer();
