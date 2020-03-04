<?php get_header();?>
      <section class="wrapper">
        <div class="family-pretext">
            <h1>КАЛЕНДАРЬ СОБЫТИЙ</h1>
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