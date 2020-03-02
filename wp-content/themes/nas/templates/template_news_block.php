<?php
    // $type = get_post_meta(get_the_ID(), 'event_type', true);
    // $date_start = strtotime(get_post_meta(get_the_ID(), 'event_date_start', true));
    // $date_end = strtotime(get_post_meta(get_the_ID(), 'event_date_end', true));
    $description = get_post_meta(get_the_ID(), '_aioseop_description', true);
    // $coords = get_post_meta(get_the_ID(), 'event_coords', true);
    
    //the_meta(); 
?>
<div class="news-card">
    <div class="news-pic">
        <img src="<?php echo  get_the_post_thumbnail_url( get_the_ID(), 'family-news-prewiev'); ?>" alt="">
    </div>
    <div class="news-text">
        <h5>Пост опубликован: <?php the_date(); ?></h5>
        <h5><? the_date('j F Y');?></h5>
        <h3><? the_title();?></h3>
        <p><?=$description ?></p>
        <a href="" class="button"> <i class="fas fa-chevron-right"></i> Читать полностью</a>
    </div>
</div>