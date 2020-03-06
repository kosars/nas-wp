<?php get_header();?>
      <section class="wrapper">
        <div class="family-pretext">
            <h1>КАЛЕНДАРЬ СОБЫТИЙ</h1>
            <p>
                Кроме регулярных собраний по средам и субботам на Немировича-Данченко 46а, мы ведем множество разных активностей. Они анонсированы здесь или в Инстаграмме 
                <a href="https://www.instagram.com/new_archaeological_school/" target="_blank">@new_archaeological_school</a>
            </p>
        </div>
        <div class="calendar">
            <?php
                    $calendar_args = array(
                        'post_type' => 'calendar',
                        'publish' => 'true'
                    );
                    $calendar_posts = get_posts( $calendar_args);
                    foreach ($calendar_posts as $post){
                        include(get_template_directory(  ).'/templates/template_calendar_block.php');
                    }
                    wp_reset_postdata();
            ?>
        </div>
        <a href="" class="button centered">ВСЕ СОБЫТИЯ</a>
      </section>

<?php get_footer();?>  