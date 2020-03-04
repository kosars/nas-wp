<?php
    $type = get_post_meta(get_the_ID(), 'event_type', true);
    $date_start = strtotime(get_post_meta(get_the_ID(), 'event_date_start', true));
    $date_end = strtotime(get_post_meta(get_the_ID(), 'event_date_end', true));
    $description = get_post_meta(get_the_ID(), 'event_description', true);
    $coords = get_post_meta(get_the_ID(), 'event_coords', true);
    $url = get_permalink(get_the_ID());
    //the_meta(); 
?>
<div class="block">
    <div class="calendar-image">
        <img src=<?php echo  get_the_post_thumbnail_url( get_the_ID(), 'calendar-prewiev') ?> alt="photo" class="circle">
    </div>
    <div class="calendar-content">
        <div class="content-name">
            <h3><?php the_title(); ?><a class="location" href="<?php echo($coords); ?>"><i class="fas fa-map-marker-alt"></i></a></h3>
            <p><?php echo($type); ?></p>
        </div>
        <div class="content-description">
            <h3>
                <?php   echo date_i18n('j F, Y', $date_start);?>
                <?php   if(!empty(get_post_meta(get_the_ID(), 'event_date_end', true))){?> — <br> <?echo date_i18n('j F, Y', $date_end);}?>
                <?php   if(!empty(get_post_meta(get_the_ID(), 'event_time_start', true))){?> в <?echo date_i18n('H:i', strtotime(get_post_meta(get_the_ID(), 'event_time_start', true)));}?>
            </h3>
            <p><?=$description?></p>
        </div>
        <div class="join">
            <a href="<?=$url?>" class="button">ПРИСОЕДЕНИТЬСЯ</a>
        </div>
    </div>
</div>