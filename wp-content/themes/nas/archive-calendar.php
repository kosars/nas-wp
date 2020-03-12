<?php get_header();?>
      <section class="wrapper">
        <?php if( pll_current_language() == 'en'):?>
            <div class="family-pretext">
                <h1>EVENTS CALENDAR</h1>
                <p>
                    In addition to regular meetings on Wednesdays and Saturdays at Nemirovich-Danchenko, 46a, we conduct many different activities. They are announced here or on Instagram
                    <a href="https://www.instagram.com/new_archaeological_school/" target="_blank" class="insta-link">@new_archaeological_school</a>
                </p>
            </div>
        <?php else:?>
            <div class="family-pretext">
                <h1>КАЛЕНДАРЬ СОБЫТИЙ</h1>
                <p>
                    Кроме регулярных собраний по средам и субботам на Немировича-Данченко 46а, мы ведем множество разных активностей. Они анонсированы здесь или в Инстаграмме 
                    <a href="https://www.instagram.com/new_archaeological_school/" target="_blank" class="insta-link">@new_archaeological_school</a>
                </p>
            </div>
        <?php endif; ?>
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
        <?php if( pll_current_language() == 'en'):?>
            <a href="" class="button centered">ALL EVENTS</a>
        <?php else:?>
            <a href="" class="button centered">ВСЕ СОБЫТИЯ</a>
        <?php endif; ?>
      </section>

<?php get_footer();?>  