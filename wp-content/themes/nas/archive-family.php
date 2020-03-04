<?php get_header();?>
<!-- family-test -->
<section class="wrapper">
            <div class="family-pretext">
                <h1>НАША СЕМЬЯ</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse mollitia eligendi, dolor deleniti facilis, numquam quidem iste, rerum perspiciatis nesciunt minus omnis sit porro obcaecati hic cum rem voluptatum sequi!</p>
            </div>
            <div class="news-navigation">
                <span class="tags-container">
                    <a href="" class="tag active">ВСЕ</a>
                    <a href="" class="tag">ЭТИ</a>
                    <a href="" class="tag">ТЕ</a>
                    <a href="" class="tag">ОНИ</a>
                </span>
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