<?php get_header();?>
<section class="margin-top">
            <img class="icon icon-1" src="<?php echo  get_template_directory_uri() ?>/img/icon-1.png" alt="icon-1">
            <h1>МЫ ХОТИМ СДЕЛАТЬ АРХЕОЛОГИЮ ДОСТУПНОЙ</h1>
            <!-- <p class="centered">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p> -->
            <div class="border-bottom"></div>
            <div class="double-block">
                <div class="block">
                    <div class="icon-circle">
                        <img src="<?php echo  get_template_directory_uri() ?>/img/icon-2.png" alt="icon" class="icon">
                    </div>
                    <h2>Археологические экспедиции</h2>
                    <p>Солнце ярко светит, ветер бьет в лицо, в руках — тысячелетние артефакты, а в лагере — десятки друзей. Чего ещё желать?</p>
                    <a href="<?php echo get_post_type_archive_link('sight'); ?>">НАШИ ЭКСПЕДИЦИ</a>
                </div>
                <div class="block">
                    <div class="icon-circle">
                        <img src="<?php echo  get_template_directory_uri() ?>/img/paper_white.svg" alt="icon" class="icon">
                    </div>
                    <h2>Научная Деятельность</h2>
                    <p>Мы постоянно работаем, анализируем и обрабатываем находки. И не зря — всё это мы показываем и рассказываем заинтересованной публике, а наши статьи публикуют в Австралии, Италии и Великобритании.</p>
                    <a href="<?php echo get_site_url().'/'; ?>">КАК ПРИНЯТЬ УЧАСТИЕ</a>
                </div>
            </div>
        </section>
        <!-- новости -->
        <section>
            <img class="icon icon-4" src="<?php echo  get_template_directory_uri() ?>/img/icon-4.png" alt="icon">
            <h1>НАШИ НОВОСТИ</h1>
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
            <div class="news-links">
                <a href="<?php echo get_site_url().'/all/'; ?>" class="first">БОЛЬШЕ НОВОСТЕЙ</a>
            </div>
        </section>
        <!-- памятники карусель -->
        <section>
            <img class="icon icon-5" src="<?php echo  get_template_directory_uri() ?>/img/icon-5.png" alt="icon">
            <h1>НАШИ ПАМЯТНИКИ</h1>
            <p class="centered">Каждый археологический памятник уникален и неповторим, но нам повезло работать в действительно крутых и зрелищных местах, которые в буквальном смысле изменили ход до-Истории</p>
            <div class="border-bottom"></div>
            <div class="owl-carousel owl-sights">
                <?php
                    $sight_args = array(
                        'post_type' => 'sight',
                        //'numberposts' => 3,
                        'publish' => 'true'
                    );
                    $sight_posts = get_posts( $sight_args);
                    foreach ($sight_posts as $post){
                        include(get_template_directory(  ).'/templates/template_sight_slide.php');
                    }
                    wp_reset_postdata();
                ?>
            </div>
            
            <div class="bottom-link">
                <a href="<?php echo get_post_type_archive_link('sight'); ?>">ДРУГИЕ ПАМЯТНИКИ</a>
            </div>   
        </section>
        <?php include(get_template_directory(  ).'/templates/template_insta.php');?>
        <!-- календарь -->
        <section>
            <img class="icon icon-6" src="<?php echo  get_template_directory_uri() ?>/img/icon-6.png" alt="icon">
            <h1>КАЛЕНДАРЬ СОБЫТИЙ</h1>
            <div class="calendar">
                <?php
                    $calendar_args = array(
                        'post_type' => 'calendar',
                        'numberposts' => 3,
                        'publish' => 'true'
                    );
                    $calendar_posts = get_posts( $calendar_args);
                    foreach ($calendar_posts as $post){
                        include(get_template_directory(  ).'/templates/template_calendar_block.php');
                    }
                    wp_reset_postdata();
                ?>
            </div>
            <div class="bottom-link">
                <a href="<?php echo get_post_type_archive_link('calendar'); ?>">ВСЕ СОБЫТИЯ</a>
            </div> 
        </section>
        <!-- участие -->
        <section class="green">
            <img class="icon icon-7" src="<?php echo  get_template_directory_uri() ?>/img/icon-7.png" alt="icon">
            <h1>КАК ПРИНЯТЬ УЧАСТИЕ?</h1>
            <div class="double-block how-to">
                <div class="block">
                    <h3>Приезжайте в экспедицию</h3>
                    <p>Мы всегда открыты для тех, кто хочет ощутить дыхание тысячелетий и совершить настоящее открытие.</p>
                </div>
                <div class="block">
                    <h3>Привозите группу</h3>
                    <p>Хотите приехать вместе со своими учениками, друзьями или коллегами? Каждую неделю мы принимаем группу молодых людей, заинтересованных в истории и археологии.</p>
                </div>
                <div class="block">
                    <h3>Приходите в лабораторию</h3>
                    <p>Настоящая магия происходит здесь — взаимодействие с культурным наследием, обработка материала, написание статей. А главное — вкусные печеньки и веселые игры.</p>
                </div>
            </div>
            <div class="bottom-link">
                <a href="<?php echo get_post_type_archive_link('calendar'); ?>">КАЛЕНДАРЬ СОБЫТИЙ</a>
            </div> 
        </section>
        <!-- команда -->
        <section class="margin-top wrapper">
            <img class="icon icon-8" src="<?php echo  get_template_directory_uri() ?>/img/icon-8.png" alt="icon">
            <h1>НАША КОМАНДА</h1>
            <div class="family-block">
                <div class="block">
                    <img src="<?php echo  get_template_directory_uri() ?>/img/Tu.jpg" alt="photo">
                </div>
                <div class="block text">
                    <h2>Олег Тубольцев</h2>
                    <h4>Бессменный вождь</h4>
                    <p>Лидер, глава, создатель и вдохновитель НАШего пространства. Он буквально живет своим делом, прививая нам страсть к эпохе бронзы и своим примером демонстрируя (как бы банально это ни было), что до истины стоит докапываться, не жалея сил. Столетия археологии воплотились в его многочисленных умениях, которыми он охотно делится с нами.
                    </p>
                    <div class="family-link">
                        <a href="" class="first">ВСЯ КОМАНДА</a>
                    </div>
                </div>
            </div>
            
        </section>
        <!-- вопросы -->
        <section class="no-padding">  
            <div class="questions-donate-block">
                <div class="block questions">
                    <h1>ОСТАЛИСЬ ВОПРОСЫ?</h1>
                    <form action="" method="post">
                        <input type="text" name="name" placeholder="Имя">
                        <input type="email" name="email" placeholder="Электронная почта">
                        <textarea name="message" rows="3" placeholder="Вопрос"></textarea>
                        <input type="submit" value="ОТПРАВИТЬ" class="button">
                    </form>
                </div>
                <div class="block donate">
                    <h1>ПОМОГИТЕ НАШЕМУ НАСЛЕДИЮ</h1>
                    <p> Мы не торговцы антиквариатом, а потому любая поддержка крайне важна для нашей науки. Без неё археология уже была бы в прошлом, как и предмет её изучения
                    </p>
                    <a href="<?php echo get_site_url().'/help'; ?>" class="button">ПОМОЧЬ</a>
                    
                </div>
            </div>
            
        </section>     
        <?php get_footer();?>    