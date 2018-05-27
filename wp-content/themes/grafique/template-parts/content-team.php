
<?php
// Advanced Custom Fields
$team_section_title = get_field('team_section_title');
$team_section_subtitle_thin = get_field('team_section_subtitle_thin');
$team_section_subtitle_bold = get_field('team_section_subtitle_bold');
$teamMembers = new WP_Query(
    array(
        'post_type' => 'team_members',
        'order_by' => 'post_id',
        'order' => 'ASC',
    )
)
?>
<section class="section team" id="team">
    <div class="container">
        <div class="row">
            <header class="col-sm-12 col-md-4">
                <h2 class="text-sm-center text-md-left section__header">
                    <?=$team_section_title?>
                </h2>
                <p class="text-sm-center text-md-left section__subtitle">
                    <?=$team_section_subtitle_thin?>
                </p>
                <p class="text-sm-center text-md-left section__subtitle section__subtitle--bold section__subtitle--small">
                    <?=$team_section_subtitle_bold?>
                </p>
            </header>
           
            <?php while ($teamMembers->have_posts()): $teamMembers->the_post()?>
                    <div class="team__member col-sm-12 col-md-4">
                        <img src="<?=get_field('team_member_image')['url']?>" alt="<?=get_field('team_member_image')['alt']?>">
                        <p class="team__member-name"><?=get_field('team_member_title_thin')?>
                            <strong class="team__member-lastname"><?=get_field('team_member_title_bold')?></strong>
                        </p>
                        <p class="team__member-bio"><?=get_field('team_member_description')?></p>
                    </div>
            <?php endwhile; wp_reset_query();?>
        </div>
    </div>
</section>
