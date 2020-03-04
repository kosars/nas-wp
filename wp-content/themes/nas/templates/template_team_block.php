<?php
    // $type = get_post_meta(get_the_ID(), 'event_type', true);
    // $date_start = strtotime(get_post_meta(get_the_ID(), 'event_date_start', true));
    // $date_end = strtotime(get_post_meta(get_the_ID(), 'event_date_end', true));
    $description = get_post_meta(get_the_ID(), 'family_description', true);
    $category = get_post_meta(get_the_ID(), 'family_category', true);
    $url = get_permalink(get_the_ID());
    
    //the_meta(); 
?>
<a class="family-card" href="<?=$url?>">
    <div class="family-pic">
        <img src="<?php echo  get_the_post_thumbnail_url( get_the_ID(), 'family-news-prewiev'); ?>" alt="археолог(archaeologist)">
    </div>
    <div class="family-text">
        <p class="family-prof"><?=$category ?></h5>
        <h3><? the_title();?></h3>
        <p class="family-description"><?=$description ?></p>
    </div>
</a>