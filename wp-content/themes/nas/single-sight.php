<?php get_header();?>
<?php
            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content', get_post_type() );

                //the_post_navigation();
?>
<section class="article-header">
    <img src=<?php echo  get_the_post_thumbnail_url( get_the_ID()); ?> alt="archaeological sight photo" class="intro-img">
</section>
<section class="article-wrapper">
    <div class="article-info-container">
        <div class="article-category-container">
            <span class="article-category">ПАМЯТНИКИ</span>
            <span>—</span>
            <span class="article-date"><?php the_date('d.m.y'); ?></span>
        </div>
        <div class="article-tags-container">
            <span class="tag">памятники</span>
        </div>
    </div>
    <h1 class="article-name"><?php the_title();?></h1>
    <?php the_content();?>            
</section>
<!-- другие публикации -->
<section class="wrapper"> 
    <h2 class="left-align">ДРУГИЕ ПУБЛИКАЦИИ</h2>
    <div class="news-container">
                <?php
                    $news_args = array(
                        'post_type' => 'post',
                        'numberposts' => 3,
                        'publish' => 'true'
                    );
                    $news_posts = get_posts( $news_args);
                    foreach ($news_posts as $post){
                        include(get_template_directory(  ).'/templates/template_news_block.php');
                    }
                    wp_reset_postdata();
                ?>
    </div>            
</section>
<?php include(get_template_directory(  ).'/templates/template_insta.php');?>
<?php              // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
?>
<?php get_footer();?>    