<?php get_header();?>
<!-- family-test -->
<section class="wrapper">
    <?php if( pll_current_language() == 'en'):?>
        <div class="family-pretext">
                <h1>TEAM OF NAS</h1>
                <p>NAS — it is people.
                    Those who, despite the hellish conditions, work to make an archaeological discovery.
                    Common work, life, goals and interests inevitably transform us from “just organization into a big family”.</p>
            </div>
    <?php else:?>
            <div class="family-pretext">
                <h1>НАША КОМАНДА</h1>
                <p>НАШ — это прежде всего люди. 
                    Те, кто несмотря на адские условия работает, чтобы совершить археологическое открытие. 
                    Общая работа, быт, цели и интересы неизбежно превращают нас из “просто организации в большую семью”.</p>
            </div>
    <?php endif; ?>
            <div class="family-container">
                <?php
                    $family_args = array(
                        'post_type' => 'family',
                        //'numberposts' => 3,
                        'publish' => 'true'
                    );
                    $family_posts = get_posts( $family_args);
                    foreach ($family_posts as $post){
                        include(get_template_directory(  ).'/templates/template_team_block.php');
                    }
                    wp_reset_postdata();
                ?>
            </div>
            <?php if( pll_current_language() == 'en'):?>
                <a href="" class="button centered">ALL MEMBERS</a>
            <?php else:?>
                <a href="" class="button centered">ВСЯ СЕМЬЯ</a>
            <?php endif; ?>
        </section>
        <?php get_footer();?>  