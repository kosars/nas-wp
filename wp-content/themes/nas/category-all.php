<?php get_header();
    $cat= get_categories([
        'style'=>'none',
        'show_option_all'=>'Все',
        'hide_empty'   => 0,
    ]);?>
<section>
        <div class="news-navigation">
            <span class="tags-container">
                <!-- <a href="" class="tag active">ВСЕ</a> -->
                <?php
                
                $category = get_queried_object();
                $current_cat_slug = $category->slug;
                    // wp_list_categories($category_args); 
                    $tags = 'tag';
                    if( $cat ){
                        foreach( $cat as $item ){
                            if($item->slug == $current_cat_slug){$tags = 'tag active';}
                            else{$tags = 'tag';}
                            echo '<a class="'.$tags.'" href="'.get_site_url().'/'.$item->slug.'/">'. $item->name . '</a>';
                    
                        }
                    }
                ?>

            </span>
            <!-- <span class="find-container">
                <div class="icon">
                    <i class="fa fa-search" aria-hidden="true" class=""></i>
                </div>
                <input type="text" name="" id="" placeholder="Поиск" class="find">
            </span> -->
        </div>
        <ul>
            
        </ul>
        <div class="news-container">
                <?php
                    $news_args = array(
                        'post_type' => 'post',
                        'numberposts' => 6,
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