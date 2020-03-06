<?php get_header();?>
  <!-- sights-test -->
        <section class="wrapper no-padding">
            <div class="page-pretext">
                <h1>НАШИ ПАМЯТНИКИ</h1>
                <p>В Украине множество (более 150 тысяч) прекрасных ярких археологических объектов, большинство из которых сконцентрировано в красочных местах на берегах рек и морей, в горных хребтах и бескрайних степях. Организация археологических раскопок давно стала похожа на огромный волонтёрский проект, работающий на энтузиазме любителей древности.</p>
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