<?php get_header();?>
  <!-- sights-test -->
        <section class="wrapper no-padding">
            <div class="page-pretext">
                <h1>НАШИ ПАМЯТНИКИ</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse mollitia eligendi, dolor deleniti facilis, numquam quidem iste, rerum perspiciatis nesciunt minus omnis sit porro obcaecati hic cum rem voluptatum sequi!</p>
            </div>
        </section>
        <section class="no-padding">
            <?php
                $sight_args = array(
                    'post_type' => 'sight',
                    //'numberposts' => 3,
                    'publish' => 'true'
                );
                $sight_posts = get_posts( $sight_args);
                foreach ($sight_posts as $post){
                    include(get_template_directory(  ).'/templates/template_sight_block.php');
                }
                wp_reset_postdata();
            ?>
        </section>
<?php get_footer();?>  