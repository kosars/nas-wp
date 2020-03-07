<?php
    $description = get_post_meta(get_the_ID(), 'sight_description', true);
    $location  = get_post_meta(get_the_ID(), 'location_name', true);
    $url = get_permalink(get_the_ID());
    //the_meta(); 
?>
<div class="monuments-block" style="background-image: url(<?php echo  get_the_post_thumbnail_url( get_the_ID()); ?>);">
    <div class="wrapper">
        <div class="content">
            <h5><?=$location ?></h5>
            <h2><? the_title();?></h2>
            <p>Мы активно занимаемся исследованием наскальной живописи и быта древних людей на уникальном комплексе Каменная Могила. Последние 8 лет работаем тут в сотрудничестве с Институтом доистории города Берн (Швейцария)</p>
            <a href="<?=$url ?>" class="button">ПОСМОТРЕТЬ</a>                
        </div>
    </div>
</div>