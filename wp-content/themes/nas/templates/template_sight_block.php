<?php
    $description = get_post_meta(get_the_ID(), 'sight_description', true);
    $location  = get_post_meta(get_the_ID(), 'location_name', true);
    $url = get_permalink(get_the_ID());
    //the_meta(); 
?>

<div class="monument-container green">
    <div class="monument-img">
        <img src="<?php echo  get_the_post_thumbnail_url( get_the_ID(), 'family-news-prewiev'); ?>" alt="archaeological sight">
    </div>
    <div class="monument-text">
        <p class="monument-location"><?=$location ?></p>
        <h2 class="monument-name"><? the_title();?></h2>
        <p class="monument-description"><?=$description ?></p>
        <a href="<?=$url ?>" class="button">УЗНАТЬ БОЛЬШЕ</a>
    </div>
</div>