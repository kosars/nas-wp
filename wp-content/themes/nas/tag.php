<?php get_header();
    $category = get_queried_object();
    $current_cat_slug = $category->slug;
    $cat= get_tags([
        'orrderby'=>'name',
        'order'        => 'ASC',
        'hide_empty'   => 1,
    ]);?>
<section>
        <div class="news-navigation">
            <span class="tags-container">
                <?php
                
                
                    // wp_list_categories($category_args); 
                    $tags = 'tag';
                    if( $cat ){
                        foreach( $cat as $item ){
                            if($item->slug == $current_cat_slug){$tags = 'tag active';}
                            else{$tags = 'tag';}
                            if( pll_current_language() == 'en') echo '<a class="'.$tags.'" href="'.get_site_url().'/en//tag/'.$item->slug.'/">'. $item->name . '</a>';
                            else echo '<a class="'.$tags.'" href="'.get_site_url().'/tag/'.$item->slug.'/">'. $item->name . '</a>';
                    
                        }
                    }
                ?>

            </span>
        </div>
        <div class="news-container">
                <?php
                    $news_args = array(
                        'post_type' => 'post',
                        'tag' => $current_cat_slug,
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
        <a href="" class="button centered load-more">БОЛЬШЕ НОВОСТЕЙ</a>
      </section>
<?php get_footer();?>  