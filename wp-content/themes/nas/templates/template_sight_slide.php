<?php
    $description = get_post_meta(get_the_ID(), 'slide_text', true);
    $location  = get_post_meta(get_the_ID(), 'location_name', true);
    $url = get_permalink(get_the_ID());
    //the_meta(); 
?>
<div    class="monuments-block" 
        style="
            background-image: url(<?php echo  get_the_post_thumbnail_url( get_the_ID()); ?>);
            -moz-background-size: 100%; /* Firefox 3.6+ */
            -webkit-background-size: 100%; /* Safari 3.1+ и Chrome 4.0+ */
            -o-background-size: 100%; /* Opera 9.6+ */
            background-size: 100%; /* Современные браузеры */
        "
>
    <div class="wrapper">
        <div class="content">
            <h5><?=$location ?></h5>
            <h2><? the_title();?></h2>
            <p><?=$description ?></p>
            <a href="<?=$url ?>" class="button">ПОСМОТРЕТЬ</a>                
        </div>
    </div>
</div>