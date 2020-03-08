<?php get_header();?>
<?php
            while ( have_posts() ) :
                the_post();
                get_template_part( 'template-parts/content', get_post_type() );

     
                $type = get_post_meta(get_the_ID(), 'event_type', true);
                $date_start = strtotime(get_post_meta(get_the_ID(), 'event_date_start', true));
                $date_end = strtotime(get_post_meta(get_the_ID(), 'event_date_end', true));
                $description = get_post_meta(get_the_ID(), 'event_description', true);
                $coords = get_post_meta(get_the_ID(), 'event_coords', true);      
                  //the_post_navigation();
?>
<section class="article-wrapper">
    <h1 class="article-name"><?php the_title();?></h1>
    <div class="article-info-container">
        <div class="article-category-container">
            <span class="article-category"><?php   echo date_i18n('j F, Y', $date_start);?>
                <?php   if(!empty(get_post_meta(get_the_ID(), 'event_date_end', true))){?> — <?echo date_i18n('j F, Y', $date_end);}?>
            <span class="article-date"> <?php   if(!empty(get_post_meta(get_the_ID(), 'event_time_start', true))){?> Начало в <?echo date_i18n('H:i', strtotime(get_post_meta(get_the_ID(), 'event_time_start', true)));}?></span>

            </span>
        </div>
        <div class="article-tags-container">
            <span class="tag"><?=$type?></span>
        </div>
    </div>
    <?php the_content();?>            
</section>
<?php include(get_template_directory(  ).'/templates/template_insta.php');?>
<?php              // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.
?>
<?php get_footer();?>    