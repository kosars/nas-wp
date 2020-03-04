<?php get_header();?>
<section>
        <div class="news-navigation">
            <span class="tags-container">
                <a href="" class="tag active">ВСЕ</a>
                <?php wp_list_categories(); ?>
            </span>
            <span class="find-container">
                <div class="icon">
                    <i class="fa fa-search" aria-hidden="true" class=""></i>
                </div>
                <input type="text" name="" id="" placeholder="Поиск" class="find">
            </span>
        </div>
        <ul>
            
        </ul>
        <div class="news-container">
                <?php
                    $news_args = array(
                        'post_type' => 'post',
                        //'numberposts' => 3,
                        'publish' => 'true'
                    );
                    $news_posts = get_posts( $news_args);
                    foreach ($news_posts as $post){
                        include(get_template_directory(  ).'/templates/template_news_block.php');
                    }
                    wp_reset_postdata();
                ?>
        </div>
        <a href="" class="button centered">БОЛЬШЕ НОВОСТЕЙ</a>
      </section>
<?php get_footer();?>  