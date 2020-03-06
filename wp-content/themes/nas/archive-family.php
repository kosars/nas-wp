<?php get_header();?>
<!-- family-test -->
<section class="wrapper">
            <div class="family-pretext">
                <h1>НАША КОМАНДА</h1>
                <p>НАШ — это прежде всего люди. 
                    Те, кто несмотря на адские условия работает, чтобы совершить археологическое открытие. 
                    Общая работа, быт, цели и интересы неизбежно превращают нас из “просто организации в большую семью”.</p>
            </div>
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
            <a href="" class="button centered">ВСЯ СЕМЬЯ</a>
        </section>
        <?php get_footer();?>  